@extends('layouts.app')

@section('meta')
    <meta name="description" content="Get in touch with Airport Limousine LLC for all your luxury transportation needs. Call or message us to book your ride today.">
    <meta name="keywords" content="contact luxury transportation, airport limo contact, Indiana car service contact, book limousine Indiana">
    <meta property="og:title" content="Contact Airport Limousine LLC | Indiana’s Premier Limousine Service">
    <meta property="og:description" content="Get in touch with Airport Limousine LLC for all your luxury transportation needs. Call or message us to book your ride today.">
    {{-- <meta property="og:image" content="{{ asset('images/home-page-image.jpg') }}"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
@endsection
@section('title', 'Contact Airport Limousine LLC | Indiana’s Premier Limousine Service')

@section('content')
    <main class="main">
        <div class="section pt-60 pb-60 bg-primary">
            <div class="container-sub"> 
                <h1 class="heading-44-medium color-white mb-5">Contact Us</h1>
                <div class="box-breadcrumb"> 
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            {{-- <script>
              let num1, num2, correctAnswer;
      
              function generateCaptcha() {
                  num1 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
                  num2 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
                  correctAnswer = num1 + num2;  // Example: Addition
                  document.getElementById('math-question').innerHTML = `What is ${num1} + ${num2}?`;
              }
      
              function validateCaptcha() {
                  const userAnswer = document.getElementById('captcha-input').value;
                  if (parseInt(userAnswer) === correctAnswer) {
                      return true;  // CAPTCHA is correct
                  } else {
                      alert("Incorrect CAPTCHA answer. Please try again.");
                      return false;  // CAPTCHA failed
                  }
              }
      
              window.onload = generateCaptcha;  // Generate CAPTCHA when page loads
          </script> --}}
        </div>
        {{-- <section class="section mt-30 mb-20"> 
            <div class="container-sub"> 
                <div class="mw-770">
                    <h2 class="heading-44-medium mb-30 text-center wow fadeInUp">Leave us your info</h2>
                    <div class="form-contact form-comment wow fadeInUp"> 
                        <form onsubmit="return validateCaptcha()" action="{{ route('submitContactForm') }}" method="POST">
                            @csrf
                            <div class="row"> 
                                <div class="col-lg-6 col-md-6">
                                    <label class="form-label" for="fullname">Full Name</label>
                                    <div class="form-group"> 
                                        <input class="form-control" id="fullname" name="fullname" type="text" value="{{ old('fullname') }}">
                                        @error('fullname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <div class="form-group"> 
                                      <input class="form-control" id="email" name="email" type="text" value="{{ old('email') }}">
                                      @error('email')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label" for="subject">Subject</label>
                                    <div class="form-group"> 
                                        <input class="form-control" id="subject" name="subject" type="text" value="{{ old('subject') }}">
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label" for="message">Message</label>
                                    <div class="form-group"> 
                                        <textarea class="form-control" id="message" name="message" type="text" value="{{ old('message') }}"></textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                  <div id="math-question"></div>
                                  <input type="text" id="captcha-input" name="captcha" placeholder="Enter the answer" required><br><br>
                                </div>
                                <!-- Repeat the same structure for other form fields -->
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" type="submit">Get In Touch
                                        <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        <div class="section pt-60 pb-60">
          <div class="container-sub"> 
            <div class="row"> 
              
              <div class="col-lg-7 col-sm-6 mb-20">
              <iframe class="map-contact" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12304.38506187742!2d-86.1685395!3d39.5574369!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b6712599a4117%3A0x370e2116ee7ccc83!2sAirport%20Limousine%20LLC!5e0!3m2!1sen!2sin!4v1716782751895!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <!-- <div class="cardContact wow fadeInUp">
                  <div class="cardImage mb-30"><img src="imgs/page/contact/istabul.svg" alt="luxride"></div>
                  <div class="cardInfo">
                    <h6 class="heading-20-medium mb-10">Istanbul Office</h6>
                    <p class="text-16 mb-20">PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                    <p class="text-16 mb-20">+32 2 512 08 15</p>
                    <p class="text-16">istanbul@luxride.com</p>
                  </div>
                </div> -->
              </div>
              <div class="col-lg-5 col-sm-6 mb-20">
                <div class="cardContact wow fadeInUp">
                  <div class="cardImage mb-30"><img src="imgs/page/contact/new-york.svg" alt="luxride"></div>
                  <div class="cardInfo">
                    <h6 class="heading-20-medium mb-10">Indianapolis Office</h6>
                    <p class="text-16 mb-20">5743 Oakmont Blvd, Bargersville, IN 46106,</p>
                    <p class="text-16 mb-20">United States</p>
                    <p class="text-16 mb-20"><a href="tel:7653156780">+1 765-315-6780</a></p>
                    <p class="text-16 mb-20"><a href="mailto:info@airportlimoindy.com">Info@airportlimoindy.com</a></p>
                  </div>
                </div>
              </div>
              <!-- <div class="col-lg-3 col-sm-6 mb-30">
                <div class="cardContact wow fadeInUp">
                  <div class="cardImage mb-30"><img src="imgs/page/contact/paris.svg" alt="luxride"></div>
                  <div class="cardInfo">
                    <h6 class="heading-20-medium mb-10">Paris Office</h6>
                    <p class="text-16 mb-20">PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                    <p class="text-16 mb-20">+32 2 512 08 15</p>
                    <p class="text-16">paris@luxride.com</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-30">
                <div class="cardContact wow fadeInUp">
                  <div class="cardImage mb-30"><img src="imgs/page/contact/london.svg" alt="luxride"></div>
                  <div class="cardInfo">
                    <h6 class="heading-20-medium mb-10">London Office</h6>
                    <p class="text-16 mb-20">PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                    <p class="text-16 mb-20">+32 2 512 08 15</p>
                    <p class="text-16">london@luxride.com</p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <!-- <div class="section wow fadeInUp">
          <iframe class="map-contact" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12304.38506187742!2d-86.1685395!3d39.5574369!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b6712599a4117%3A0x370e2116ee7ccc83!2sAirport%20Limousine%20LLC!5e0!3m2!1sen!2sin!4v1716782751895!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->

    </main>

@endsection