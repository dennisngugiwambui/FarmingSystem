@extends('Homepage.app')

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">About Us</h1>
                    <a href="/" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="/about" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Weather Start -->
    <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                        <img class="img-fluid mt-auto mx-auto" src="{{asset('Homepage/img/weather.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5">Empowering Farmers for Sustainable Agriculture</h1>
                    </div>
                    <p class="mb-4">Our mission is to empower farmers and enhance sustainable agriculture practices. We believe in providing farmers with the tools and information they need to make informed decisions, ultimately leading to higher yields and healthier crops. </p>
                    <div class="row gx-5 gy-4">
                        <div class="col-sm-6">
                            <i class="fa fa-seedling display-1 text-secondary"></i>
                            <h4>Weather-Informed Agriculture</h4>
                            <p class="mb-0">Our platform provides farmers with real-time weather information to help them plan and manage their agricultural activities more effectively.</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-award display-1 text-secondary"></i>
                            <h4>Award-Winning Recognition</h4>
                            <p class="mb-0">We recognize and celebrate the dedication and hard work of farmers through annual awards, honoring those who contribute significantly to the agricultural community.</p>
                        </div>
                    </div>
                    <!-- Explore Button -->
                    <a href="/weather" class="btn btn-primary mt-4">Explore weather</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Weather End -->

    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-leaf fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Years of Agriculture</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">10</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Farm Specialists</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">50</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check-circle fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Completed Projects</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">100</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-smile fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">200</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


@endsection
