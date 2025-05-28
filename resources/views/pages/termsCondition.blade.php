@extends('layouts.app')

@section('title', 'Terms & Conditions')

@section('content')

<main class="main">

  <div class="section pt-60 pb-60 bg-primary">

    <div class="container-sub"> 

      <h1 class="heading-44-medium color-white mb-5">Terms & Conditions</h1>

      <div class="box-breadcrumb"> 

        <ul>

          <li> <a href="{{ url('/home') }}">Home</a></li>

          <li> <a href="{{ url('/termsCondition') }}">Terms & Conditions</a></li>

        </ul>

      </div>

    </div>

  </div>

  <section class="section pt-120">

    <div class="container-sub"> 

      <div class="row align-items-end">

        <div class="col-lg-12 col-12">
          <h2 class="heading-44-medium color-text wow fadeInUp">Terms and Condition</h2>
        </div>
        <div class="col-lg-12 col-12">
          <h4 class="color-text wow fadeInUp">
            Here's a basic outline of terms and conditions for Car booking in the USA. Please note that these terms may vary based on the specific services and local regulations
          </h4>
        </div>
      </div>
    </div>

  </section>
  <section class="section pt-120">
  </section>
</main>

@endsection

