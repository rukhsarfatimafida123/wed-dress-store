<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheWedRobe</title>
    <link rel="stylesheet" href="{{ asset('home.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png">

</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}"  height="80" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              </li>
              <li class="nav-item">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </li>
          </ul>
          <div class="form-inline my-2 my-lg-0">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                @if (!Auth::check())
                <a class="nav-link" href="{{ route('login') }}">Login</a>
                @else
                <form action="{{url('logout')}}" method="post"> 
                    @csrf() 
                    <button class="btn" type="submit"><i class="fa fa-power-off"></i> Logout</button>
                </form>
                @endif
            </div>
        </div>
      </nav>
      <!-- header end -->
    @yield('content')
  

    
    
  
    
 
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS moblie phone</p>
                    <div class="app-logo">
                        <img src="{{ asset('images/play.png') }}">
                        <img src="{{ asset('images/app.png') }}">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{ asset('images/logo.png') }}">
                    <p>Our purpose is to sustainbly make the pleasure and benifits of Online Shopping to many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li class="fa fa-facebook-square"> Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021-TheWedRobe.com</p>
        </div>
    </div>
    <!-- js for toggle menu -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>