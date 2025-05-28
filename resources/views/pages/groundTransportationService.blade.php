@extends('layouts.app')
@section('meta')
    <meta name="description" content="Offering reliable ground transportation for intercity travel, events, and airport pickups. Experience comfort and safety with our high-end vehicles and professional drivers.">
    <meta name="keywords" content="ground transportation Indiana, intercity travel, luxury ground transportation, event transportation, reliable car service, airport ground transportation">
    <meta property="og:title" content="Safe and Reliable Ground Transportation | Indiana & Beyond | Airport Limousine LLC">
    <meta property="og:description" content="Offering reliable ground transportation for intercity travel, events, and airport pickups. Experience comfort and safety with our high-end vehicles and professional drivers.">
    {{-- <meta property="og:image" content="{{ asset('images/home-page-image.jpg') }}"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
@endsection
@section('title', 'Safe and Reliable Ground Transportation | Indiana & Beyond | Airport Limousine LLC')

@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">Groud Transportation Service</h1>
        <div class="box-breadcrumb"> 
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
          </ul>
        </div>
      </div>
    </div>
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
        
            <div class="search-item search-button"> 
                <button class="btn btn-search" type="submit"> <img src="imgs/template/icons/search.svg" alt="luxride">Get Quote</button>
            </div>
        </div>
        </form>
      </div>
      
    <section class="section">
      <div class="container-sub"> 
        <div class="mt-120"> 
          {{-- <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">Airport transfer in the city</h2> --}}
          <div class="content-single wow fadeInUp"> 
            <p>Welcome to <b>Airport Limousine LLC</b>, your trusted partner for premium ground transportation services in Indiana. Whether you’re traveling for business, heading to the airport, or planning a special event, we offer a seamless, luxurious, and reliable transportation experience tailored to meet your unique needs.</p><br>
            <p><b>Why Choose Airport Limousine LLC for Ground Transportation?</b></p>
          </div>
        </div>
        <div class="row cardIconTitleDescLeft"> 
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Luxurious Fleet:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Our fleet of luxurious vehicles is designed to provide you with the ultimate comfort and style. Each vehicle is meticulously maintained to ensure a smooth and pleasant ride, complete with amenities like leather seating, climate control, and complimentary Wi-Fi.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Professional Chauffeurs:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Our chauffeurs are highly trained, courteous, and dedicated to ensuring your safety and satisfaction. With extensive knowledge of the local area and a commitment to punctuality, you can trust us to get you to your destination on time and in style.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Versatile Service:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	From corporate travel and airport transfers to weddings and special events, our ground transportation services are versatile and customizable. We cater to both short and long-distance travel needs, ensuring you arrive at your destination refreshed and relaxed.</li>>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/services/airport.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Convenient Booking:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Booking your ride with Airport Limousine LLC is straightforward and hassle-free. You can make a reservation online, by phone, or via email. Our customer service team is always ready to assist you with any special requests or questions.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/services/terms.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Safety and Reliability:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Your safety is our top priority. Our vehicles undergo regular inspections and maintenance to ensure they meet the highest safety standards. We also implement rigorous cleaning protocols to provide a clean and hygienic environment for our passengers.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-120"> 
          <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">Our Services</h2>
          <div class="content-single wow fadeInUp"> 
            <ul class="list-ticks list-ticks-small">
              <li class="text-16 mb-20"><b>Airport Transfers:</b> Enjoy a stress-free journey to and from the airport with our reliable airport transfer services.</li>
              <li class="text-16 mb-20"><b>Corporate Travel:</b> Make a lasting impression with our professional and discreet corporate transportation solutions.</li>
              <li class="text-16 mb-20"><b>Special Events:</b> Arrive in style at weddings, parties, and other special events with our elegant transportation options.</li>
              <li class="text-16 mb-20"><b>Custom Routes:</b> Tailor your journey with our flexible and customizable transportation services.</li>
            </ul>
          </div>
        </div>

        <div class="row align-items-center mt-90"> 
          <div class="col-lg-6 mb-30 wow fadeInUp"><img src="/imgs/page/services/img1.png" alt="luxride"></div>
          <div class="col-lg-6 mb-30">
            <div class="box-info-right wow fadeInUp">
              <h3 class="heading-44-medium color-text mb-30">Contact Us</h3>
              <h6 class="color-text mb-30">Ready to experience the best in ground transportation? Contact Airport Limousine LLC today to book your ride and discover why we are Indiana’s preferred choice for luxurious and reliable transportation services.</h6>
              <ul class="list-ticks list-ticks-small">
                <li class="text-16 mb-20"><b>Call Us: </b>765-315-6780</li>
                <li class="text-16 mb-20"><b>Email Us: </b>info@airportlimousinellc.com</li>
                <li class="text-16 mb-20"><b>Online Booking: </b>Book Your Ride.</li>

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