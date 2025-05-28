@extends('layouts.app')



@section('title', 'Coming Soon')



@section('content')



<main class="main">

    <section class="section">

      <div class="box-comingsoon"> 

        <div class="inner-comingsoon"> 

          <h2 class="heading-44-medium color-white wow fadeInUp">We Are</h2>

          <h1 class="heading-100-medium color-white wow fadeInUp">COMING SOON</h1>

          <div class="box-count box-count-square mb-30 mt-90 wow fadeInUp">

            <div class="deals-countdown" data-countdown="2023/06/08 00:00:00"></div>

          </div>

          <p class="text-16 color-white wow fadeInUp">Please subscribe to newsletter to get updates from us.</p>

          <div class="box-subscriber mt-30 wow fadeInUp"> 

            <div class="inner-box-subscriber"> 

              <form action="#">

                <input class="form-control" type="text" placeholder="Your Email" id="email" name="email">

                {{-- <input class="form-control" type="text" placeholder="Your Email"> --}}

                <input class="btn btn-subscriber" type="submit" value="Subscribe">

              </form>

            </div>

          </div>

        </div>

      </div>

    </section>

  </main>

  @endsection