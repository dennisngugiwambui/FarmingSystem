<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Farm System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="{{asset('Homepage/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('Homepage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('Homepage/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('Homepage/css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid px-5 d-none d-lg-block">
    <div class="row gx-5 py-3 align-items-center">
        <div class="col-lg-3">
            <div class="d-flex align-items-center justify-content-start">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                <h2 class="mb-0">+25494834319</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex align-items-center justify-content-center">
                <a href="/" class="navbar-brand ms-lg-5">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Farm</span>System</h1>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="d-flex align-items-center justify-content-end">
                <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
    <a href="/" class="navbar-brand d-flex d-lg-none">
        <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farm</span>System</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Service</a>
            <a href="product.html" class="nav-item nav-link">Product</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="team.html" class="dropdown-item">The Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->


@yield('content')


@include('Homepage.footer')
<div class="container-fluid bg-dark text-white py-4">
    <div class="container text-center">
        <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold" href="/">ESSY</a></p>
        <br>Distributed By: <a class="text-secondary fw-bold" href="/">ESSY</a>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('Homepage/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('Homepage/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('Homepage/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('Homepage/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('Homepage/js/main.js')}}"></script>
</body>

</html>
