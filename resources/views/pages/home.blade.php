@extends('layouts.app')
@section('meta')
    <meta name="description" content="Experience luxury, comfort, and punctuality with Airport Limousine LLC. Specializing in safe airport transfers, private car services, and ground transportation in Indiana. Book now for seamless travel.">
    <meta name="keywords" content="luxury airport limousine, private car services, ground transportation, airport transfers Indiana, Indiana airport limo, luxury ride service">
    <meta property="og:title" content="Luxury Airport Limousine Services | Safe & Reliable Transfers | Indiana">
    <meta property="og:description" content="Experience luxury, comfort, and punctuality with Airport Limousine LLC. Specializing in safe airport transfers, private car services, and ground transportation in Indiana. Book now for seamless travel.">
    {{-- <meta property="og:image" content="{{ asset('images/home-page-image.jpg') }}"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
@endsection
@section('title', 'Luxury Airport Limousine Services | Safe & Reliable Transfers | Indiana')
@section('content')

    @if(session()->has('message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var message = "{{ session('message') }}";
            var alertType = "{{ session('alert-type') }}";
            if (alertType === 'success') {
                alert(message); // For a simple alert
                // Optionally, you can use a toast library like toastr.js for better alerts
                // toastr.success(message);
            } else if (alertType === 'error') {
                alert(message); // For a simple alert
                // Optionally, you can use a toast library like toastr.js for better alerts
                // toastr.error(message);
            }
        });
    </script>
    @endif
    <!-- Main content for the home page -->

    <main class="main">

        <!-- Include JavaScript files -->

        @include('pages.homeBanner')



        <section class="section pt-65 pb-35 border-bottom"> 

          <div class="container-sub"> 

            <div class="row align-items-center">

              <div class="col-xl-3 col-lg-4 mb-30"> 

                <h3 class="color-primary wow fadeInUp">The partners who sell<br class="d-none d-lg-block">our products</h3>

              </div>

              <div class="col-xl-9 col-lg-8 mb-30">

                <ul class="list-logos d-flex align-item-center wow fadeInUp"> 

                  <li><img src="imgs/slider/logo/air.svg" alt="AirportLimousineLLC"></li>

                  <li><img src="imgs/slider/logo/eb.svg" alt="AirportLimousineLLC"></li>

                  <li><img src="imgs/slider/logo/nba.svg" alt="AirportLimousineLLC"></li>

                  <li><img src="imgs/slider/logo/nla.svg" alt="AirportLimousineLLC"></li>

                </ul>

              </div>

            </div>

          </div>

        </section>

        @include('pages.homeOurFleet')

        <section class="section pt-120 pb-20 bg-primary bg-how-it-works"> 

          <div class="container-sub"> 

            <h2 class="heading-44-medium color-white mb-60 wow fadeInUp">How It Works</h2>

            <div class="row"> 

              <div class="col-lg-6 order-lg-last">

                <div class="box-main-slider"> 

                  <div class="detail-gallery wow fadeInUp">

                    <div class="main-image-slider">

                      <figure><img src="imgs/page/homepage1/laptop.png" alt="AirportLimousineLLC"></figure>

                      <figure><img src="imgs/page/homepage1/desktop.png" alt="AirportLimousineLLC"></figure>

                      <figure><img src="imgs/page/homepage1/desktop2.png" alt="AirportLimousineLLC"></figure>

                    </div>

                  </div>

                </div>

              </div>

              <div class="col-lg-6 order-lg-first justify-content-between position-z3 wow fadeInUp">

                <ul class="slider-nav-thumbnails list-how"> 

                  <li> <span class="line-white"></span>

                    <h4 class="text-20-medium mb-20">Create Your Route</h4>

                    <p class="text-16">Enter your pickup & dropoff locations or the number of hours you wish to book a car and driver for</p>

                  </li>

                  <li> <span class="line-white"></span>

                    <h4 class="text-20-medium mb-20">Choose Vehicle For You</h4>

                    <p class="text-16">On the day of your ride, you will receive two email and SMS updates - one informing you that.</p>

                  </li>

                  <li> <span class="line-white"></span>

                    <h4 class="text-20-medium mb-20">Enjoy The Journey</h4>

                    <p class="text-16">After your ride has taken place, we would appreciate it if you could rate your car and driver.</p>

                  </li>

                </ul>

              </div>

            </div>

          </div>

        </section>

        <section class="section mt-110"> 

          <div class="container-sub"> 

            <div class="text-center">

              <h2 class="heading-44-medium color-text wow fadeInUp">Make Your Trip Your Way With Us</h2>

            </div>

            <div class="row mt-50 cardIconStyleCircle"> 

              <div class="col-lg-4">

                <div class="cardIconTitleDesc wow fadeInUp">

                  <div class="cardIcon"><img src="imgs/page/homepage1/safe.svg" alt="AirportLimousineLLC"></div>

                  <div class="cardTitle">

                    <h5 class="text-20-medium color-text">Safety First</h5>

                  </div>

                  <div class="cardDesc">

                    <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>

                  </div>

                </div>

              </div>

              <div class="col-lg-4">

                <div class="cardIconTitleDesc wow fadeInUp">

                  <div class="cardIcon"><img src="imgs/page/homepage1/price.svg" alt="AirportLimousineLLC"></div>

                  <div class="cardTitle">

                    <h5 class="text-20-medium color-text">Prices With No Surprises</h5>

                  </div>

                  <div class="cardDesc">

                    <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>

                  </div>

                </div>

              </div>

              <div class="col-lg-4"> 

                <div class="cardIconTitleDesc wow fadeInUp">

                  <div class="cardIcon"><img src="imgs/page/homepage1/vehicle.svg" alt="AirportLimousineLLC"></div>

                  <div class="cardTitle">

                    <h5 class="text-20-medium color-text">Private Travel Solutions</h5>

                  </div>

                  <div class="cardDesc">

                    <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </section>

        <section class="section mb-30 mt-80 box-showcase">

          <div class="bg-showcase pt-100 pb-70">

            <div class="container-sub"> 

              <div class="row align-items-center"> 

                <div class="col-lg-6 mb-30"> 

                  <h2 class="heading-44-medium color-white wow fadeInUp">Showcase some impressive numbers.</h2>

                </div>

                <div class="col-lg-6">

                  <div class="row align-items-center">

                    <div class="col-4 mb-30 wow fadeInUp">

                      <div class="box-number"> 

                        <h2 class="heading-44-medium color-white">28</h2>

                        <p class="text-20 color-white">Vehicles</p>

                      </div>

                    </div>

                    <div class="col-4 mb-30 wow fadeInUp">

                      <div class="box-number"> 

                        <h2 class="heading-44-medium color-white">12</h2>

                        <p class="text-20 color-white">Awards</p>

                      </div>

                    </div>

                    <div class="col-sm-4 col-12 mb-30 wow fadeInUp">

                      <div class="box-number"> 

                        <h2 class="heading-44-medium color-white">13K</h2>

                        <p class="text-20 color-white">Happy Customer</p>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </section>

        @include('pages.homeOurServices')

        <section class="section pt-130 pb-130 bg-primary box-testimonials">
          <div class="container-sub"> 
            <div class="row"> 
              <div class="col-lg-5 col-md-6 mb-30">
                <div class="box-swiper"> 
                  <div class="swiper-container swiper-group-testimonials pb-50">
                    <div class="swiper-wrapper">
                      @if(!empty($reviews))
                      @foreach($reviews as $review)
                        <div class="swiper-slide"> 
                          <div class="cardQuote wow fadeInUp">
                            <div class="box-quote"> 
                              <div class="icon-quote"> </div>
                              <div class="info-quote"> 
                                <h5 class="color-white text-18-medium">{{ $review ['author_name'] }}</h5>
                              </div>
                            </div>
                            <div class="content-quote">
                              {{ $review ['text'] }}</div>
                          </div>
                        </div>
                      @endforeach
                      @endif
                    </div>
                    <div class="box-pagination-testimonials mt-40 wow fadeInUp"> <span class="firstNumber"></span><span class="lastNumber"></span>
                      <div class="swiper-pagination swiper-pagination-testimonials"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 mb-30 text-lg-end text-center d-none d-md-block">
                <div class="box-video wow fadeInUp"> <a class="btn btn-play popup-youtube hover-up" href="https://www.youtube.com/watch?v=uufjyhr-80Y"></a><img src="imgs/page/homepage1/img-video.png" alt="AirportLimousineLLC"></div>
              </div>
            </div>
          </div>
        </section>

        <section class="section pt-120 pb-120 bg-region">

          <div class="container-sub"> 

            <div class="row align-items-center"> 

              <div class="col-lg-6 mb-30">

                <div class="box-gallery justify-content-center justify-content-lg-start"> 

                  <div class="gallery-1 wow fadeInUp"><img src="imgs/page/homepage1/img1.png" alt="AirportLimousineLLC"></div>

                  <div class="gallery-2 wow fadeInUp"><img src="imgs/page/homepage1/img2.png" alt="AirportLimousineLLC"><img src="imgs/page/homepage1/img3.png" alt="AirportLimousineLLC"></div>

                </div>

              </div>

              <div class="col-lg-6 mb-30">

                <div class="box-region-right wow fadeInUp">

                  <h2 class="heading-44-medium color-text mb-30">From the region, for the region</h2>

                  <p class="text-16 color-text mb-30">Airport Limousine LLC operates in more than 700 hundred cites in Indiana.</p><a  href="{{ url('/citylist') }}" class="btn btn-primary">View All Cities

                    <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">

                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>

                    </svg></a>

                </div>

              </div>

            </div>

          </div>

        </section>

        <section class="section pt-80 mb-30 bg-faqs">

          <div class="container-sub">

            <div class="box-faqs">

              <div class="text-center"> 

                <h2 class="color-brand-1 mb-20 wow fadeInUp">Frequently Asked Questions</h2>

              </div>

              <div class="mt-60 mb-40">

                <div class="accordion wow fadeInUp" id="accordionFAQ">

                  <div class="accordion-item">

                    <h5 class="accordion-header" id="headingOne">

                      <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Do you go chicago to drop off?</button>

                    </h5>

                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">

                      <div class="accordion-body">yes we do drop-off at chicago airport.</div>

                    </div>

                  </div>

                  <div class="accordion-item">

                    <h5 class="accordion-header" id="headingTwo">

                      <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How far you go to pickup and drop off?</button>

                    </h5>

                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">

                      <div class="accordion-body">we go anywhere in Indiana to pickup and drop off with advanced reservations.</div>

                    </div>

                  </div>

                  <div class="accordion-item">

                    <h5 class="accordion-header" id="headingThree">

                      <button class="accordion-button text-heading-5 collapsed text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do you ofer discount?</button>

                    </h5>

                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">

                      <div class="accordion-body">Yes we do have discounts availble, call to ask how.</div>

                    </div>

                  </div>

                  <div class="accordion-item">

                    <h5 class="accordion-header" id="headingFour">

                      <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How far we need to book?</button>

                    </h5>

                    <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">

                      <div class="accordion-body">We preferred minimum 2 hours in advance but you can call to to see ASAP booking too.</div>

                    </div>

                  </div>

                  <div class="accordion-item">

                    <h5 class="accordion-header" id="headingFive">

                      <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Do you have flat rates?    </button>

                    </h5>

                    <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">

                      <div class="accordion-body">we have flat rates on our website.</div>

                    </div>

                  </div>

                  <div class="accordion-item">

                    <h5 class="accordion-header" id="headingNine">

                      <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">What are the hours of operation for Airport Limousine LLC?    </button>

                    </h5>

                    <div class="accordion-collapse collapse" id="collapseNine" aria-labelledby="headingNine" data-bs-parent="#accordionFAQ">

                      <div class="accordion-body">Open 24 Hours, 7 Days a Week.</div>

                    </div>

                  </div>
                  <div class="d-flex justify-content-end mt-3">
                    <a class="btn btn-primary" href="{{ url('/faq') }}">More Faqs..

                      <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
  
                      </svg></a>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </section>

      </main>



      <script>

        // Datepicker

        $('#datepicker').datepicker({

            dateFormat: 'D, M d, yy'

        });

        

         // Timepicker

         $('#timepicker').timepicker({

            timeFormat: 'g A : i'

        });

      </script>

      <!-- Include JavaScript files -->
@endsection