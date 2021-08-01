@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ $row['image'] }}" class="img-fluid">
            </div>
            <div class="col-6">
                <p>Home</p>
                <h1>{{ $row['name'] }}</h1>
                <h4>RS: {{ $row['price'] }}</h4>
                <form action="{{ url('add_to_cart') }}" method="POST">
                    @csrf
                <input type="hidden" name="product_id" value="{{ $row['id'] }}">
                <input type="number" name="quantity" value="1"><br><br>
                @if (!Auth::check())
                    <a href="{{ route('login') }}" class="btn">Login</a>
                @else
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                    <button type="submit" name="buy_now" class="btn">Buy Now</button>
                @endif
            </form>
            </div>
            <div class="col-12">
                <h3>Product Details</h3>
                {{ $row['description'] }}
            </div>
        </div>
    </div>
@endsection
