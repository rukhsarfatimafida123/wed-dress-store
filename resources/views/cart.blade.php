@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url('images/sd.jpg');">
    <div class="container text-center">
        <h1 class="display-4">CART</h1>
    </div>
</div>

<div class="px-4 px-lg-0">
  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                  @php($sum = 0)
                  @foreach ( $list as $row )
                   @php($sum += @$row['product']['price'] * @$row['quantity'] )   
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="{{ @$row['image'] }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{ @$row['product']['name'] }}</a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>RS: {{ @$row['product']['price'] }}</strong></td>
                  <td class="border-0 align-middle"><strong>{{ @$row['quantity'] }}</strong></td>
                  <td class="border-0 align-middle"><a href="{{ url('/remove_cart/'.$row['id']) }}" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>RS: {{ $sum }}</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>RS:0</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>RS:0</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">RS: {{ $sum }}</h5>
              </li>
            </ul><a href="{{ url('/checkout') }}" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
