@extends('layouts.app')
@section('meta')
    <meta name="description" content="Browse our fleet of luxurious vehicles, including sedans, SUVs, and limousines. Each vehicle is equipped with modern amenities to ensure your comfort.">
    <meta name="keywords" content="limousine fleet, luxury vehicle fleet, Indiana luxury transportation, SUV limo, executive fleet, luxury sedan rental Indiana">
    <meta property="og:title" content="Luxury Limousine Fleet | Airport Limousine LLC">
    <meta property="og:description" content="Browse our fleet of luxurious vehicles, including sedans, SUVs, and limousines. Each vehicle is equipped with modern amenities to ensure your comfort.">
    {{-- <meta property="og:image" content="{{ asset('images/home-page-image.jpg') }}"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
@endsection
@section('title', 'Luxury Limousine Fleet | Airport Limousine LLC')
@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">Our Fleet</h1>
        <div class="box-breadcrumb"> 
          <ul>
            <li> <a href="{{ url('/home') }}">Home</a></li>
            <li> <a href="{{ url('/fleet') }}">Our Fleet</a></li>
          </ul>
        </div>
      </div>
    </div>
    <section class="section pt-60 bg-white latest-new-white">
      <div class="container-sub"> 
        <div class="row align-items-center"> 
          <div class="col-lg-12 col-md-6 col-sm-6 text-center text-sm-start mb-30"> 
            <h2 class="heading-24-medium wow fadeInUp">Choose Your Fleet</h2>
            <p class="text-14 color-text mb-30 wow fadeInUp"> Here's a detailed description of the vehicles, including their luggage handling capacities:</p>
          </div>
        </div>
        <div class="row mt-30"> 
          <div class="col-lg-4 mb-30"> 
            <div class="cardFleet wow fadeInUp">
              <div class="cardInfo"><a href="#">
                  <h3 class="text-20-medium color-text mb-10">Sedans and Luxury Sedans</h3></a>
                <p class="text-14 color-text mb-30">Mercedes-Benz E-Class, BMW 5 Series, Audi A6 <br><br></p>
              </div>
              <div class="cardImage mb-30"><a href="#"><img src="imgs/page/homepage1/e-class.png" alt="Luxride"></a></div>
              <div class="cardInfoBottom">
                <div class="passenger"><span class="icon-circle icon-passenger"></span><span class="text-14">2 Passengers</span></div>
                <div class="luggage"><span class="icon-circle icon-luggage"></span><span class="text-14">2 Luggage</span></div>
              </div>
              <div>
                <h3 class="text-16-medium color-text mb-10">Special Features:</h3></a>
                <p class="text-14 color-text mb-30">These vehicles offer a smooth and comfortable ride with luxurious interiors, advanced safety features, and ample legroom. Ideal for business travel or airport transfers for individual travelers or couples.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-30"> 
            <div class="cardFleet wow fadeInUp">
              <div class="cardInfo"><a href="#">
                  <h3 class="text-20-medium color-text mb-10">Midsize SUVs</h3></a>
                <p class="text-14 color-text mb-30">Acura MDX, Lexus RX, BMW X5 <br><br></p>
              </div>
              <div class="cardImage mb-30"><a href="#"><img src="imgs/page/fleet/suv-class.png" alt="Luxride"></a></div>
              <div class="cardInfoBottom">
                <div class="passenger"><span class="icon-circle icon-passenger"></span><span class="text-14">4 Passengers</span></div>
                <div class="luggage"><span class="icon-circle icon-luggage"></span><span class="text-14">3 Luggage</span></div>
              </div>
              <div>
                <h3 class="text-16-medium color-text mb-10">Special Features:</h3></a>
                <p class="text-14 color-text mb-30">Midsize SUVs provide a balance between space and comfort, featuring versatile seating configurations and moderate cargo space. They are perfect for small groups or families traveling with a bit more luggage.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-30"> 
            <div class="cardFleet wow fadeInUp">
              <div class="cardInfo"><a href="#">
                  <h3 class="text-20-medium color-text mb-10">Full-Size SUVs</h3></a>
                <p class="text-14 color-text mb-30">Cadillac Escalade, Lincoln Navigator, Chevrolet Suburban</p>
              </div>
              <div class="cardImage mb-30"><a href="#"><img src="imgs/page/homepage1/suv.png" alt="Luxride"></a></div>
              <div class="cardInfoBottom">
                <div class="passenger"><span class="icon-circle icon-passenger"></span><span class="text-14">6 Passengers</span></div>
                <div class="luggage"><span class="icon-circle icon-luggage"></span><span class="text-14">6 Luggage</span></div>
              </div>
              <div>
                <h3 class="text-16-medium color-text mb-10">Special Features:</h3></a>
                <p class="text-14 color-text mb-30">These large SUVs offer ample space for both passengers and luggage, making them ideal for larger groups or families. They come with advanced entertainment systems, luxurious interiors, and superior comfort for long journeys. They are especially suited for airport transfers, group outings, and extended trips.</p>

              </div>
            </div>
          </div>
        </div>
        {{-- <div class="d-flex justify-content-end mt-3"> --}}
        <div class="row">
          <div class="col-md-5"> &nbsp;</div>
          <div class="col-md-5">
          <a class="btn btn-primary" href="{{ url('/') }}">Book Now

            <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">

              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>

            </svg></a>
          </div>
        </div>
      </div>
    </section>
  </main>
  @endsection