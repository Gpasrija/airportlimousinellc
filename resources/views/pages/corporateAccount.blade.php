@extends('layouts.app')

@section('title', 'Coorporate Account')

@section('content')

<main class="main">

  <div class="section pt-60 pb-60 bg-primary">

    <div class="container-sub"> 

      <h1 class="heading-44-medium color-white mb-5">Corporate Account</h1>

      <div class="box-breadcrumb"> 

        <ul>

          <li> <a href="{{ url('/home') }}">Home</a></li>

          <li> <a href="{{ url('/corporateAccount') }}">Corporate Account</a></li>

        </ul>

      </div>

    </div>

  </div>

  <section class="section pt-120">

    <div class="container-sub"> 

      <div class="row align-items-end">

        <div class="col-lg-12 col-12">
          <h2 class="heading-44-medium color-text wow fadeInUp">For Corporate Account: </h2>
        </div>
        <div class="col-lg-12 col-12">
          <h4 class="color-text wow fadeInUp">
            You can directly call us at 
            <a href="tel:7653156780">+1 765-315-6780</a> 
            or can email us at 
            <a href="mailto:info@airportlimoindy.com">info@airportlimoindy.com</a>
          </h4>
        </div>
      </div>
    </div>

  </section>
  <section class="section pt-120">
  </section>
</main>

@endsection

