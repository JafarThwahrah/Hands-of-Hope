<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HOPE - MEDICINE CHARITY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
            type="text/javascript"></script>

    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{asset('style/login.css')}}">


    @yield('style')
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    @yield('caontactStyle')
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('style/bootstrap.min.css')}}" rel="stylesheet">
    

    <!-- Template Stylesheet -->
    <link href="{{asset('style/style.css')}}" rel="stylesheet">
</head>

<body>

@php

    use App\Models\departments;
        $Department = departments::all();
@endphp

    <!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="/" class="navbar-brand"> <img
                    src="https://243515-1941852-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2015/05/Hands-of-Hope-logo.png"
                    alt="hope" width="200px" height="110px">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link ">Home</a>

                    <a href="/about" class="nav-item nav-link">About</a>
                    {{-- <a href="/product" class="nav-item nav-link">Medicine & Pharmacy</a> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Departments</a>
                        <div class="dropdown-menu m-0">
                            @foreach($Department as $department)

                                <a href="{{route('appointmentPage',$department['id'])}}"
                                   class="dropdown-item">{{$department['name']}}</a>
                            @endforeach


                        </div>
                    </div>

                    <a href="/donation" class="nav-item nav-link ">Donation</a>
                    <a href="/product" class="nav-item nav-link">Products</a>
                    @auth
                        <a href="/profile" class="nav-item nav-link">Profile</a>
                    @endauth
                    @guest
                        <!-- inser more links here -->
                        <span class="main-nav">
                            <a href="#0" class="nav-item nav-link cd-signup">Sign up</a>
                        </span>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

@include('loginform')
@yield('content')

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 py-5">
    <div class="container py-5">
        <div class="row ">
            <div class="col-lg-4 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    keep In Touch</h4>
                <p class="mb-4">we will be very happy to hear anything from you!</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Macca Street, Amman, Jordan</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>HandsOFHope@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>0777587017</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Quick Links</h4>
                <div class="d-flex flex-column justify-content">
                    <a class="text-light mb-2" href="/"><i class="fa fa-angle-right me-2"></i>Home</a>
                    <a class="text-light mb-2" href="/about"><i class="fa fa-angle-right me-2"></i>about</a>
                    <a class="text-light" href="/Contact"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Newsletter</h4>
                <form action="/" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" name="number" placeholder="07XXXXXXXX">
                        <button class="btn btn-primary">Subsicribe</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-light border-top border-secondary py-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0"> All Rights Reserved. &copy; <a class="text-primary" href="/">Hands of Hope</a>.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>


<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('js/login.js')}}"></script>


@yield('javascript')
<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
