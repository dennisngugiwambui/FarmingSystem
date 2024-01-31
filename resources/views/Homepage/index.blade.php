@extends('Homepage.app')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('Homepage/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">Organic Vegetables</h3>
                            <h1 class="display-1 text-white mb-md-4">Organic Vegetables For Healthy Life</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('Homepage/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">What our system does?</h3>
                            <h1 class="display-1 text-white mb-md-4">We record farm products</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Production Recording System Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div class="bg-primary bg-crop d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Crop Production Records</h3>
                        <p class="text-white">Efficiently manage and record details of your organic crop production. Track quantities, dates, and more with our production recording system.</p>
                        <a class="text-white fw-bold" href="/home">Explore Crop Records<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary bg-livestock d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Livestock Production Records</h3>
                        <p class="text-white">Record and manage vital information about your livestock production. Keep track of breeds, quantities, and production dates seamlessly.</p>
                        <a class="text-white fw-bold" href="/home"">Explore Livestock Records<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Production Recording System Banner End -->



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



    <<!-- Project Statistics Start -->
    <div class="container-fluid bg-primary project-stats py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-database fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Data Entries</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">5000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Farmers Connected</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">1000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Completed Projects</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">200</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-heart fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Satisfied Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">200</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Statistics End -->

    <!-- Farming Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <h6 class="text-green-600 text-uppercase">Our Services</h6>
                        <h1 class="display-5">Integrated Farming Solutions</h1>
                    </div>
                    <p class="mb-4">Providing comprehensive and sustainable farming services. Our team is dedicated to delivering high-quality products and fostering agricultural excellence.</p>
                    <a href="#" class="btn btn-green-600 py-md-3 px-md-5">Contact Us</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-carrot display-1 text-green-600 mb-3"></i>
                        <h4>Fresh Vegetables</h4>
                        <p class="mb-0">We cultivate and deliver a variety of fresh and organic vegetables to promote healthy living.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-apple-alt display-1 text-green-600 mb-3"></i>
                        <h4>Fresh Fruits</h4>
                        <p class="mb-0">Enjoy a selection of naturally ripened fruits, picked at the peak of freshness for your delight.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-dog display-1 text-green-600 mb-3"></i>
                        <h4>Healthy Livestock</h4>
                        <p class="mb-0">We prioritize the well-being of our livestock, ensuring they are raised in healthy and humane conditions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-tractor display-1 text-green-600 mb-3"></i>
                        <h4>Modern Farm Equipment</h4>
                        <p class="mb-0">Utilizing state-of-the-art machinery to enhance efficiency and productivity in all our farming operations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-seedling display-1 text-green-600 mb-3"></i>
                        <h4>Sustainable Farming Plans</h4>
                        <p class="mb-0">We offer tailored farming plans that emphasize sustainable practices for long-term environmental and agricultural health.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Farming Services End -->




    <!-- System Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
                <h6 class="text-uppercase text-secondary">Key Features</h6>
                <h1 class="display-5 text-white">Why Choose Our Recording System?</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-database fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Data Integrity</h4>
                        <p class="mb-0">Ensure the integrity of your production data with our robust and secure recording system.</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-chart-bar fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Analytics Tools</h4>
                        <p class="mb-0">Unlock valuable insights with built-in analytics tools for in-depth analysis of your production metrics.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                        <p>Our production recording system provides an intuitive and user-friendly interface, ensuring seamless data entry and management. Track and monitor your production activities efficiently, supported by real-time visualizations and reports.</p>
                        <img class="img-fluid" src="{{asset('Homepage/img/production_feature.jpg')}}" alt="Production Recording System">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-clock fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Time Efficiency</h4>
                        <p class="mb-0">Save time and streamline your workflow with our modern and efficient production recording features.</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-life-ring fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Dedicated Support</h4>
                        <p class="mb-0">Our 24/7 support team is ready to assist you, ensuring a smooth experience with our recording system.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- System Features End -->


    <!-- User Testimonials Start -->
    <div class="container-fluid bg-testimonial py-5 my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel p-5">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="{{asset('Homepage/img/testimonial-1.jpg')}}" alt="Client Photo 1">
                            <p class="fs-5">Our production recording system has truly transformed the way we manage and analyze our agricultural data. The intuitive interface and powerful features have made our workflow seamless and efficient.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">John Doe, Farm Manager</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="{{asset('Homepage/img/testimonial-2.jpg')}}" alt="Client Photo 2">
                            <p class="fs-5">The analytics tools provided by the production recording system have given us valuable insights into our production metrics. It's a game-changer for anyone seeking data-driven decision-making in agriculture.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Jane Smith, Agricultural Scientist</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- User Testimonials End -->

    <!-- Our Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Meet Our Experts</h6>
                <h1 class="display-5">Dedicated Professionals Behind Our System</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('Homepage/img/team-1.jpg')}}" alt="Team Member 1">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">John Farmer</h4>
                                    <span class="text-white">Lead Agriculturalist</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('Homepage/img/team-2.jpg')}}" alt="Team Member 2">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Jane AgroExpert</h4>
                                    <span class="text-white">Agricultural Scientist</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('Homepage/img/team-3.jpg')}}" alt="Team Member 3">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Alex CropSpecialist</h4>
                                    <span class="text-white">Crop Management Expert</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team End -->






    <!-- Insights from the Field Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Field Insights</h6>
                <h1 class="display-5">Discover the Latest Updates from Our Production Records</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('Homepage/img/blog-1.jpg') }}" alt="Field Insights 1">
                        <a class="blog-overlay" href="#">
                            <h4 class="text-white">Optimizing Crop Yields Through Advanced Techniques</h4>
                            <span class="text-white fw-bold">Feb 15, 2024</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('Homepage/img/blog-2.jpg') }}" alt="Field Insights 2">
                        <a class="blog-overlay" href="#">
                            <h4 class="text-white">Effective Pest Control Strategies for Healthy Crops</h4>
                            <span class="text-white fw-bold">Feb 28, 2024</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('Homepage/img/blog-3.jpg') }}" alt="Field Insights 3">
                        <a class="blog-overlay" href="#">
                            <h4 class="text-white">Utilizing Technology in Farm Management</h4>
                            <span class="text-white fw-bold">Mar 10, 2024</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Insights from the Field End -->

@endsection
