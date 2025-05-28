@extends('layouts.app')

@section('title', 'Services')

@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">Services</h1>
        <div class="box-breadcrumb"> 
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
          </ul>
        </div>
      </div>
    </div>
    <section class="section pt-60">
      <div class="container-sub"> 
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Intercity Ride Service</h3>
                <div class="box-inner-info">
                  <p class="cardDesc text-14 color-white mb-30">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p><a class="cardLink btn btn-arrow-up" href="{{ url('/intercityRideService') }}">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/homepage1/service1.png" alt="AirportLimousineLLC"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Groud Transportation Service</h3>
                <div class="box-inner-info">
                  <p class="cardDesc text-14 color-white mb-30">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p><a class="cardLink btn btn-arrow-up" href="{{ url('/groundTransportationService') }}">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/homepage1/service2.png" alt="AirportLimousineLLC"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Airport Transfers Service</h3>
                <div class="box-inner-info">
                  <p class="cardDesc text-14 color-white mb-30">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p><a class="cardLink btn btn-arrow-up" href="{{ url('/airportTransportService') }}">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/homepage1/service3.png" alt="AirportLimousineLLC"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Private Car Service</h3>
                <div class="box-inner-info">
                  <p class="cardDesc text-14 color-white mb-30">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p><a class="cardLink btn btn-arrow-up" href="{{ url('/privateCarService') }}">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/homepage1/service5.png" alt="AirportLimousineLLC"></div>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
  </main>
  @endsection
