@extends('layouts.app')

@section('title', 'Cities')

@section('content')

<main class="main">
    <div class="section pt-60 pb-60 bg-primary">
      <div class="container-sub"> 
        <h1 class="heading-44-medium color-white mb-5">Cities</h1>
        <div class="box-breadcrumb"> 
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/cities') }}">Cities</a></li>
          </ul>
        </div>
      </div>
    </div>
    <section class="section pt-60">
      <div class="container-sub"> 
        <div class="text-center"> 
          <h2 class="color-brand-1 mb-20 wow fadeInUp">Cities we serve</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardCityInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Bloomington</h3>
                <div class="box-inner-info">
                  <ul class="cardDesc1 text-14 color-white mb-30">
                    <li><b>*Indiana University Bloomington (IU)</b></li>
                    <li><b>*Distance from IND*:</b> Approx 52 miles (84 km)</li>
                    <li><b>*Special Info*:</b> Known for its picturesque campus, IU is renowned for its business, law, and music programs.</li>
                  </ul>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/cities/bloomingtoon.jpg" alt="Luxride"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardCityInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">West Lafayette</h3>
                <div class="box-inner-info">
                  <ul class="cardDesc1 text-14 color-white mb-30">
                    <li><b>*Purdue University</b></li>
                    <li><b>*Distance from IND*:</b> Approx 70 miles (113 km)</li>
                    <li><b>*Special Info*:</b> A top engineering and agricultural school, Purdue is also known for its contributions to space exploration and technology.</li>
                  </ul>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/cities/West_Lafayettee.jpg" alt="Luxride"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardCityInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">South Bend</h3>
                <div class="box-inner-info">
                  <ul class="cardDesc1 text-14 color-white mb-30">
                    <li><b>*University of Notre Dame</b></li>
                    <li><b>*Distance from IND*:</b> Approx 150 miles (241 km)</li>
                    <li><b>*Special Info*:</b> A prestigious Catholic research university known for its strong academics, athletics, and beautiful campus.</li>
                  </ul>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/cities/notre_dame_south_bendd.jpg" alt="Luxride"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardCityInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Muncie</h3>
                <div class="box-inner-info">
                  <ul class="cardDesc1 text-14 color-white mb-30">
                    <li><b>*Ball State University</b></li>
                    <li><b>*Distance from IND*:</b> Approx 76 miles (122 km)</li>
                    <li><b>*Special Info*:</b> Known for its strong programs in architecture, education, and telecommunications.</li>
                  </ul>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/cities/munciee.jpg" alt="Luxride"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardCityInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Terre Haute</h3>
                <div class="box-inner-info">
                  <ul class="cardDesc1 text-14 color-white mb-30">
                    <li><b>*Indiana State University (ISU)</b></li>
                    <li><b>*Distance from IND*:</b> Approx 70 miles (113 km)</li>
                    <li><b>*Special Info*:</b> Offers strong programs in business, health sciences, and education.</li>
                  </ul>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/cities/ISU_terre_haute.jpg" alt="Luxride"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
              <div class="cardCityInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Fort Wayne</h3>
                <div class="box-inner-info">
                  <ul class="cardDesc1 text-14 color-white mb-30">
                    <li><b>*Purdue University Fort Wayne(IPFW)</b></li>
                    <li><b>*Distance from IND*:</b> Approx 128 miles (206 km)</li>
                    <li><b>*Special Info*:</b> Now known as Purdue University Fort Wayne, it offers a wide range of undergraduate and graduate programs.</li>
                  </ul>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/cities/fort_waynee.jpg" alt="Luxride"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
           <div class="cardService wow fadeInUp">
              <div class="cardCityInfo">
                <h3 class="cardTitle text-20-medium color-white mb-10">Evansville</h3>
                <div class="box-inner-info">
                  <ul class="cardDesc1 text-14 color-white mb-30">
                    <li><b>*University of Evansville</b></li>
                    <li><b>*Distance from IND*:</b> Approx 168 miles (270 km)</li>
                    <li><b>*Special Info*: </b> private university known for its strong health sciences and business programs.</li>
                  </ul>
                </div>
              </div>
              <div class="cardImage"><img src="/imgs/page/cities/Evansvillee.jpg" alt="Luxride"></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-30"> 
            <div class="cardService wow fadeInUp">
               <div class="cardCityInfo">
                 <h3 class="cardTitle text-20-medium color-white mb-10">Richmond</h3>
                 <div class="box-inner-info">
                   <ul class="cardDesc1 text-14 color-white mb-30">
                     <li><b>*Earlham College</b></li>
                     <li><b>*Distance from IND*: </b>Approx 74 miles (119 km)</li>
                     <li><b>*Special Info*: </b> liberal arts college known for its strong emphasis on social justice and international education.</li>
                   </ul>
                 </div>
               </div>
               <div class="cardImage"><img src="/imgs/page/cities/richmondd.jpg" alt="Luxride"></div>
             </div>
           </div>
        </div>
      </div>
    </section>
  </main>
  @endsection
