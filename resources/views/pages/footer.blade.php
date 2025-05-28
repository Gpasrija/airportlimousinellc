@include('partials.scripts')

<footer class="footer">

    <div class="footer-1">

      <div class="container-sub">

        <div class="box-footer-top">

          <div class="row align-items-center">

            <div class="col-lg-6 col-md-6 text-md-start text-center mb-15 wow fadeInUp">

              <div class="d-flex align-items-center justify-content-md-start justify-content-center"><a class="mr-30" href="#"><img src="imgs/template/logo.svg" alt="airportlimousinellc"></a><a class="text-14-medium call-phone color-white hover-up" href="tel:+17653156780">+1 765-315-6780</a></div>

            </div>

            <div class="col-lg-6 col-md-6 text-md-end text-center mb-15 wow fadeInUp">

              <div class="d-flex align-items-center justify-content-md-end justify-content-center"><span class="text-18-medium color-white mr-10">Follow Us</span>
              <a class="icon-socials icon-facebook" href="https://www.facebook.com/profile.php?id=100092163137504&is_tour_completed=true"></a>
              <a class="icon-socials icon-twitter" href="#"></a>
              <a class="icon-socials icon-instagram" href="https://instagram.com/p/CsnD59HuAPC/"></a>
              <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/airport-limousine-3171aa279/"></a></div>

            </div>

          </div>

        </div>

        <div class="row mb-40">

          <div class="col-lg-3 width-25">

            <h5 class="text-18-medium color-white mb-20 wow fadeInUp">Company</h5>

            <ul class="menu-footer wow fadeInUp">

              <li><a href="{{ url('/aboutus') }}">About us</a></li>

              <li><a href="{{ url('/fleet') }}">Our Fleet</a></li>

              <li><a href="{{ url('/services') }}">Services</a></li>

              <li><a href="{{ url('/corporateAccount') }}">Corporate Account</a></li>

              <li><a href="{{ url('/contact') }}">Contact</a></li>

            </ul>

          </div>

          <div class="col-lg-3 width-25 mb-30">

            <h5 class="text-18-medium color-white mb-20 wow fadeInUp">Top cities</h5>

            <ul class="menu-footer wow fadeInUp">

              <li><a href="{{ url('/citylist') }}">Bloomington</a></li>

              <li><a href="{{ url('/citylist') }}">West Lafayette</a></li>

              <li><a href="{{ url('/citylist') }}">South Bend</a></li>

              <li><a href="{{ url('/citylist') }}">Muncie</a></li>

              <li><a href="{{ url('/citylist') }}">Terre Haute</a></li>
              
              <li><a href="{{ url('/citylist') }}">Indianapolis</a></li>

            </ul>

          </div>

          <div class="col-lg-3 width-25 mb-30">

            <h5 class="text-18-medium color-white mb-20 wow fadeInUp">Explore</h5>

            <ul class="menu-footer wow fadeInUp">

              <li><a href="{{ url('/intercityRideService') }}">Intercity rides service</a></li>

              {{-- <li><a href="{{ url('/services') }}">Limousine service</a></li> --}}

              <li><a href="{{ url('/privateCarService') }}">Private car service</a></li>

              <li><a href="{{ url('/groundTransportationService') }}">Ground transportation service</a></li>

              <li><a href="{{ url('/airportTransportService') }}">Airport transfer service</a></li>

            </ul>

          </div>

          <div class="col-lg-3 width-25 mb-30">

            <h5 class="text-18-medium color-white mb-20 wow fadeInUp">Classes</h5>

            <ul class="menu-footer wow fadeInUp">

              <li><a href="{{ url('/fleet') }}">Sedans and Luxury Sedans</a></li>

              <li><a href="{{ url('/fleet') }}">Midsize SUVs</a></li>

              <li><a href="{{ url('/fleet') }}">Full-Size SUVs</a></li>

            </ul>
          </div>
        </div>

      </div>

    </div>

    <div class="footer-2">

      <div class="container-sub">

        <div class="footer-bottom">

          <div class="row align-items-center">

            <div class="col-lg-8 col-md-12 text-center text-lg-start"><span class="text-14 color-white mr-50">© 2024 Airport Limousine LLC</span>

              <ul class="menu-bottom">

                {{-- <li><a href="{{ url('/termsCondition') }}">Terms and Conditions</a></li> --}}

                <li><a href="{{ url('/privacyPolicy') }}">Privacy policy</a></li>

                <li><a href="{{ url('/faq') }}">faqs</a></li>

                <!-- <li><a href="{{ url('/comingSoon') }}">Accessibility</a></li> -->

              </ul>

            </div>

            <!-- <div class="col-lg-4 col-md-12 text-center text-lg-end"><a class="btn btn-link-location" href="#">New York</a><a class="btn btn-link-globe active" href="#">English</a></div> -->

          </div>

        </div>

      </div>

    </div>

  </footer>