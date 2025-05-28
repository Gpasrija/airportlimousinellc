@extends('layouts.app')

@section('title', 'Our Team')

@section('content')

<main class="main">
  <div class="section pt-60 pb-60 bg-primary">
    <div class="container-sub"> 
      <h1 class="heading-44-medium color-white mb-5">Our Team</h1>
      <div class="box-breadcrumb"> 
        <ul>
          <li> <a href="{{ url('/home') }}">Home</a></li>
          <li> <a href="{{ url('/ourTeam') }}">Our Team</a></li>
        </ul>
      </div>
    </div>
  </div>
  <section class="section pt-120">
    <div class="container-sub"> 
      <div class="row align-items-end">
        <div class="col-lg-7 col-7">
          <h2 class="heading-44-medium color-text wow fadeInUp">Meet Our Team of Experts in <br class="d-none d-lg-block">Manager and Marketing</h2>
        </div>
        <div class="col-lg-5 col-5 text-end">
          <p class="text-16 color-text wow fadeInUp">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
        </div>
      </div>
      <div class="row mt-60"> 
        <div class="col-lg-3 col-sm-6"> 
          <div class="cardTeam wow fadeInUp">
            <div class="cardImage"><img src="imgs/page/our-team/team1.png" alt="luxride">
              <div class="box-arrow-up-link"><a class="cardLink btn btn-arrow-up" href="{{ url('/ourTeam') }}">
                  <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
            <div class="cardInfo">
              <h6 class="text-18-medium">Alfonso Stanton</h6>
              <p class="text-14 color-grey">Head of Experience, AU</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6"> 
          <div class="cardTeam wow fadeInUp">
            <div class="cardImage"><img src="imgs/page/our-team/team2.png" alt="luxride">
              <div class="box-arrow-up-link"><a class="cardLink btn btn-arrow-up" href="{{ url('/ourTeam') }}">
                  <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
            <div class="cardInfo">
              <h6 class="text-18-medium">Chuck Demeritt</h6>
              <p class="text-14 color-grey">Operations Manager</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6"> 
          <div class="cardTeam wow fadeInUp">
            <div class="cardImage"><img src="imgs/page/our-team/team3.png" alt="luxride">
              <div class="box-arrow-up-link"><a class="cardLink btn btn-arrow-up" href="{{ url('/ourTeam') }}">
                  <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
            <div class="cardInfo">
              <h6 class="text-18-medium">Eduardo Lindsley</h6>
              <p class="text-14 color-grey">Chief Executive Officer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6"> 
          <div class="cardTeam wow fadeInUp">
            <div class="cardImage"><img src="imgs/page/our-team/team4.png" alt="luxride">
              <div class="box-arrow-up-link"><a class="cardLink btn btn-arrow-up" href="{{ url('/ourTeam') }}">
                  <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
            <div class="cardInfo">
              <h6 class="text-18-medium">Guy Mccoy</h6>
              <p class="text-14 color-grey">Managing Director</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6"> 
          <div class="cardTeam wow fadeInUp">
            <div class="cardImage"><img src="imgs/page/our-team/team5.png" alt="luxride">
              <div class="box-arrow-up-link"><a class="cardLink btn btn-arrow-up" href="{{ url('/ourTeam') }}">
                  <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
            <div class="cardInfo">
              <h6 class="text-18-medium">Antwan Denny</h6>
              <p class="text-14 color-grey">Sales Executive</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6"> 
          <div class="cardTeam wow fadeInUp">
            <div class="cardImage"><img src="imgs/page/our-team/team6.png" alt="luxride">
              <div class="box-arrow-up-link"><a class="cardLink btn btn-arrow-up" href="{{ url('/ourTeam') }}">
                  <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
            <div class="cardInfo">
              <h6 class="text-18-medium">George Harrington</h6>
              <p class="text-14 color-grey">Site Manager</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6"> 
          <div class="cardTeam wow fadeInUp">
            <div class="cardImage"><img src="imgs/page/our-team/team7.png" alt="luxride">
              <div class="box-arrow-up-link"><a class="cardLink btn btn-arrow-up" href="{{ url('/ourTeam') }}">
                  <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
            <div class="cardInfo">
              <h6 class="text-18-medium">Val Purvis</h6>
              <p class="text-14 color-grey">Head of Marketing</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6"> 
          <div class="cardTeam wow fadeInUp">
            <div class="cardImage"><img src="imgs/page/our-team/team8.png" alt="luxride">
              <div class="box-arrow-up-link"><a class="cardLink btn btn-arrow-up" href="{{ url('/ourTeam') }}">
                  <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
            <div class="cardInfo">
              <h6 class="text-18-medium">Phoebe Kunis</h6>
              <p class="text-14 color-grey">Assistant Clerk</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section mt-50 bg-download"> 
    <div class="container-sub"> 
      <h2 class="heading-44-medium color-text mb-20 wow fadeInUp">Download the app</h2>
      <p class="color-text text-16 mb-60 wow fadeInUp">Have a personal driver at your fingertips no matter where you <br class="d-none d-md-block">are with our easy-to-use smartphone app.</p>
      <div class="box-button-download"> <a class="btn btn-download mr-15 hover-up wow fadeInUp" href="#">
          <div class="inner-download">
            <div class="icon-download"> <img src="imgs/template/icons/apple-icon.svg" alt="luxride"></div>
            <div class="info-download"> <span class="text-download-top">Download on the</span><span class="text-14-medium">Apple Store</span></div>
          </div></a><a class="btn btn-download hover-up wow fadeInUp" href="#">
          <div class="inner-download">
            <div class="icon-download"> <img src="imgs/template/icons/google-icon.svg" alt="luxride"></div>
            <div class="info-download"> <span class="text-download-top">Download on the</span><span class="text-14-medium">Apple Store</span></div>
          </div></a></div>
    </div>
  </section>
</main>
@endsection
