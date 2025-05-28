@extends('layouts.app')

@section('title', 'Intercity Ride Service')

@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">Intercity Ride Service</h1>
        <div class="box-breadcrumb"> 
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
          </ul>
        </div>
      </div>
    </div>
    {{-- <section class="section"> --}}
      <div class="banner-image-service wow fadeInUp">
      <form action="{{ route('searchForm') }}" method="POST">
        @csrf
        <div class="box-search-ride wow fadeInUp">
            <div class="search-item search-vehicle"> 
                <div class="search-icon"> <span class="item-icon fas fa-car"> </span></div>
                <div class="search-inputs"> 
                    <label class="text-14 color-grey">Vehicle Type</label>
                    <select class="search-input vehiclepicker" name="vehicle">
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
                    <label class="text-14 color-grey">Service Type</label>
                    <select class="search-input servicepicker" name="serviceType" onchange="toggleInput()">
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
                    <label class="text-14 color-grey">Distance</label>
                    <div class="form-group">
                        <input type="number" id="distance" class="search-input" name="distance"  placeholder="In Miles">
                    </div>
                </div>
            </div>
            
            <div class="search-item search-hourly" id="hourlyBox" style="display: none;"> 
                <div class="search-icon"> <span class="item-icon fas fa-clock"> </span></div>
                <div class="search-inputs"> 
                    <label class="text-14 color-grey">Hours</label>
                    <div class="form-group">
                        <input type="number" id="hours" class="search-input" name="hours" placeholder="Min 3 hours">
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
                    <input id="timepicker" class="search-input timepicker" name="time" type="text" placeholder="" value="{{ now()->format('h:i A') }}">
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
                <button class="btn btn-search" type="submit"> <img src="imgs/template/icons/search.svg" alt="luxride">Get Quote</button>
            </div>
        </div>
        </form>
      </div>
      {{-- <div class="box-form-service-single">
        <div class="box-search-ride box-search-ride-style-2 wow fadeInUp"> 
          <div class="box-search-tabs">
            <div class="head-tabs"> 
              <ul class="nav nav-tabs nav-tabs-search" role="tablist">
                <li><a class="active" href="#tab-distance" data-bs-toggle="tab" role="tab" aria-controls="tab-distance" aria-selected="true">Distance</a></li>
                <li><a href="#tab-hourly" data-bs-toggle="tab" role="tab" aria-controls="tab-hourly" aria-selected="false">Hourly</a></li>
                <li><a href="#tab-rate" data-bs-toggle="tab" role="tab" aria-controls="tab-rate" aria-selected="false">Flat Rate</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade active show" id="tab-distance" role="tabpanel" aria-labelledby="tab-distance">
                <div class="box-form-search">
                  <div class="search-item search-date"> 
                    <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">Date</label>
                      <input class="search-input datepicker-2" type="text" placeholder="" value="Thu, Oct 06, 2022">
                    </div>
                  </div>
                  <div class="search-item search-time"> 
                    <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">Time</label>
                      <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                    </div>
                  </div>
                  <div class="search-item search-from"> 
                    <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">From</label>
                      <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                      <div class="box-dropdown-location">
                        <div class="list-locations"> 
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/building.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/train.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search-item search-to"> 
                    <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">To</label>
                      <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                      <div class="box-dropdown-location">
                        <div class="list-locations"> 
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/building.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/train.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search-item search-button mb-0"> 
                    <button class="btn btn-search" type="submit"> <img src="/imgs/template/icons/search.svg" alt="luxride">Search</button>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-hourly" role="tabpanel" aria-labelledby="tab-hourly">
                <div class="box-form-search">
                  <div class="search-item search-time"> 
                    <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">Time</label>
                      <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                    </div>
                  </div>
                  <div class="search-item search-date"> 
                    <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">Date</label>
                      <input class="search-input datepicker" type="text" placeholder="" value="Thu, Oct 06, 2022">
                    </div>
                  </div>
                  <div class="search-item search-from"> 
                    <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">From</label>
                      <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                      <div class="box-dropdown-location">
                        <div class="list-locations"> 
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/building.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/train.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search-item search-to"> 
                    <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">To</label>
                      <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                      <div class="box-dropdown-location">
                        <div class="list-locations"> 
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/building.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/train.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search-item search-button mb-0"> 
                    <button class="btn btn-search" type="submit"> <img src="/imgs/template/icons/search.svg" alt="luxride">Search</button>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-rate" role="tabpanel" aria-labelledby="tab-rate">
                <div class="box-form-search">
                  <div class="search-item search-date"> 
                    <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">Date</label>
                      <input class="search-input datepicker" type="text" placeholder="" value="Thu, Oct 06, 2022">
                    </div>
                  </div>
                  <div class="search-item search-time"> 
                    <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">Time</label>
                      <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                    </div>
                  </div>
                  <div class="search-item search-from"> 
                    <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">From</label>
                      <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                      <div class="box-dropdown-location">
                        <div class="list-locations"> 
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/building.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/train.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search-item search-to"> 
                    <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                    <div class="search-inputs"> 
                      <label class="text-14 color-grey">To</label>
                      <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                      <div class="box-dropdown-location">
                        <div class="list-locations"> 
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/building.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/train.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                          <div class="item-location"> 
                            <div class="location-icon"> <img src="/imgs/page/homepage1/plane.png" alt="luxride"></div>
                            <div class="location-info"> 
                              <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                              <p class="text-14 color-grey">London, United Kingdom</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search-item search-button mb-0"> 
                    <button class="btn btn-search" type="submit"> <img src="/imgs/template/icons/search.svg" alt="luxride">Search</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    {{-- </section> --}}
    
    <section class="section">
      <div class="container-sub"> 
        <div class="mt-120"> 
          {{-- <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">Airport transfer in the city</h2> --}}
          <div class="content-single wow fadeInUp"> 
            <p>Welcome to <b>Airport Limousine LLC</b>, your premier choice for intercity transportation in Indiana. Whether you’re traveling for business or leisure, we offer a reliable, comfortable, and safe journey between cities.</p><br>
            <p><b>Why Choose Airport Limousine LLC?</b></p>
          </div>
        </div>
        <div class="row cardIconTitleDescLeft"> 
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Comfort and Luxury:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Experience the ultimate in comfort with our luxurious vehicles, featuring plush leather seats, ample legroom, and a smooth ride.</li>
                  <li>•	Enjoy amenities like climate control, complimentary bottled water, and Wi-Fi to stay connected during your journey.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Affordable Rates:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Enjoy competitive and transparent pricing with no hidden fees.</li>
                  <li>•	Ask about our special rates for frequent travelers and corporate clients.</li>
                </ul>
                {{-- <p class="text-16 color-text">•	Enjoy competitive and transparent pricing with no hidden fees.
                  •	Ask about our special rates for frequent travelers and corporate clients.</p> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Flexible Service:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Available for both short and long-distance intercity travel, our service is tailored to meet your specific needs.</li>
                  <li>•	Whether you need a one-way trip or a round trip, we’ve got you covered.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/services/airport.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Professional and Safe:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Our professional driver, Hardeep, is highly trained, courteous, and committed to providing a safe and pleasant ride.</li>
                  <li>•	We prioritize your safety with regular vehicle maintenance and rigorous cleaning protocols.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/services/terms.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Punctual and Reliable:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	We understand the importance of punctuality. Whether you’re heading to a business meeting or catching a flight, we ensure timely pickups and drop-offs.</li>
                  <li>•	Track your ride in real-time and receive notifications to stay informed.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-120"> 
          <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">Popular Intercity Routes</h2>
          <div class="content-single wow fadeInUp"> 
            <ul class="list-ticks list-ticks-small">
              <li class="text-16 mb-20"><b>Indianapolis to Anderson:</b> Ideal for students and families visiting Anderson University.</li>
              <li class="text-16 mb-20"><b>Bargersville to Indianapolis:</b> Convenient for business professionals and airport transfers.</li>
              <li class="text-16 mb-20"><b>Custom Routes:</b> Contact us to arrange transportation to any city within Indiana.</li>
            </ul>
          </div>
        </div>

        <div class="row align-items-center mt-90"> 
          <div class="col-lg-6 mb-30 wow fadeInUp"><img src="/imgs/page/services/img1.png" alt="luxride"></div>
          <div class="col-lg-6 mb-30">
            <div class="box-info-right wow fadeInUp">
              <h3 class="heading-44-medium color-text mb-30">How to Book</h3>
              <h6 class="color-text mb-30">Booking your intercity ride with Airport Limousine LLC is easy:</h6>
              <ul class="list-ticks list-ticks-small">
                <li class="text-16 mb-20"><b>Call Us:</b> Dial 765-315-6780 to speak directly with our friendly staff.</li>
                <li class="text-16 mb-20"><b>Online Booking:</b> Visit our website and fill out the booking form with your travel details.</li>
                <li class="text-16 mb-20"><b>Email Us:</b> Send your itinerary to info@airportlimousinellc.com and we’ll handle the rest.</li>
              </ul>
              {{-- <p class="text-16 color-text">The price of tickets for low-cost airlines for a specific route has a much larger spread than that of regular airlines. It depends on the time to departure, demand and competition on the route. Unlike regular airlines, low-cost airlines rarely offer cheap tickets more than 3 months before departure. </p> --}}
            </div>
          </div>
        </div>
        {{-- <div class="row align-items-center mt-90 mb-120"> 
          <div class="col-lg-6 mb-30">
            <div class="box-info-left wow fadeInUp">
              <h3 class="heading-44-medium color-text mb-30">Airport shuttle booking</h3>
              <p class="text-16 color-text">The price of tickets for low-cost airlines for a specific route has a much larger spread than that of regular airlines. It depends on the time to departure, demand and competition on the route. Unlike regular airlines, low-cost airlines rarely offer cheap tickets more than 3 months before departure. </p>
            </div>
          </div>
          <div class="col-lg-6 mb-30 wow fadeInUp"><img src="/imgs/page/services/img2.png" alt="luxride"></div>
        </div> --}}
      </div>
    </section>
    <section class="section pt-130 pb-130 mb-30 bg-primary box-testimonials">

      <div class="container-sub"> 

        <div class="row"> 

          <div class="col-lg-5 col-md-6 mb-30">

            <div class="box-swiper"> 

              <div class="swiper-container swiper-group-testimonials pb-50">

                <div class="swiper-wrapper">

                  <div class="swiper-slide"> 

                    <div class="cardQuote wow fadeInUp">

                      <div class="box-quote"> 

                        <div class="icon-quote"> </div>

                        <div class="info-quote"> 

                          <h5 class="color-white text-18-medium">Sarah J.</h5>

                          {{-- <p class="color-white text-14">Web Developer</p> --}}

                        </div>

                      </div>

                      <div class="content-quote">

                        The best intercity ride service I’ve ever used. Hardeep was punctual and very professional. The car was immaculate and incredibly comfortable.</div>

                    </div>

                  </div>

                  <div class="swiper-slide"> 

                    <div class="cardQuote wow fadeInUp">

                      <div class="box-quote"> 

                        <div class="icon-quote"> </div>

                        <div class="info-quote"> 

                          <h5 class="color-white text-18-medium">Mark T.</h5>

                          {{-- <p class="color-white text-14">Web Developer</p> --}}

                        </div>

                      </div>

                      <div class="content-quote">Airport Limousine LLC made our trip from Indianapolis to Anderson stress-free and enjoyable. Highly recommend!</div>

                    </div>

                  </div>
                </div>

                <div class="box-pagination-testimonials mt-40 wow fadeInUp"> <span class="firstNumber"></span><span class="lastNumber"></span>

                  <div class="swiper-pagination swiper-pagination-testimonials"></div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-7 col-md-6 mb-30 text-lg-end text-center d-none d-md-block">

            <div class="box-video wow fadeInUp"> <a class="btn btn-play popup-youtube hover-up" href="https://www.youtube.com/watch?v=sVPYIRF9RCQ"></a><img src="imgs/page/homepage1/img-video.png" alt="luxride"></div>

          </div>

        </div>

      </div>

    </section>
  </main>
@endsection