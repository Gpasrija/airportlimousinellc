@extends('layouts.app')

@section('title', 'Services Single')

@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">Airport Transfer Service</h1>
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
        
            <div class="search-item search-from"> 
                <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                <div class="search-inputs"> 
                    <label class="text-14 color-grey">From</label>
                    <select class="search-input select-active dropdown-location" name="from">
                        <option value="" disabled selected>Select City/Airport</option>
                        {{-- <option value="">Select Location</option> --}}
                        @foreach($fromLocations as $location)
                            <option value="{{ $location }}">{{ $location }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="search-item search-to"> 
                <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                <div class="search-inputs"> 
                    <label class="text-14 color-grey">To</label>
                    <select class="search-input select-active dropdown-location" name="to">
                        <option value="" disabled selected>Select City/Airport</option>
                        {{-- <option value="">Select Location</option> --}}
                        @foreach($toLocations as $location)
                            <option value="{{ $location }}">{{ $location }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
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
    <section class="section mt-90">
      <div class="container-sub"> 
        <div class="row cardIconTitleDescLeft"> 
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">All-inclusive pricing</h5>
              </div>
              <div class="cardDesc">
                <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/services/airport.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Seamless airport travel</h5>
              </div>
              <div class="cardDesc">
                <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/services/terms.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Travel on your terms</h5>
              </div>
              <div class="cardDesc">
                <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container-sub"> 
        <div class="mt-120"> 
          <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">Airport transfer in the city</h2>
          <div class="content-single wow fadeInUp"> 
            <p>We offer luxury chauffeur driven airport transfers and pickups to London. Exceptional Safe, Meet and Greet. One hour of complimentary wait time and flight tracking. Professional Drivers & Vehicles. Fixed prices on airport transfers. VIP service, get your quote today!</p>
            <p>Et, morbi at sagittis vehicula rutrum. Lacus tortor, quam arcu mi et, at lectus leo nunc. Mattis cras auctor vel pharetra tempor. Rhoncus pellentesque habitant ac tempor. At aliquam euismod est in praesent ornare etiam id. Faucibus libero sit vehicula sed condimentum. Vitae in nam porttitor rutrum sed aliquam donec sed. Sapien facilisi lectus.</p>
            <ul class="list-ticks list-ticks-small">
              <li class="text-16 mb-20">100% Luxurious Fleet</li>
              <li class="text-16 mb-20">All Our Fleet Are Fully Valeted & Serviced</li>
              <li class="text-16 mb-20">A Safe & Secure Journey</li>
              <li class="text-16 mb-20">Comfortable And Enjoyable</li>
              <li class="text-16 mb-20">Clean, Polite & Knowledgeable</li>
            </ul>
          </div>
        </div>
        <div class="row align-items-center mt-90"> 
          <div class="col-lg-6 mb-30 wow fadeInUp"><img src="/imgs/page/services/img1.png" alt="luxride"></div>
          <div class="col-lg-6 mb-30">
            <div class="box-info-right wow fadeInUp">
              <h3 class="heading-44-medium color-text mb-30">Get to or from the airport</h3>
              <p class="text-16 color-text">The price of tickets for low-cost airlines for a specific route has a much larger spread than that of regular airlines. It depends on the time to departure, demand and competition on the route. Unlike regular airlines, low-cost airlines rarely offer cheap tickets more than 3 months before departure. </p>
            </div>
          </div>
        </div>
        <div class="row align-items-center mt-90 mb-120"> 
          <div class="col-lg-6 mb-30">
            <div class="box-info-left wow fadeInUp">
              <h3 class="heading-44-medium color-text mb-30">Airport shuttle booking</h3>
              <p class="text-16 color-text">The price of tickets for low-cost airlines for a specific route has a much larger spread than that of regular airlines. It depends on the time to departure, demand and competition on the route. Unlike regular airlines, low-cost airlines rarely offer cheap tickets more than 3 months before departure. </p>
            </div>
          </div>
          <div class="col-lg-6 mb-30 wow fadeInUp"><img src="/imgs/page/services/img2.png" alt="luxride"></div>
        </div>
      </div>
    </section>
  </main>
  <script>
    $('#datepicker').datepicker({
      dateFormat: 'D, M d, yy'
    });

    // Timepicker
    $('#timepicker').timepicker({
      timeFormat: 'g : i A'
    });

    function toggleInput() {
        var serviceType = document.querySelector('.servicepicker').value;
        var distanceBox = document.getElementById('distanceBox');
        var hourlyBox = document.getElementById('hourlyBox');

                
        // Get the input elements
        var distanceInput = document.getElementById('distance');
        var hourlyInput = document.getElementById('hours');

        // Hide both text boxes
        distanceBox.style.display = 'none';
        hourlyBox.style.display = 'none';
        distanceInput.disabled = true;
        hourlyInput.disabled = true;

        // Show the selected text box
        if (serviceType === 'distance') {
            distanceBox.style.display = 'block';
            distanceInput.disabled = false;
        } else if (serviceType === 'hourly') {
            hourlyBox.style.display = 'block';
            hourlyInput.disabled = false;
        }
    }
</script>
@endsection