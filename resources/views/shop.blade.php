@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url('images/sd.jpg');">
        <div class="container text-center">
            <h1 class="display-4">SHOP</h1>
        </div>
    </div>
    <div class="container" >
        <div class="row" >
            <div class="col-3">
                <h2> Categories</h2>
                <ul>
                @foreach($categories as $category)

                    <li>
                        <a href="#">{{ $category['name'] }}</a> <br>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-9">
                <div class="row">
                @foreach($list['data'] as $row)

                    <div class="col-4 hover-pointer" onclick="window.location.href = '{{ url('details/'.$row['id']) }}';">
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ $row['image'] }}" class="img-fluid" style="min-height: 200px;">
                        </div>
                        <h4>{{ $row['name'] }}</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>RS:{{ $row['price'] }}</p>
                    </div>
                    @endforeach
               
                </div>
                {{ $list['pagination'] }}
            </div>
        </div>

    </div>
@endsection
