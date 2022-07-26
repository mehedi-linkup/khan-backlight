@extends('layouts.website', ['pageName' => 'Product'])
@section('web-content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{route('home')}}">Home</a></li>
      <li> Product </li>
    </ol>
    <h2>Our Products</h2>

  </div>
</section><!-- End Breadcrumbs -->


    <!-- ======= Product Section ======= -->
    <section id="products" class="products">

      <div class="container" data-aos="fade-up">
        <div class="row row-cols-1 row-cols-lg-5 gy-3">
          @foreach($product as $item)
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-2 p-lg-3">
              <div class="img-box">
                  <a href="{{ route('product-detail', $item->id)}}">
                      <img width="100%" height="219" src="{{ asset($item->image) }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="{{ route('product-detail', $item->id)}}">
                      <h5 class="card-title">{{ $item->name }}</h5>
                  </a> 
                  <div class="product-id pb-md-2"> {{ $item->product_id }}</div>
                  <div class="">
                      <a href="{{ route('order', $item->id) }}" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Product Section -->

@endsection
  