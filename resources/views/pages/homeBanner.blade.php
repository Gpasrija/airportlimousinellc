<section class="section banner-home1">
    <div class="box-swiper"> 
        <div class="swiper-container swiper-banner-1 pb-0">
            <div class="swiper-wrapper">
                @foreach($bannerImages as $key=>$image)
                <div class="swiper-slide">
                    <div class="box-cover-image" style="background-image:url({{ $image }})"></div>
                    <div class="box-banner-info"> 
                        <p class="text-16 color-white wow fadeInUp">Where Would You Like To Go?</p>
                        <h2 class="heading-52-medium color-white wow fadeInUp">{!! $bannerImagesContent[$key] !!} </h2>
                            <!-- ContentElevate Your Journey, <br class="d-none d-lg-block">Experience the Difference</h2> -->
						
                    </div>
                </div>
                @endforeach
            </div>
            <div class="box-pagination-button">
                <div class="swiper-button-prev swiper-button-prev-banner"></div>
                <div class="swiper-button-next swiper-button-next-banner"></div>
                <div class="swiper-pagination swiper-pagination-banner"></div>
            </div>
        </div>
    </div>
    <form action="{{ route('searchForm') }}" method="POST">
    @csrf
    <div class="box-search-ride wow fadeInUp">
        <div class="search-item search-vehicle"> 
            <div class="search-icon"> <span class="item-icon fas fa-car"> </span></div>
            <div class="search-inputs"> 
                <label class="text-14 color-grey">Vehicle Type*</label>
                <select class="search-input vehiclepicker" name="vehicle" required>
                    <option value="">Select Vehicle</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Suv">SUV</option>
                    <option value="Mini Van">Mini Van</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>

        <div class="search-item search-service"> 
            <div class="search-icon"> <span class="item-icon fas fa-list"> </span></div>
            <div class="search-inputs"> 
                <label class="text-14 color-grey">Service Type*</label>
                <select class="search-input servicepicker" name="serviceType" onchange="toggleInput()" required>
                    <option value="">Select Service Type</option>
                    <option value="hourly">Hourly</option>
                    <option value="distance">Distance</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>
        <div class="search-item search-distance" id="distanceBox" style="display: none;"> 
            <div class="search-icon"> <span class="item-icon fas fa-map-marker"> </span></div>
            <div class="search-inputs"> 
                <label class="text-14 color-grey">Distance*</label>
                <div class="form-group">
                    <input type="number" id="distance" class="search-input" name="distance"  placeholder="In Miles" required>
                </div>
            </div>
        </div>
        
        <div class="search-item search-hourly" id="hourlyBox" style="display: none;"> 
            <div class="search-icon"> <span class="item-icon fas fa-clock"> </span></div>
            <div class="search-inputs"> 
                <label class="text-14 color-grey">Hours*</label>
                <div class="form-group">
                    <input type="number" id="hours" class="search-input" name="hours" placeholder="Min 3 hours" required>
                </div>
            </div>
        </div>
        
        <div class="search-item search-date"> 
            <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
            <div class="search-inputs"> 
                <label class="text-14 color-grey">Date</label>
                <input id="datepicker" class="search-input datepicker" name="date" type="text" placeholder="" value="{{ now()->format('D, M d, Y') }}">
            </div>
        </div>
        
        <div class="search-item search-time"> 
            <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
            <div class="search-inputs"> 
                <label class="text-14 color-grey">Time</label>
                <input id="timepicker" class="search-input timepicker" name="time" type="text" placeholder="" value="{{ now()->format('H:i g') }}">
            </div>
        </div>
    
        <!-- <div class="search-item search-from" style="display: none;"> 
            <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
            <div class="search-inputs"> 
                <label class="text-14 color-grey">From</label>
                <select class="search-input select-active dropdown-location" name="from">
                    <option value="" disabled selected>Select City/Airport</option>
                    {{-- <option value="">Select Location</option> --}}
                    {{-- @foreach($fromLocations as $location) --}}
                        {{-- <option value="{{ $location }}">{{ $location }}</option> --}}
                    {{-- @endforeach --}}
                </select>
            </div>
        </div>
        <div class="search-item search-to" style="display: none;"> 
            <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
            <div class="search-inputs"> 
                <label class="text-14 color-grey">To</label>
                <select class="search-input select-active dropdown-location" name="to">
                    <option value="" disabled selected>Select City/Airport</option>
                    {{-- <option value="">Select Location</option> --}}
                    {{-- @foreach($toLocations as $location) --}}
                        {{-- <option value="{{ $location }}">{{ $location }}</option> --}}
                    {{-- @endforeach --}}
                </select>
            </div>
        </div> -->
        
        <div class="search-item search-button"> 
            <button class="btn btn-search" type="submit"> <img src="imgs/template/icons/search.svg" alt="airportlimousinellc">Get Quote</button>
        </div>
    </div>
    </form>
</section>