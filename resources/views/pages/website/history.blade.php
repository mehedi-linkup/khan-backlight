@extends('layouts.website')
@section('web-content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{route('home')}}">Home</a></li>
      <li> History </li>
    </ol>
    <h2>Our History</h2>

  </div>
</section><!-- End Breadcrumbs -->

{{-- Our History --}}
<section id="history" class="history">
    <div class="container" data-aos="fade-up">
      <!-- Feature Tabs -->
      <div class="row history-tabs" data-aos="fade-up">
        <div class="col-lg-12">
          <img src="{{ asset('website/assets/img/history.jpg') }}" class="img-fluid ms-lg-5 border border-3 custom-border float-end" style="width: 45%" alt="">
          <h3>Histories of Our Company</h3>
          <!-- Tabs -->
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
              <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
            </div><!-- End Tab 1 Content -->
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
  