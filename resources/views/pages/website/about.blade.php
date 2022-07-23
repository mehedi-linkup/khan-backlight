@extends('layouts.website', ['pageName' => 'about'])

@section('web-content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
        <li> About </li>
      </ol>
      <h2>About Us</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('website/assets/img/about.jpg') }}" class="img-fluid float-end ps-2" alt="" style="width: 40%; height: 366px;"> 
          <div class="content">
            <h3>Who We Are</h3>
            <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
            <p class="m-0" style="text-align: justify">
              Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
            </p>
          </div>
        </div>

        {{-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('website/assets/img/about.jpg') }}" class="img-fluid" alt="" style="height: 366px;">
        </div> --}}
      </div>
    </div>
</section><!-- End About Section -->

</main><!-- End #main -->

@endsection