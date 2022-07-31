@extends('layouts.website', ['pageName' => 'Product'])
@section('web-content')
@push('web-css')
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
@endpush

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
                      <a href="{{ route('product-detail', $item->id) }}" class="btn button-2 btn-card">Details</a>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Product Section -->

@endsection

@push('web-js')
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('js/toastr.min.js') }}"></script>
<script>
    @if(Session::has('success'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.success("{{ session('success') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif
</script>
@endpush
  