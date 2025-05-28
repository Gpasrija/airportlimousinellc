@extends('layouts.app')

@section('title', 'FAQ')

@section('content')

<main class="main">

  <div class="section pt-60 pb-60 bg-primary">

    <div class="container-sub"> 

      <h1 class="heading-44-medium color-white mb-5">Frequently Asked Questions</h1>

      <div class="box-breadcrumb"> 

        <ul>

          <li> <a href="{{ url('/home') }}">Home</a></li>

          <li> <a href="{{ url('/faq') }}">faq</a></li>

        </ul>

      </div>

    </div>

  </div>
  <section class="section pt-80 mb-30 bg-faqs">

    <div class="container-sub">

      <div class="box-faqs">

        <div class="text-center"> 

          <h2 class="color-brand-1 mb-20 wow fadeInUp">Frequently Asked Questions</h2>

        </div>

        <div class="mt-60 mb-40">

          <div class="accordion wow fadeInUp" id="accordionFAQ">

            @foreach($faqData as $faqs)

            <div class="accordion-item">

              <h4 class="accordion-header" id="heading{{ $faqs['id'] }}">

                <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faqs['id'] }}" aria-expanded="false" aria-controls="collapse{{ $faqs['id'] }}">{{ $faqs['question'] }}</button>

              </h4>

              <div class="accordion-collapse collapse" id="collapse{{ $faqs['id'] }}" aria-labelledby="heading{{ $faqs['id'] }}" data-bs-parent="#accordionFAQ">

                <div class="accordion-body">{{ $faqs['answer'] }}</div>

              </div>

            </div>
            @endforeach
          </div>

        </div>

      </div>

    </div>

  </section>

 
  <section class="section pt-120">
  </section>
</main>

@endsection

