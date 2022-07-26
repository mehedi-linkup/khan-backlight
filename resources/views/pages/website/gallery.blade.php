@extends('layouts.website', ['pageName' => 'Gallery'])
@section('web-content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{route('home')}}">Home</a></li>
      <li> Gallery </li>
    </ol>
    <h2>Our Photos</h2>

  </div>
</section><!-- End Breadcrumbs -->

   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">
      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach($gallery as $item)
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('uploads/gallery/'.$item->image) }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $item->title }}</h4>
              <div class="portfolio-links">
                <a href="{{ asset('uploads/gallery/'.$item->image) }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{ $item->title }}"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       

        

       
        


        

        
      </div>
    </div>
  </section><!-- End Portfolio Section -->

@endsection
  