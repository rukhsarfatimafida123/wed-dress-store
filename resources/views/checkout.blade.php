@extends('layouts.app')

@section('content')
<div class="bg container">
    <!--For Row containing all card-->
    <div class="row mainRow">
        <!--Card 1-->
        <div class="col-sm-8">
            <div class="card card-cascade wider shadow p-3 mb-5 ">
                
               
                <!--Product Description-->
                <div class="desc p-3">
                    <div class="payment">
                        <form action="{{ url('place_order') }}" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input class="form-control" name="card_number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>CVC</label>
                                    <input class="form-control" name="cvc">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Expiry Date</label>
                                    <input class="form-control" name="expiry_date">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Cardholder Name</label>
                                    <input class="form-control" name="cardholder_name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" name="address">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="text-center btn"> Place Order &#8594; </button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="col-sm-4">
            <div class="card card-cascade card-ecommerce wider shadow p-3 mb-5 ">
                <!--Card Body-->
                <div class="card-body card-body-cascade">
                    <!--Card Description-->
                    @php($total = 0)
                    @foreach($user['cart_items'] as $item)
                    @php($total += $item['product']['price'] * $item['quantity'])
                    <div class="card2decs">
                        <p class="heading1"><strong>{{ $item['product']['name'] }}</strong></p>
                        <p class="quantity">Qty <span class="float-right text1">{{ $item['quantity'] }}</span></p>
                        <p class="subtotal">Subtotal<span class="float-right text1">RS:{{ $item['product']['price'] }}</span></p>
                    </div>
                    @endforeach
                    <p class="total"><strong>Total</strong><span class="float-right totalText1">RS:<span class="totalText2">{{ $total }}</span></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
