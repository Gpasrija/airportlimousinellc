@extends('layouts.app')
@section('meta')
    <meta name="description" content="Book our premium airport transfer services to and from Indianapolis International Airport and surrounding areas. Enjoy stress-free, on-time service with luxurious vehicles.">
    <meta name="keywords" content="airport transfer Indiana, airport car service, Indianapolis airport limousine, airport shuttle service, private airport transfer, on-time airport transfers">
    <meta property="og:title" content="Premium Airport Transfer Services in Indiana | Airport Limousine LLC">
    <meta property="og:description" content="Book our premium airport transfer services to and from Indianapolis International Airport and surrounding areas. Enjoy stress-free, on-time service with luxurious vehicles.">
    {{-- <meta property="og:image" content="{{ asset('images/home-page-image.jpg') }}"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
@endsection
@section('title', 'Premium Airport Transfer Services in Indiana | Airport Limousine LLC')

@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">Airport Transfer Services</h1>
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
            <p>Welcome to <b>Airport Limousine LLC</b>, your premier provider of luxury airport transfer services in Indiana. Our commitment to comfort, reliability, and efficiency ensures you arrive at your destination relaxed and on time. Whether you're a frequent business traveler or embarking on a special trip, we cater to all your airport transportation needs.</p><br>
            <p><b>Why Choose Airport Limousine LLC for Airport Transfers?</b></p>
          </div>
        </div>
        <div class="row cardIconTitleDescLeft"> 
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Luxury and Comfort:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Travel in style with our fleet of luxurious vehicles, offering plush leather seating, climate control, and complimentary Wi-Fi to keep you connected and comfortable throughout your journey</li>
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
                  <li>•	Our experienced and courteous chauffeurs are dedicated to providing a seamless travel experience. With their extensive local knowledge and commitment to punctuality, you can trust us to get you to the airport on time, every time.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Punctuality and Reliability:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	We understand the importance of punctuality when it comes to airport transfers. Our real-time flight tracking ensures that we adjust to any changes in your flight schedule, providing a stress-free and reliable service.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/services/terms.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Safety First:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	Your safety is our top priority. Our vehicles are regularly maintained and inspected to meet the highest safety standards. Additionally, our chauffeurs are trained to handle various driving conditions, ensuring a safe and smooth ride.</li>
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
                  <li>•	Booking your airport transfer with Airport Limousine LLC is simple and hassle-free. You can make a reservation online, by phone, or via email. Our customer service team is always available to assist you with any special requests or questions.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-120"> 
          <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">Our Services</h2>
          <div class="content-single wow fadeInUp"> 
            <ul class="list-ticks list-ticks-small">
              <li class="text-16 mb-20"><b>24/7 Availability:</b> We are available around the clock to accommodate your travel schedule, no matter the time of day or night.</li>
              <li class="text-16 mb-20"><b>Meet and Greet Service:</b> Our chauffeurs will meet you at the airport terminal with a personalized sign, assist with your luggage, and ensure a smooth transition to your vehicle.</li>
              <li class="text-16 mb-20"><b>Flight Monitoring:</b> We monitor your flight status in real-time to adjust pickup times according to any delays or early arrivals.</li>
              <li class="text-16 mb-20"><b>Flexible Payment Options:</b> We offer various payment methods, including credit cards and corporate billing, to make the process as convenient as possible.</li>
            </ul>
          </div>
        </div>

        <div class="row align-items-center mt-90"> 
          <div class="col-lg-6 mb-30 wow fadeInUp"><img src="/imgs/page/services/img1.png" alt="luxride"></div>
          <div class="col-lg-6 mb-30">
            <div class="box-info-right wow fadeInUp">
              <h3 class="heading-44-medium color-text mb-30">How to Book</h3>
              <h6 class="color-text mb-30">Booking your airport transfer with Airport Limousine LLC is easy:</h6>
              <ul class="list-ticks list-ticks-small">
                <li class="text-16 mb-20"><b>Call Us: </b>Dial 765-315-6780 to speak directly with our friendly staff</li>
                <li class="text-16 mb-20"><b>Online Booking: </b>Visit our website and fill out the booking form with your travel details.</li>
                <li class="text-16 mb-20"><b>Email Us: </b>Send your itinerary to info@airportlimousinellc.com, and we’ll handle the rest</li>
              </ul>
            </div>
          </div>
        </div>
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
                          <h5 class="color-white text-18-medium">Emily R.</h5>
                          {{-- <p class="color-white text-14">Web Developer</p> --}}
                        </div>
                      </div>
                      <div class="content-quote">
                        Airport Limousine LLC provided an outstanding airport transfer service. The chauffeur was on time, professional, and the car was incredibly comfortable. Highly recommend!</div>
                    </div>
                  </div>
                  <div class="swiper-slide"> 
                    <div class="cardQuote wow fadeInUp">
                      <div class="box-quote"> 
                        <div class="icon-quote"> </div>
                        <div class="info-quote"> 
                          <h5 class="color-white text-18-medium">John S.</h5>
                        </div>
                      </div>
                      <div class="content-quote">The best airport transfer experience I've ever had. Booking was easy, the ride was smooth, and the chauffeur was very courteous. Will definitely use their services again.</div>
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