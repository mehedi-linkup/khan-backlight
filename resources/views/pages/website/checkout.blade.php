@extends('layouts.website', ['pageName' => 'cart'])
@section('web-content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{route('home')}}">Home</a></li>
      <li> Checkout </li>
    </ol>
    <h2>Checkout</h2>

  </div>
</section><!-- End Breadcrumbs -->

{{-- Shopping Cart --}}
<section id="checkout" class="checkout">
    <div class="container" data-aos="fade-up">
      <!-- Feature Tabs -->
      <div class="row" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="mb-4">
              <h4 class="font-weight-semi-bold mb-3">Billing Address</h4>
              <div class="row font-sm">
                  <div class="col-md-6 form-group">
                      <label>Full Name</label>
                      <input class="form-control form-control-sm" name="name" type="text" placeholder="You Name">
                  </div>
                  <div class="col-md-6 form-group">
                      <label>E-mail</label>
                      <input class="form-control form-control-sm" name="email" type="email" placeholder="example@email.com">
                  </div>
                  <div class="col-md-6 form-group">
                      <label>Mobile No</label>
                      <input class="form-control form-control-sm" name="phone" type="phone" placeholder="+880171 456 7891">
                  </div>
                  <div class="col-md-6 form-group">
                      <label>Address Line 1</label>
                      <input class="form-control form-control-sm" type="text" placeholder="123 Street">
                  </div>
                  <div class="col-md-6 form-group">
                      <label>Address Line 2</label>
                      <input class="form-control form-control-sm" type="text" placeholder="123 Street">
                  </div>
                  <div class="col-md-6 form-group">
                      <label>Division</label>
                      <select name="division" class="form-select form-select-sm">
                          <option selected>Dhaka</option>
                          <option>Rajshahee</option>
                          <option>Chittagong</option>
                          <option>Khulna</option>
                      </select>
                  </div>
                  <div class="col-md-6 form-group">
                      <label>City</label>
                      <input class="form-control form-control-sm" name="city" type="text" placeholder="Your City">
                  </div>
                  <div class="col-md-6 form-group">
                      <label>Area</label>
                      <input class="form-control form-control-sm" name="area" type="text" placeholder="Local Area">
                  </div>
                  <div class="col-md-6 form-group">
                      <label>ZIP Code</label>
                      <input class="form-control form-control-sm" type="text" placeholder="1209">
                  </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="card border-secondary mb-3">
            <div class="card-header bg-secondary border-0">
                <h4 class="font-weight-semi-bold m-0 font-lg">Order Total</h4>
            </div>
            <div class="card-body">
                <h5 class="font-weight-medium mb-3 font-md">Products</h5>
                <div class="d-flex justify-content-between">
                    <p class="font-sm">Colorful Stylish Shirt 1</p>
                    <p class="font-sm">$150</p>
                </div>
                {{-- <div class="d-flex justify-content-between">
                    <p class="font-sm">Colorful Stylish Shirt 2</p>
                    <p class="font-sm">$150</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="font-sm">Colorful Stylish Shirt 3</p>
                    <p class="font-sm">$150</p>
                </div> --}}
                <hr class="mt-0">
                <div class="d-flex justify-content-between mb-3 pt-1">
                    <h6 class="font-weight-medium font-sm">Subtotal</h6>
                    <h6 class="font-weight-medium font-sm">$150</h6>
                </div>
                <div class="d-flex justify-content-between">
                    <h6 class="font-weight-medium font-sm">Shipping</h6>
                    <h6 class="font-weight-medium font-sm">$10</h6>
                </div>
            </div>
            <div class="card-footer border-secondary bg-transparent">
                <div class="d-flex justify-content-between mt-2">
                    <h5 class="font-weight-bold font-md">Total</h5>
                    <h5 class="font-weight-bold font-md">$160</h5>
                </div>
            </div>
        </div>
        <div class="card border-secondary mb-3">
          <div class="card-header bg-secondary border-0">
              <h4 class="font-weight-semi-bold m-0 font-lg">Payment</h4>
          </div>
          <div class="card-body font-sm">
              <div class="form-group">
                  <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="payment" id="paypal">
                      <label class="custom-control-label" for="paypal">Paypal</label>
                  </div>
              </div>
              <div class="form-group">
                  <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                      <label class="custom-control-label" for="directcheck">Direct Check</label>
                  </div>
              </div>
              <div class="">
                  <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                      <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                  </div>
              </div>
          </div>
          <div class="card-footer border-secondary bg-transparent" style="padding: 0.2rem 1.25rem;">
              <button class="btn btn-lg btn-block btn-primary font-weight-bold my-2 py-1 font-md">Place Order</button>
          </div>
      </div>
      </div>
    </div>
  </section>
@endsection
