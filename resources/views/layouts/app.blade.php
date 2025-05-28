<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="msapplication-TileColor" content="#0E0E0E">
        <meta name="template-color" content="#0E0E0E">
        @yield('meta')

        {{-- <meta name="description" content="Index page">
        <meta name="keywords" content="index, page">
        <meta name="author" content=""> --}}

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imgs/template/favicon.png') }}">

        <link href="{{ asset('css/style.css?v=1.0.0') }}" rel="stylesheet">
        <link href="{{ asset('css/homepage1.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/homepage2.css') }}" rel="stylesheet"> --}}


        <script src="https://p.usestyle.ai" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



        <title>@yield('title')</title>

    </head>

    <body>

        {{-- <div id="preloader-active">

            <div class="preloader d-flex align-items-center justify-content-center">

              <div class="preloader-inner position-relative">

                <div class="page-loading">

                  <div class="page-loading-inner">

                    <div></div>

                    <div></div>

                    <div></div>

                  </div>

                </div>

              </div>

            </div>

        </div> --}}

        <!-- Header content goes here -->

        @include('pages.header')

    

        <!-- Main content goes here -->

        @yield('content')



        <!-- Footer content goes here -->

        @include('pages.footer')

    

    </body>

</html>

