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
              <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
              <p>
                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
              </p>
              <div class="text-center text-lg-start">
                <a href="{{ route('about') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('website/assets/img/about.jpg') }}" class="img-fluid" alt="" style="height: 366px;">
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
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

        <div class="row row-cols-lg-5 gy-lg-3">
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/cover logo.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/Honda Batch.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/looking glass.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/mod guard set.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/product1.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="200">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/backlight cover.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="400">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/backlight cover.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/backlight cover.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/cover logo.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/Honda Batch.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/looking glass.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/mod guard set.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/product1.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="200">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/backlight cover.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="400">
            <div class="card p-lg-3">
              <div class="img-box">
                  <a href=#>
                      <img width="100%" height="219" src="{{ asset('website/assets/img/product/backlight cover.jpg') }}" class="card-img-top" alt="Avenue Montaigne">
                  </a>
              </div>
              <div class="card-body p_card text-center">
                  <a href="#">
                      <h5 class="card-title">Product Title</h5>
                  </a> 
                  <div class="product-id">Id-16</div>
                  <div class="">
                      <a href="#" class="btn button-2 btn-card">Order Now</a>
                  </div>
              </div>
            </div>
          </div>
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

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('website/assets/img/values-1.png') }}" class="img-fluid" alt="">
              <h3>Speciality Title1</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('website/assets/img/values-2.png') }}" class="img-fluid" alt="">
              <h3>Speciality Title2</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('website/assets/img/values-3.png') }}" class="img-fluid" alt="">
              <h3>Speciality Title3</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

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
                <img src="{{ asset('website/assets/img/factory/factory-1.jpg') }}" class="img-fluid border" alt="">
              </div>
              <div class="col-lg-6">
                <img src="{{ asset('website/assets/img/factory/factory-2.jpg') }}" class="img-fluid border" alt="">
              </div>
              <div class="col-lg-6">
                <img src="{{ asset('website/assets/img/factory/factory-1.jpg') }}" class="img-fluid border" alt="">
              </div>
              <div class="col-lg-6">
                <img src="{{ asset('website/assets/img/factory/factory-2.jpg') }}" class="img-fluid border" alt="">
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Eos aspernatur rem</h3>
                </div>
              </div>

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Facilis neque ipsa</h3>
                </div>
              </div>

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Volup amet voluptas</h3>
                </div>
              </div>

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Rerum omnis sint</h3>
                </div>
              </div>

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Alias possimus</h3>
                </div>
              </div>
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
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.
                  <a href="{{ route('history') }}" style="font-size: 15px">See More</a>
                </p>
              </div><!-- End Tab 1 Content -->
  
              <div class="tab-pane fade show" id="tab2">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.
                  <a href="{{ route('activity') }}" style="font-size: 15px">See More</a>
                </p>
              </div><!-- End Tab 2 Content -->
            </div>
  
          </div>
  
          <div class="col-lg-6">
            <img src="{{ asset('website/assets/img/history.jpg') }}" class="img-fluid ms-lg-5 border border-3 custom-border" alt="">
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
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

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

    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p style="box-shadow: 0 1px 1px 0px #4154f147;">Frequently Asked Questions</p>
          <div class="btn-absolute text-center text-lg-start">
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
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
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>
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

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile">
                  <img src="{{ asset('website/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. 
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile">
                  <img src="{{ asset('website/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile">
                  <img src="{{ asset('website/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile">
                  <img src="{{ asset('website/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile">
                  <img src="{{ asset('website/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore
                </p>
              </div>
            </div><!-- End testimonial item -->

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
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('website/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('website/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('website/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('website/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

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
              <div class="swiper-slide">
                <img src="{{ asset('website/assets/img/clients/client-1.png') }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">Client Name</p>
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('website/assets/img/clients/client-2.png') }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">Client Name</p>
              </div>
               <div class="swiper-slide">
                <img src="{{ asset('website/assets/img/clients/client-3.png') }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">Client Name</p>
              </div>
               <div class="swiper-slide">
                <img src="{{ asset('website/assets/img/clients/client-4.png') }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">Client Name</p>
              </div>
               <div class="swiper-slide">
                <img src="{{ asset('website/assets/img/clients/client-5.png') }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">Client Name</p>
              </div>
               <div class="swiper-slide">
                <img src="{{ asset('website/assets/img/clients/client-6.png') }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">Client Name</p>
              </div>
               <div class="swiper-slide">
                <img src="{{ asset('website/assets/img/clients/client-7.png') }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">Client Name</p>
              </div>
               <div class="swiper-slide">
                <img src="{{ asset('website/assets/img/clients/client-8.png') }}" class="img-fluid mb-2" alt="">
                <p class="mb-0">Client Name</p>
              </div>
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
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('website/assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('website/assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('website/assets/img/blog/blog-3.jpg') }}" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

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