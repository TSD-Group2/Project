<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Station;
use App\Models\Train;
use App\Models\TrainSchedule;
use App\Models\TrainStop;
use Illuminate\Http\Request;

class TrainScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trains = Train::all();
        $stations = Station::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'train_id' => 'required|exists:trains,id',
            'schedule_date' => 'required|date',
            'stops' => 'required|array|min:2',
            'stops.*.station_id' => 'required|exists:stations,id',
            'stops.*.arrival_time' => 'nullable|date_format:H:i',
            'stops.*.departure_time' => 'nullable|date_format:H:i',
            'stops.*.ticket_price' => 'required|numeric|min:0',
        ]);

        $schedule = TrainSchedule::create(['train_id' => $request->train_id,'schedule_date' => $request->schedule_date]);

        foreach ($request->stops as $index => $stop) {
            TrainStop::create([
                'train_schedule_id' => $schedule->id,
                'station_id' => $stop['station_id'],
                'arrival_time' => $stop['arrival_time'],
                'departure_time' => $stop['departure_time'],
                'ticket_price' => $stop['ticket_price'],
                'stop_order' => $index + 1
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
