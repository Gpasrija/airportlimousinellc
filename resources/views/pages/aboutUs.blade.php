@extends('layouts.app')
@section('meta')
    <meta name="description" content="Learn more about Airport Limousine LLC. We pride ourselves on providing luxury airport transfers, private car services, and ground transportation across Indiana.">
    <meta name="keywords" content="about airport limousine, luxury transport company, limousine service Indiana, private car service Indiana, professional limo service">
    <meta property="og:title" content="About Airport Limousine LLC | Premier Limo Service in Indiana">
    <meta property="og:description" content="Learn more about Airport Limousine LLC. We pride ourselves on providing luxury airport transfers, private car services, and ground transportation across Indiana.">
    {{-- <meta property="og:image" content="{{ asset('images/home-page-image.jpg') }}"> --}}
    <meta property="og:url" content="{{ url()->current() }}">
@endsection
@section('title', 'About Airport Limousine LLC | Premier Limo Service in Indiana')

@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">About Us</h1>
        <div class="box-breadcrumb"> 
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/aboutus') }}">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
        <section class="section">
            <div class="container-sub"> 
                <div class="mt-120 mb-30"> 
                  <div class="content-single wow fadeInUp">
                    <p class="mb-30">Welcome to <b>Airport Limousine LLC</b>, your premier choice for luxury transportation in Indiana. Established with a commitment to providing unparalleled service, we specialize in offering safe, reliable, and comfortable rides to our valued clients.</p>

                    <p class="mb-30">Located at 5743 Oakmont Blvd, Bargersville, Indiana, our company prides itself on our fleet of luxurious vehicles and our team of professional, courteous drivers. Whether you need transportation for an airport transfer, an intercity ride, or any special occasion, we ensure you travel in style and comfort.</p>

                    <p class="mb-30">Our mission is to exceed your expectations by delivering the highest level of service. With a focus on punctuality, safety, and customer satisfaction, we tailor our services to meet your unique needs. Our driver, Hardeep, and the entire team are dedicated to making your journey as smooth and enjoyable as possible.</p>
                    <p class="mb-30">At Airport Limousine LLC, we understand the importance of dependable transportation, especially for students and professionals. We are proud to offer specialized services for Anderson University students, ensuring safe and timely rides between the university and the airport.</p>
                    <p class="mb-30">Thank you for choosing Airport Limousine LLC. We look forward to serving you. </p>

                    <p class="mb-30">For inquiries or reservations, please contact us at:<a class="text-14-medium call-phone hover-up" href="tel:+17653156780">765-315-6780.</a></p>
                  </div>
                </div>
            </div>
        </section>
  </main>
@endsection