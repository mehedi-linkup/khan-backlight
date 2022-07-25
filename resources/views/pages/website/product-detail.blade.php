@extends('layouts.website', ['pageName' => 'product'])
@section('web-content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{route('home')}}">Home</a></li>
      <li> Product Details </li>
    </ol>
    <h2>{{ $product->name }}</h2>

  </div>
</section><!-- End Breadcrumbs -->

 <!-- ======= Portfolio Details Section ======= -->
 <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset($product->image) }}" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="portfolio-description">
            <h2>Product Information</h2>
            <p><strong>Product Name: </strong>{{ $product->name }}</p>
            <h6><strong>Product Code: </strong> {{ 'PRD'.$product->product_id }}</h6>
            <div>
            <div>
                <strong>Description: </strong>
                {!! $product->description !!}
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection