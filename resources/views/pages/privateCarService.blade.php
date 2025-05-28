@extends('layouts.app')
@section('meta')
    <meta name="description" content="Choose our exclusive private car services for corporate, leisure, or special events. Travel in style and comfort with our experienced chauffeurs and premium vehicles.">
    <meta name="keywords" content="private car services, luxury car rental, executive transportation, business travel, event transportation, chauffeur service Indiana">
    <meta property="og:title" content="Private Car Services in Indiana | Business & Leisure Travel | Airport Limousine LLC">
    <meta property="og:description" content="Choose our exclusive private car services for corporate, leisure, or special events. Travel in style and comfort with our experienced chauffeurs and premium vehicles.">
    {{-- <meta property="og:image" content="{{ asset('images/home-page-image.jpg') }}"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
@endsection
@section('title', 'Private Car Services in Indiana | Business & Leisure Travel | Airport Limousine LLC')

@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">Private Car Services</h1>
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
            <p>Welcome to <b>Airport Limousine LLC</b>, where we offer exceptional private car services tailored to meet your every need. Our commitment to luxury, comfort, and reliability sets us apart, making us the preferred choice for discerning travelers throughout Indiana.</p><br>
            <p><b>Why Choose Our Private Car Services?</b></p>
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
                  <li>•	Our fleet of premium vehicles ensures that you travel in style and comfort. Each car is equipped with luxurious leather seating, climate control, and state-of-the-art amenities to enhance your travel experience.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
            <div class="cardIconTitleDesc wow fadeInUp">
              <div class="cardIcon"><img src="/imgs/page/homepage7/price.svg" alt="luxride"></div>
              <div class="cardTitle">
                <h5 class="text-20-medium color-text">Personalized Service:</h5>
              </div>
              <div class="cardDesc">
                <ul class="text-16 color-text">
                  <li>•	At Airport Limousine LLC, we believe in providing personalized service to each of our clients. Whether you need a ride to the airport, a business meeting, or a special event, we tailor our services to meet your specific requirements.</li>
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
                  <li>•	Our team of professional chauffeurs is dedicated to providing exceptional service. They are not only skilled drivers but also courteous and knowledgeable, ensuring a smooth and pleasant journey.</li>
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
                  <li>•	Your safety is our top priority. Our vehicles undergo regular maintenance and safety checks, and our chauffeurs are trained to handle all driving conditions. You can rely on us for a safe and dependable ride.</li>
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
                  <li>•	Booking our private car services is easy and hassle-free. You can make a reservation online, by phone, or via email. Our customer service team is available to assist you with any special requests or questions.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-120"> 
          <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">Our Services</h2>
          <div class="content-single wow fadeInUp"> 
            <ul class="list-ticks list-ticks-small">
              <li class="text-16 mb-20"><b>Airport Transfers:</b> Enjoy a seamless and stress-free journey to and from the airport with our reliable airport transfer services.</li>
              <li class="text-16 mb-20"><b>Corporate Travel:</b> Make a lasting impression with our professional and discreet corporate transportation solutions, ideal for business meetings, conferences, and corporate events.</li>
              <li class="text-16 mb-20"><b>Special Occasions:</b> Arrive in style at weddings, proms, and other special events with our elegant transportation options.</li>
              <li class="text-16 mb-20"><b>Custom Routes:</b> Tailor your journey to your specific needs with our flexible and customizable transportation services.</li>
            </ul>
          </div>
        </div>

        <div class="row align-items-center mt-90"> 
          <div class="col-lg-6 mb-30 wow fadeInUp"><img src="/imgs/page/services/img1.png" alt="luxride"></div>
          <div class="col-lg-6 mb-30">
            <div class="box-info-right wow fadeInUp">
              <h3 class="heading-44-medium color-text mb-30">Contact Us</h3>
              <h6 class="color-text mb-30">Booking your private car service with Airport Limousine LLC is simple:</h6>
              <ul class="list-ticks list-ticks-small">
                <li class="text-16 mb-20"><b>Call Us: </b>Reach us at 765-315-6780 to speak directly with our friendly staff</li>
                <li class="text-16 mb-20"><b>Email Us: </b>Send your itinerary to info@airportlimousinellc.com, and we’ll handle the rest</li>
                <li class="text-16 mb-20"><b>Online Booking: </b>Visit our website and fill out the booking form with your travel details.</li>
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
                          <h5 class="color-white text-18-medium">Jessica M.</h5>
                          {{-- <p class="color-white text-14">Web Developer</p> --}}
                        </div>
                      </div>
                      <div class="content-quote">
                        Outstanding service! The chauffeur was punctual, professional, and the car was immaculate. Highly recommend Airport Limousine LLC for private car services.</div>
                    </div>
                  </div>
                  <div class="swiper-slide"> 
                    <div class="cardQuote wow fadeInUp">
                      <div class="box-quote"> 
                        <div class="icon-quote"> </div>
                        <div class="info-quote"> 
                          <h5 class="color-white text-18-medium">David K.</h5>
                        </div>
                      </div>
                      <div class="content-quote">Our experience with Airport Limousine LLC was exceptional. The booking process was easy, and the service was top-notch from start to finish.</div>
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