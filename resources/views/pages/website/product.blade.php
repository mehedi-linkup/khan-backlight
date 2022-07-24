@extends('layouts.website', ['pageName' => 'product'])
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
        <div class="row row-cols-lg-5 gy-lg-3">
          @foreach($product as $item)
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href="#!">
                      <img width="100%" height="219" src="{{ asset($item->image) }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">{{ $item->name }}</h5>
                  </a> 
                  <div class="product-id">Id-{{ $item->id }}</div>
                  <div class="">
                      <a href="{{ route('order') }}" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Product Section -->

@endsection
  