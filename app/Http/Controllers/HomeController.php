<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\RouteFee;
use App\Models\Station;
use App\Models\TrainSchedule;
use App\Models\TrainSeat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::all();
        return view('frontend.index', compact('stations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function aboutus()
    {
        return view('frontend.about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contact_us(Request $request)
    {
        return view('frontend.contact-us');
    }
    public function privacy_policy(Request $request)
    {
        return view('frontend.privacy-policy');
    }
    public function bookingStore(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string',
            'schedule_id' => 'required|exists:train_schedules,id',
            'seats' => 'required|array',
            // 'seats.*' => 'exists:train_seats,id',
            'from_station_id' => 'required|exists:stations,id',
            'to_station_id' => 'required|exists:stations,id',
        ]);

        $trainSchedule = TrainSchedule::find($request->schedule_id);
        if (!$trainSchedule) {
            return response()->json(['message' => 'Invalid schedule ID.'], 400);
        }

        $bookingLimit = 5;
        $bookingId = [];
        foreach ($request->seats as $seatId) {
            if ($seatId != null) {
                $seat = TrainSeat::find($seatId);

                if (!$seat) {
                    return response()->json(['message' => "Seat ID {$seatId} not found."], 400);
                }

                if ($seat->is_booked) {
                    return response()->json(['message' => "Seat {$seat->seat_number} is already booked."], 400);
                }

                $existingBookingsCount = Booking::where('phone_number', $request->phone_number)
                    ->where('schedule_id', $trainSchedule->id)
                    ->whereDate('created_at', $trainSchedule->schedule_date)
                    ->count();
                if ($existingBookingsCount >= $bookingLimit) {
                    return response()->json(['message' => 'Booking limit reached for this phone number on this day.'], 400);
                }

                $booking = Booking::create([
                    'phone_number' => $request->phone_number,
                    'train_id' => $seat->trainSchedule->train_id,
                    'schedule_id' => $request->schedule_id,
                    'seat_id' => $seat->id,
                    'from_station_id' => $request->from_station_id,
                    'to_station_id' => $request->to_station_id,
                    'status' => 'booked',
                ]);

                $seat->update(['is_booked' => true]);
                $bookingId[] = $booking->id;
            }
        }

        return response()->json(['message' => 'Seats booked successfully.', 'bookingIds' => $bookingId], 200);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function sendOtp(Request $request)
    {
        $phoneNumber = $request->input('phone_number');
        $otp = rand(100000, 999999);
        Session::put('otp', $otp);
        Session::put('otp_phone', $phoneNumber);

        $message = "Your OTP is: $otp Ralway Booking Portal";

        $apiUrl = "https://www.textit.biz/sendmsg/?id=94776254981&pw=4345&to=$phoneNumber&text=" . urlencode($message);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            return response()->json(['success' => false, 'message' => "Error sending OTP: $error"]);
        }

        curl_close($ch);
        return response()->json(['success' => true,'otp'=>$otp, 'message' => 'OTP sent successfully.']);
    }
    public function verifyOtp(Request $request)
    {
        $otp = $request->input('otp');
        
        // Check if the OTP matches
        if ($otp == Session::get('otp')) {
            Session::forget('otp');

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid OTP.']);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function bookingCreate(Request $request)
    {
        $schedules = TrainSchedule::all();
        $availableSeats = TrainSeat::where('is_booked', false)->get();
        $stations = Station::all();
        return view('frontend.bookingCreate', compact('stations', 'schedules', 'availableSeats'));
    }
    public function destroy(string $id)
    {
        //
    }
    public function getSchedulesByDate(Request $request)
    {
        $date = $request->input('date');
        $formattedDate = Carbon::createFromFormat('d/m/y', $date)->format('Y-m-d');
        $schedules = TrainSchedule::with('train')->where('schedule_date', $formattedDate)->get();
        return response()->json(['schedules' => $schedules]);
    }
    public function getSeatsByScheduleAndStationsfront(Request $request)
    {
        $scheduleId = $request->schedule_id;
        $fromStationId = $request->from_station_id;
        $toStationId = $request->to_station_id;

        $allSeats = TrainSeat::where('train_schedule_id', $scheduleId)->get();

        $bookedSeats = TrainSeat::where('train_schedule_id', $scheduleId)
            ->whereHas('bookings', function ($query) use ($fromStationId, $toStationId) {
                $query->where('from_station_id', '<=', $toStationId)
                    ->where('to_station_id', '>=', $fromStationId);
            })
            ->pluck('id')
            ->toArray();
        $ticketPrice = $this->getTicketPrice($fromStationId, $toStationId);
        if (!$ticketPrice) {
            return response()->json(['error' => 'No route fee found for this route.'], 404);
        }
        return response()->json([
            'seats' => $allSeats,
            'booked_seat_ids' => $bookedSeats,
            'price' => $ticketPrice
        ]);
    }
    private function getTicketPrice($from_station_id, $to_station_id)
    {
        $totalFare = 0;
        $currentStation = $from_station_id;

        while ($currentStation != $to_station_id) {
            $nextRoute = RouteFee::where('from_station_id', $currentStation)
                ->where('to_station_id', '<=', $to_station_id)
                ->orderBy('to_station_id')
                ->first();

            if (!$nextRoute) {
                return null;
            }

            $totalFare += $nextRoute->ticket_price;
            $currentStation = $nextRoute->to_station_id;
        }

        return $totalFare;
    }
}
