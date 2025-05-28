@extends('layouts.app')

@section('title', 'Booking Form Page')

@section('content')
    <main class="main">
        <div class="section pt-60 pb-60">
            <div class="container-sub">
     
                <div class="booking-info-form">
                    <form action="{{ route('bookingForm') }}" method="POST">
                        @csrf
                        <input type="hidden" name="booking_id" value="{{ $bookingId }}">
                        <div class="col-md-6">
                            <h3 id="estimate-text" name="estimate">Estimate price for your ride: ${{ $bookingDetails['estimate'] }}</h3>
                            <div class="form-group">
                                <input type="hidden" id="estimate" class="form-control" name="estimate" value="{{ $bookingDetails['estimate'] }}" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Click to show/edit Your booking Details: <input type="checkbox" id="searchDetails" name="searchDetails">
                            <div class="form-check pl-0 mb-20">
                            </div></label>
                        </div>
                        <div class="row">
                            <div class="col-md-6 search-previous-form">
                                <label>Date</label>
                                <div class="form-group">
                                    <input type="text" id="datepicker" class="form-control search-input datepicker" name="date" value="{{ date('D, M d, Y', strtotime($bookingDetails['date'])) }}">
                                </div>
                            </div>

                            <div class="col-md-6 search-previous-form">
                                <label>Time</label>
                                <div class="form-group">
                                    <input type="text" id="timepicker" class="form-control search-input timepicker" name="time" value="{{ date('h:i A', strtotime($bookingDetails['time'])) }}">
                                </div>
                            </div>
                            
                            <!-- <div class="col-md-6 search-previous-form">
                                <label>From</label>
                                <div class="form-group">
                                    <select id="from" class="form-control" name="from">
                                        <option value="">Select Location</option>
                                        {{-- @foreach($fromLocations as $location) --}}
                                            {{-- <option value="{{ $location }}" {{ $bookingDetails['from'] == $location ? 'selected' : '' }}>{{ $location }}</option> --}}
                                            {{-- <option value="{{ $location }}">{{ $location }}</option> --}}
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 search-previous-form">
                                <label>To</label>
                                <div class="form-group">
                                    <select id="to" class="form-control" name="to">
                                        <option value="">Select Location</option>
                                        {{-- @foreach($toLocations as $tolocation) --}}
                                            {{-- <option value="{{ $tolocation }}" {{ $bookingDetails['to'] == $tolocation ? 'selected' : '' }}>{{ $tolocation }}</option> --}}
                                            {{-- <option value="{{ $location }}">{{ $location }}</option> --}}
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-md-6 search-previous-form">
                                <label>Vehicle Type</label>
                                <div class="form-group">
                                    <select id="VehicleType" class="form-control" name="vehicle" onchange="calculateFare()">
                                        <option value="">Select Vehicle</option>
                                        <option value="Sedan" {{ $bookingDetails['vehicle'] == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                                        <option value="Suv" {{ $bookingDetails['vehicle'] == 'Suv' ? 'selected' : '' }}>SUV</option>
                                        <option value="Mini Van" {{ $bookingDetails['vehicle'] == 'Mini Van' ? 'selected' : '' }}>Mini Van</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            @if(isset($bookingDetails['distance']))
                            <div class="col-md-6 search-previous-form">
                                <label>Distance (in Miles)</label>
                                <div class="form-group">
                                    <input type="number" id ="distance" class="form-control" name="distance" onchange="calculateFare()" value="{{ $bookingDetails['distance'] }}">
                                </div>
                            </div>
                            @endif
                            @if(isset($bookingDetails['hours']))
                            <div class="col-md-6 search-previous-form">
                                <label>Hours</label>
                                <div class="form-group">
                                    <input type="hours" id ="hours" class="form-control" name="hours" onchange="calculateFare()" value="{{ $bookingDetails['hours'] }}">
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <h2>Proceed to Booking:</h2>
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name *</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Email *</label>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Phone Number *</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone_number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Flight Number</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="flight_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Pickup point *</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="pickup" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Drop Off point *</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="dropoff" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Message</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Enter landmark, passenger details, baggage details, or other info for driver"></textarea>
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-12">
                            <label class="ml-5" for="return">Return</label>
                            <div class="form-check pl-0 mb-20">
                                <input type="checkbox" id="return" name="is_return">
                            </div>
                        </div>
                        {{-- <div class="custom-booking-form" style="display: none;"> --}}
                        <div class="row fadeInUp return-booking-form" style="display: none;">
                            <div class="col-md-6">
                                <label>Return Date</label>
                                <div class="form-group">
                                    <input type="text" id="return-datepicker" class="form-control search-input datepicker" name="return_date" value="{{ date('D, M d, Y', strtotime($bookingDetails['date'])) }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Return Time</label>
                                <div class="form-group">
                                    <input type="text" id="return-timepicker" class="form-control search-input timepicker" name="return_time" value="{{ date('h:i A', strtotime($bookingDetails['time'])) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Pickup point</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="return_from">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Drop Off point</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="return_to">
                                </div>
                            </div>
                        </div>
                            
                        {{-- </div> --}}
                            {{-- <div class="box-search-ride wow fadeInUp custom-booking-form" style="display: none;">
                                <div class="search-item search-date"> 
                                    <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                                    <div class="search-inputs"> 
                                        <label class="text-14 color-grey">Return Date</label>
                                        <input id="return-datepicker" class="search-input datepicker" name="return_date" type="text" placeholder="" value="{{ date('D, M d, Y', strtotime($bookingDetails['date'])) }}">
                                    </div>
                                </div>
                                <div class="search-item search-time"> 
                                    <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                                    <div class="search-inputs"> 
                                        <label class="text-14 color-grey">Return Time</label>
                                        <input id="return-timepicker" class="search-input timepicker" name="return_time" type="text" placeholder="" value="{{ date('h:i A', strtotime($bookingDetails['time'])) }}">

                                    </div>
                                </div>
                            
                                <div class="search-item search-from"> 
                                    <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                                    <div class="search-inputs"> 
                                        <label class="text-14 color-grey">Return From</label>
                                        <select class="search-input dropdown-location" name="return_from">
                                            <option value="">Select Location</option>
                                            @foreach($fromLocations as $location)
                                                <option value="{{ $location }}">{{ $location }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="search-item search-to"> 
                                    <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                                    <div class="search-inputs"> 
                                        <label class="text-14 color-grey">Return To</label>
                                        <select class="search-input dropdown-location" name="return_to">
                                            <option value="">Select Location</option>
                                            @foreach($toLocations as $location)
                                                <option value="{{ $location }}">{{ $location }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Book Now
                                    <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>          
        </div>
    </main>
    <script type="text/javascript">
        $(".search-previous-form").hide(); // Initially hide the element
        // Datepicker
        $('#datepicker').datepicker({
            dateFormat: 'D, M d, yy'
        });
        $('#return-datepicker').datepicker({
            dateFormat: 'D, M d, yy'
        });
        
         // Timepicker
         $('#timepicker').timepicker({
            timeFormat: 'g : i A'
        });
        $('#return-timepicker').timepicker({
            timeFormat: 'g : i A'
        });
        $("#return").click(function(){
          $(".custom-booking-form").slideToggle();
        });
        $("#return").click(function(){
          $(".return-booking-form").slideToggle();
        });
        $("#searchDetails").click(function(){
          $(".search-previous-form").slideToggle();
        });
    </script>
    <script>
        function calculateFare() {
            var distance = parseFloat($('#distance').val()) || 0;
            var hours = parseFloat($('#hours').val()) || 0;
            var vehicleType = $('#VehicleType').val();
            var rate = estimate = 0;

            if (distance > 0) {
                if (vehicleType === "Sedan") rate = 3;
                else if (vehicleType === "Suv") rate = 4;
                else if (vehicleType === "Mini Van") rate = 3.5;
                
                estimate = (distance < 15) ? 15 * rate : distance * rate;
            } else if (hours > 0) {
                if (vehicleType === "Sedan") rate = 60;
                else if (vehicleType === "Suv") rate = 85;
                else if (vehicleType === "Mini Van") rate = 65;
                
                estimate = (hours < 3) ? 3 * rate : hours * rate;
            }

            $('#estimate').val(estimate.toFixed(2));
            $('#estimate-text').text('Estimate price for your ride: ' + estimate.toFixed(2) + '$');

        }

        </script>
@endsection