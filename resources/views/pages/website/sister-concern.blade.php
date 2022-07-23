@extends('layouts.website')
@section('web-content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{route('home')}}">Home</a></li>
      <li> Sister Concern </li>
    </ol>
    <h2>Sister Concerns</h2>

  </div>
</section><!-- End Breadcrumbs -->


    <!-- ======= Sister Concern Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">  
          <div class="row gy-4">
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <div class="img-box p-lg-5 pt-lg-0">
                  <img src="{{ asset('website/assets/img/sister-concern/adidas.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <h3>Addidas</h3>
                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-box orange">
                <div class="img-box p-lg-5 pt-lg-0">
                  <img src="{{ asset('website/assets/img/sister-concern/intel.png') }}" alt="" class="img-fluid rounded">
                </div>
                <h3>Intel</h3>
                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-box green">
                <div class="img-box p-lg-5 pt-lg-0">
                  <img src="{{ asset('website/assets/img/sister-concern/Nike.png') }}" alt="" class="img-fluid rounded">
                </div>
                <h3>Nike</h3>
                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              </div>
            </div>
          </div>
  
        </div>
  
      </section><!-- End Sister Concern Section -->

@endsection
  