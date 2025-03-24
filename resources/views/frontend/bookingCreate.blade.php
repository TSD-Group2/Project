@extends('frontend.layouts.app')
@section('title','Add Booking')
@push('styles')
<style>
    #seat-layout {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px;
        background-color: #f5f5f5;
        border-radius: 8px;
        width: fit-content;
        margin: auto;
    }

    .seat-row {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .seat {
        width: 40px;
        height: 40px;
        margin: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #007bff;
        background-color: #fff;
        border-radius: 5px;
    }

    .seat button {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        font-weight: bold;
        cursor: pointer;
    }

    .seat.booked {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .seat.booked button {
        color: white;
        cursor: not-allowed;
    }

    .seat-gap {
        width: 40px;
        height: 40px;
        display: inline-block;
    }

    .seat.selected {
        background-color: #4CAF50;
        color: white;
    }

    .seat.booked {
        background-color: #f44336;
        color: white;
        cursor: not-allowed;
    }
</style>
@endpush
@section('content')
<section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
  <div class="main-bunner-img" style="background-image: url(&quot;frontend/images/train.png &quot;); background-size: cover;"></div>
  <div class="main-bunner-inner">
    <div class="container">
      <div class="box-default">
        <h1 class="box-default-title">Welcome To</h1>

        <p class="big box-default-text">
        <h2>Online Advance Train Seats Reservation!</h2>
        </p>
        <a href="{{ url('/') }}" class="btn btn-primary mt-4">Back to Home</a>
      </div>
    </div>
  </div>
</section>
<section class="section section-lg bg-default">
  <div class="container">
    <div class="row justify-content-left text-left">
      <div class="col-md-12 col-lg-12 wow-outer">
        <div class="wow slideInDown">
          <h2>Book your Tickets</h2>

        </div>
      </div>
    </div>
    <div class="row row-20 row-lg-30">
      <div class="col-md-12 col-lg-12 wow-outer">
        <div class="wow fadeInUp">
          <div class="col-md-offset-1 col-md-12 col-sm-12">
          <form id="booking-form" method="POST" action="{{ route('bookingStore') }}">
                    @csrf
                    <div id="ticket-price">
                        <p><strong>Ticket Price:</strong> <span>LKR 0.00</span></p>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <p class="mb-1">{{__('translate.mobile')}}</p>
                            <input type="number" id="phone_number" class="form-control" name="phone_number" required>
                            <input type="hidden" id="price" class="form-control" name="price" required>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <p class="mb-1">{{__('translate.date')}}</p>
                            <input type="date" name="date" class="form-control" id="date">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <p class="mb-1">{{__('translate.schedule')}}</p>
                            <select id="schedule_id" name="schedule_id" required disabled class="form-control">
                                <option value="">Select Schedule</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" id="seats" name="seats[]" required>


                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <p class="mb-1">{{__('translate.from_station')}}</p>
                            <select id="from_station_id" name="from_station_id" class="form-control" required>
                                <option value="">Select From Station</option>
                                @foreach($stations as $station)
                                <option value="{{$station->id}}">{{$station->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <p class="mb-1">{{__('translate.to_station')}}</p>
                            <select id="to_station_id" name="to_station_id" class="form-control" required>
                                <option value="">Select From Station</option>
                                @foreach($stations as $station)
                                <option value="{{$station->id}}">{{$station->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div id="seat-layout" class="seat-layout" style="display: none;">
                                <p>Select Your Seat:</p>
                                <div id="seats-container"></div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                            <button type="submit" class="btn btn-primary submit">Book Seat</button>
                        </div>
                    </div>
                </form>
          </div>
        </div>


      </div>
      <hr>
    </div>
</section>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#date').on('change', function() {
            let selectedDate = $(this).val();
            $('#schedule_id').prop('disabled', true).html('<option value="">Loading...</option>');

            $.ajax({
                url: "{{ route('getSchedulesByDate') }}",
                method: "GET",
                data: {
                    date: selectedDate
                },
                success: function(response) {
                    $('#schedule_id').prop('disabled', false).html('<option value="">Select Schedule</option>');
                    response.schedules.forEach(schedule => {
                        $('#schedule_id').append(`<option value="${schedule.id}">${schedule.schedule_date} - ${schedule.departure_time}</option>`);
                    });
                }
            });
        });

        $('#to_station_id').on('change', function() {
            let scheduleId = $('#schedule_id').val();
            let fromStationId = $('#from_station_id').val();
            let toStationId = $(this).val();

            $('#seat-layout').hide();
            $('#seats-container').html('<p>Loading Seats...</p>');

            $.ajax({
                url: "{{ route('getSeatsByScheduleAndStations') }}",
                method: "GET",
                data: {
                    schedule_id: scheduleId,
                    from_station_id: fromStationId,
                    to_station_id: toStationId
                },
                success: function(response) {
                    $('#seat-layout').empty();

                    let seatsPerRow = 4;
                    let aisleWidth = 40;

                    let rowDiv = null;

                    response.seats.forEach((seat, index) => {
                        if (index % seatsPerRow === 0) {
                            rowDiv = $('<div class="seat-row"></div>');
                            $('#seat-layout').append(rowDiv);
                        }

                        let seatPosition = index % seatsPerRow;

                        if (seatPosition === 2) {
                            rowDiv.append(`<div class="seat-gap" style="width: ${aisleWidth}px;"></div>`);
                        }

                        let isBooked = response.booked_seat_ids.includes(seat.id);
                        let seatClass = isBooked ? "seat booked" : "seat available";

                        let seatHtml = `
            <div class="${seatClass}" data-seat-id="${seat.id}" data-seat-number="${seat.seat_number}">
                    <input type="checkbox" class="seat-checkbox" data-seat-id="${seat.id}" id="seat-${seat.id}" name="seats[]" value="${seat.id}" style="display: none;" ${isBooked ? 'disabled' : ''}>

                    <label for="seat-${seat.id}" class="${isBooked ? 'booked' : ''}" ${isBooked ? 'disabled' : ''}>
                        ${seat.seat_number}
                    </label>
            </div>`;

                        rowDiv.append(seatHtml);
                    });

                    $('#ticket-price').text('');
                    $('#ticket-price').text('LKR.' + response.price);
                    $('#price').val(response.price);
                    $('#seat-layout').show();
                }

            });
        });
    });
    $(document).ready(function() {
        let selectedSeats = [];

        $(document).on('click', '.seat-checkbox', function() {
            let seatButton = $(this);
            let seat = seatButton.closest('.seat');
            let seatId = seat.data('seat-id');
            let seatNumber = seat.data('seat-number');
            let price = parseFloat($('#price').val()) || 0;
            if (seat.hasClass('selected')) {
                seat.removeClass('selected');
                selectedSeats = selectedSeats.filter(seat => seat !== seatId);
            } else {
                seat.addClass('selected');
                selectedSeats.push(seatId);
            }
            let selectedSeatsCount = $('.selected').length;
            
            $('#ticket-price').text('LKR.' + parseFloat(price * selectedSeatsCount).toFixed(2));

        });
        $('#booking-form').submit(function(e) {
    e.preventDefault();

    if (selectedSeats.length === 0) {
        Swal.fire({
            title: 'Operation Failed?',
            text: "Please select at least one seat!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#000',
        });
        return;
    }

    var formData = new FormData(this);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "{{ route('sendOtp') }}",
        method: 'POST',
        data: { phone_number: $('#phone_number').val() },
        success: function(response) {
            if (response.success) {
                Swal.fire({
                    title: 'Enter OTP',
                    input: 'text',
                    inputPlaceholder: 'Enter the OTP sent to your phone',
                    showCancelButton: true,
                    confirmButtonText: 'Submit OTP',
                    cancelButtonColor: '#000',
                }).then((result) => {
                    if (result.isConfirmed) {
                        var otp = result.value;
                        verifyOtpAndSubmit(formData, otp);
                    }
                });
            } else {
                Swal.fire({
                    title: 'Error',
                    text: 'Failed to send OTP. Please try again.',
                    icon: 'error',
                });
            }
        },
        error: function() {
            Swal.fire({
                title: 'Error',
                text: 'An error occurred while sending OTP.',
                icon: 'error',
            });
        }
    });
});

function verifyOtpAndSubmit(formData, otp) {
    $.ajax({
        url: "{{ route('verifyOtp') }}",
        method: 'POST',
        data: { otp: otp },
        success: function(response) {
            if (response.success) {
                $.ajax({
                    url: "{{ route('bookingStore') }}",
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: 'Success',
                            text: "Seats booked successfully! Print the tickets?",
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonText: 'Yes',
                            cancelButtonColor: '#000',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                openPrintTab(response.bookingIds);
                                location.reload();
                            }
                        });
                    },
                    error: function(xhr) {
                        var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'An error occurred while booking the seats.';
                        Swal.fire({
                            title: 'Error',
                            text: errorMessage,
                            icon: 'error',
                        });
                    }
                });
            } else {
                Swal.fire({
                    title: 'Invalid OTP',
                    text: 'The OTP entered is incorrect. Please try again.',
                    icon: 'error',
                });
            }
        },
        error: function() {
            Swal.fire({
                title: 'Error',
                text: 'An error occurred while verifying OTP.',
                icon: 'error',
            });
        }
    });
}
        function openPrintTab(bookingIds, callback) {
            if (!Array.isArray(bookingIds)) {
        console.error("Invalid booking IDs. Expected an array.");
        return;
    }

    const bookingIdsParam = bookingIds.join(',');

    let print_url = "{{ route('front-print.ticket', ['id' => ':id']) }}";
    print_url = print_url.replace(':id', encodeURIComponent(bookingIdsParam)); 

    const printWindow = window.open(print_url, '_blank');
    if (printWindow) {
        const checkIfLoaded = setInterval(() => {
            if (printWindow.closed) {
                clearInterval(checkIfLoaded);
                callback();
            }
        }, 500);
    } else {
        console.error("Failed to open the print view. Make sure pop-ups are not blocked.");
        callback();
    }
}
    });
</script>

@endsection