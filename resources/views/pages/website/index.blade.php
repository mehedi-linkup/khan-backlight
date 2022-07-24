@extends('layouts.website', ['pageName' => 'home'])


@section('web-content')
    @include('layouts.partials.web_slider')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <div>
                {!! $content->about !!}
              </div>
              <div class="text-center text-lg-start">
                <a href="{{ route('about') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset($content->about_image) }}" class="img-fluid" alt="" style="height: 366px;">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Product Section ======= -->
    <section id="products" class="products">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Products</h2>
          <p style="box-shadow: 0 1px 1px 0px #4154f147;">Some sample of our products</p>
          <div class="btn-absolute text-center text-lg-start">
            <a href="{{ route('product') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

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

    <!-- ======= Speciality Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Speciality</h2>
          <p>Our Company's best qualities & specialities</p>
        </header>

        <div class="row">
          @foreach($service as $item)
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
              <h3>{{ $item->name }}</h3>
              <p>{{ $item->s_description }}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>

    </section><!-- End Values Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Factory</h2>
          <p>Some of our factory information</p>
        </header>

        <div class="row">

          <div class="col-lg-8">
            <div class="row align-self-center gy-4">
              <div class="col-lg-6">
                <img src="{{ asset($factory->image1) }}" class="img-fluid border" alt="">
              </div>
              <div class="col-lg-6">
                <img src="{{ asset($factory->image2) }}" class="img-fluid border" alt="">
              </div>
              <div class="col-lg-6">
                <img src="{{ asset($factory->image3) }}" class="img-fluid border" alt="">
              </div>
              <div class="col-lg-6">
                <img src="{{ asset($factory->image4) }}" class="img-fluid border" alt="">
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              @foreach ($factorypoint->take(6) as $item)
              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>{{ $item->title }}</h3>
                </div>
              </div>
              @endforeach
            </div>
          </div>

        </div> <!-- / row -->
      </div>

    </section><!-- End Features Section -->

    <section id="history" class="history">

      <div class="container" data-aos="fade-up">
        <!-- Feature Tabs -->
        <div class="row history-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Histories & Activities of Our Company</h3>
  
            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Histories</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Activities</a>
              </li>
              {{-- <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
              </li> --}}
            </ul><!-- End Tabs -->
  
            <!-- Tab Content -->
            <div class="tab-content">
  
              <div class="tab-pane fade show active" id="tab1">
                {!! $history->description1 !!}
              </div><!-- End Tab 1 Content -->
  
              <div class="tab-pane fade show" id="tab2">
                {!! $history->description2 !!}
              </div><!-- End Tab 2 Content -->
            </div>
  
          </div>
  
          <div class="col-lg-6">
            <img src="{{ asset($history->image) }}" class="img-fluid ms-lg-5 border border-3 custom-border" alt="">
          </div>
  
        </div><!-- End Feature Tabs -->
      </div>
    </section>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Sister Concern</h2>
          <p style="box-shadow: 0 1px 1px 0px #4154f147;">Our relations with other companies</p>
          <div class="btn-absolute text-center text-lg-start">
            <a href="{{ route('sister-concern') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

        <div class="row gy-4">

          @foreach($sister->take(3) as $item)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <div class="img-box p-lg-5 pt-lg-0">
                <img src="{{ asset($item->image) }}" alt="" class="img-fluid rounded">
              </div>
              <h3>{{ $item->name }}</h3>
              <p>{{ $item->s_description }}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p style="box-shadow: 0 1px 1px 0px #4154f147;">Frequently Asked Questions</p>
          <div class="btn-absolute text-center text-lg-start">
            <a href="{{ route('faq') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

        <div class="accordion accordion-flush" id="faqlist1">
        <div class="row">
            @foreach($faq as $item)
            <div class="col-lg-6">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $item->id }}">
                    {{ $item->name }}
                  </button>
                </h2>
                <div id="faq-content-{{ $item->id }}" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    {{ $item->details }}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Gallery</h2>
          <p style="box-shadow: 0 1px 1px 0px #4154f147;">Check our latest photos</p>
          <div class="btn-absolute text-center text-lg-start">
            <a href="{{ route('gallery') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($gallery->take(12) as $item)
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

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            @foreach($testimonial as $item)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile">
                  <img src="{{ asset($item->image) }}" class="testimonial-img" alt="">
                  <h3>{{ $item->name }}</h3>
                  <h4>{{ $item->post }}</h4>
                </div>
                <p>
                  {{ $item->description }}
                </p>
              </div>
            </div><!-- End testimonial item -->
            @endforeach


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p style="box-shadow: 0 1px 1px 0px #4154f147;">Our team members</p>
          <div class="btn-absolute text-center text-lg-start">
            <a href="{{ route('team') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

        <div class="row gy-4">
          @foreach($management->take(4) as $item)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('uploads/management/'. $item->image) }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="{{ $item->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="{{ $item->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="{{ $item->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $item->name }}</h4>
                <span>{{ $item->designation }}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Clients</h2>
          <p>Some of our clients</p>
        </header>
      </div>
      <div class="client-holder">
        <div class="container" data-aos="fade-up">
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              @foreach ($partner as $item)
              <div class="swiper-slide">
                <img src="{{ asset($item->image) }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">{{ $item->name }}</p>
              </div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>News & Events</h2>
          <p style="box-shadow: 0 1px 1px 0px #4154f147;">Recent news & events of our company</p>
          <div class="btn-absolute text-center text-lg-start">
            <a href="{{ route('webnews') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

        <div class="row">
          @foreach($news as $item)
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset($item->image) }}" class="img-fluid" alt=""></div>
              <span class="post-date">{{ $item->created_at }}</span>
              <h3 class="post-title">{{ $item->title }}</h3>
              {{-- <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>
          @endforeach
        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

@endsection