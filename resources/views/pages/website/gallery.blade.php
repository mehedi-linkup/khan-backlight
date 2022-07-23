@extends('layouts.website')
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

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('website/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <div class="portfolio-links">
                <a href="{{ asset('website/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Section -->

@endsection
  