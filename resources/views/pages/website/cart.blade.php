@extends('layouts.website', ['pageName' => 'cart'])
@section('web-content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{route('home')}}">Home</a></li>
      <li> Cart </li>
    </ol>
    <h2>Shopping Cart</h2>

  </div>
</section><!-- End Breadcrumbs -->


{{-- Shopping Cart --}}
<section id="cart" class="cart">
    <div class="container" data-aos="fade-up">
      <!-- Feature Tabs -->
      <div class="row" data-aos="fade-up">
        <div class="col-lg-8 table-responsive mb-4">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary font-md text-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Add</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle font-sm">
                    @foreach ($cartItems as $item)
                    <tr>
                        <td class="align-middle"><img src="{{ asset($item->attributes['image']) }}" alt="" style="width: 50px; height: 50px; border-radius: 50%">{{ $item->name }}</td>
                        <td class="align-middle">{{ $item->price }}/-</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-mod-primary btn-minus" >
                                        <i class="bi bi-dash-lg"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-mod-secondary text-center" value="{{ $item->quantity }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-mod-primary btn-plus">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">{{ $item->price }}/-</td>
                        <td class="align-middle">
                            <a href="" class="btn btn-sm btn-mod-primary">Add</a>
                        </td>
                        <td class="align-middle"><a href="{{ route('cart.remove', $item->id) }}" class="btn btn-sm btn-mod-primary"><i class="bi bi-x-lg"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-4">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold font-md m-0">Cart Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium font-sm">Subtotal</h6>
                        <h6 class="font-weight-medium font-sm">tK. {{ \Cart::getSubTotal()}}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium font-sm">Shipping</h6>
                        <h6 class="font-weight-medium font-sm">tk. 60</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold font-md">Total</h5>
                        <h5 class="font-weight-bold font-md">tk. {{\Cart::getTotal() + 60}}</h5>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="{{ route('checkout') }}" class="btn btn-primary btn-sm my-3 py-2">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('web-js')
  <script src="{{ asset('website/assets/vendor/jquery-3.6.0.min.js') }}"></script>
  <script>
      // Product Quantity
      $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });
  </script>
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
  