<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AutoWorld</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Brand Menu Box CSS -->
    <link href="{{asset('css/elkit-public.css') }}" rel="stylesheet">
    <link href="{{asset('js/bootstrap.min.js')}}" rel="stylesheet">
    <link href="{{asset('js/directorypress-public.js')}}" rel="stylesheet">
    <link href="{{asset('js/frontend.min.js')}}" rel="stylesheet">
    <link href="{{asset('css/motoropro-dynamic.css')}}" rel="stylesheet">
    <link href="{{asset('css/post-3714.css')}}" rel="stylesheet">
    <link href="{{asset('css/post-9026.css')}}" rel="stylesheet">
    <link href="{{asset('css/common.css')}}" rel="stylesheet">
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">
    
    <!-- Cars CSS -->
    <link href="{{asset('css/Cars.css')}}" rel="stylesheet">
    <!-- thư viện search icon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primaddress-showroom ary me-2"></small>
                    <small>35/6 D5 street, Binh Thanh district</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primaddress-showroom ary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 12.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primaddress-showroom ary me-2"></small>
                    <small>+84 778067776</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light shadow sticky-top p-0">
        <a href="/homepage" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
           <img src="{{ asset('img/W-removebg-preview.png') }}" alt="" style="height:250px; margin-top: 20px; width: 70%;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <!-- nút search -->
                <i class='bx bx-search' id="search-icon"></i>
                <div class="search-box container">
                <div ng-app="myApp" ng-controller="namesCtrl">
                    <p><input type="search" ng-model="test" class="searchh" id="myInput" placeholder="search here..."></p>
                    </div>
                </div>
                <a href="homepage" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="cars/cars.html" class="nav-item nav-link">Cars</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="financialsupport.html" class="dropdown-item active">Financial Support</a>
                        <a href="warranty.html" class="dropdown-item">Warranty Policy</a>
                        <a href="partnerdirectory.html" class="dropdown-item">Partner Directory</a>
                    </div>
                </div>
                <a href="blog.html" class="nav-item nav-link">Blog </a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/compare" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Compare<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-bg-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h3 class="text-uppercase mb-3 animated slideInDown" style="color: #800000;"><i class="fa fa-car me-3"></i>AutoWorld</h3>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">We'll Bring You The Best Services</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{asset('img/carousel-1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-bg-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h3 class=" text-uppercase mb-3 animated slideInDown" style="color: #800000;"><i class="fa fa-car me-3"></i>AutoWorld</h3>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">We'll Bring You The Best Services</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('img/carousel-2.png') }}" alt="">
                                </div>
                            </div>
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


    <!-- Service Start -->
        <div class="container">
            <h3 class="popularfont">Popular Makes</h3>
            <div id="directorypress-category-6025" class="cat-style-5">
                <div class="row directorypress-categories-wrapper clearfix" id="menubox">
                    @php $count = 0; @endphp
                    @foreach($uploadLogos as $uploadLogo)
                        @if($count % 5 == 0)
                            </div>
                            <div class="row directorypress-categories-wrapper clearfix" id="menubox">
                        @endif
                
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="directorypress-category-item address-showroom">
                                <div class="directorypress-category-holder clearfix">
                                    <div class="directorypress-parent-category">
                                        <a href="#">
                                            <span class="cat-icon">
                                                <img class="directorypress-field-icon" src="{{ asset('uploadLogo/'. $uploadLogo->image) }}">
                                            </span>
                                            {{ $uploadLogo->brand }}
                                            <span class="categories-count"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        @php $count++; @endphp
                    @endforeach
                </div>
                

            </div>
            </div>		
            </div>
            </div>
                </div>
                </div>
                        </div>
                </section>
            </div>
        </div>
    
    <!-- Service End -->


    <!-- cars Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <section class="cars" id="cars">
                    <div class="heading">
                        <span class="carsfont" style="color:white">Best Seller in 2022</span>
                        <h2 class="carsh2" style="color:white"></h2>
                    </div>
                    <div class="cars-container container">
                        <div class="box">
                            <img id="kicks" src="{{ asset('img/car1.jpg') }}">
                            <h2> Toyota Vios</h2>
                        </div>
                        <div class="box">
                            <img id="kicks" src="{{ asset('img/car2.jpg') }}">
                            <h2>Mitsubishi Xpander</h2>
                        </div>
                        <div class="box">
                            <img id="kicks" src="{{ asset('img/car3.jpg') }}">
                           <h2>Ford Ranger</h2>
                        </div>
                        <div class="box">
                            <img id="kicks" src="{{ asset('img/car4.jpg') }}">
                            <h2>Honda City</h2>
                        </div>
                        <div class="box">
                            <img id="kicks" src="{{ asset('img/car5.jpg') }}">
                            <h2>Kia Seltos</h2>
                        </div>
                        <div class="box">
                            <img id="kicks" src="{{ asset('img/car6.jpg') }}">
                            <h2>Mazda CX-5</h2>
                        </div>

                    </div>
                    <button id="nut"><a href="best_seller.html">View All >></a></button>
                </section>
            </div>
        </div>
    </div>
    <!-- end cars -------- -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check  fa-2x text-white mb-3"></i>
                    <h2 class="text-whaddress-showroom ite mb-2 text-white" data-toggle="counter-up">30</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-whaddress-showroom ite mb-2 text-white" data-toggle="counter-up">4</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-whaddress-showroom ite mb-2 text-white" data-toggle="counter-up">2000</h2>
                    <p class="text-white mb-0">Satisfied Clients +</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-whaddress-showroom ite mb-2 text-white" data-toggle="counter-up">1000</h2>
                    <p class="text-white mb-0">Cars Sold +</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-dollar-sign fa-2x me-3"></i>
                            <h4 class="m-0">Financial Support</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Insurance/warranty Policy</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-user-alt fa-2x me-3"></i>
                            <h4 class="m-0">Partner Directory</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-headphones-alt fa-2x me-3"></i>
                            <h4 class="m-0">Online Counseling</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/service-1.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Financial Support</h3>
                                    <p class="mb-4">Auto World supports loans for the purpose of buying cars</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Low interest rates</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Simple profile</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Friendly staff</p>
                                    <a href="financialsupport.html" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/baohanh.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Warranty Policy</h3>
                                    <p class="mb-4">Auto World has many attractive warranty programs for many different types of vehicles</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Abundant, diverse</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Warranty up to 5 years</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Free consultation</p>
                                    <a href="warranty.html" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/service-3.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Partner Directory</h3>
                                    <p class="mb-4">Auto World connects with many businesses across the country</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality partners and enterprises</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Prestige</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="partnerdirectory.html" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/service-4.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Online Counseling</h3>
                                    <p class="mb-4">Auto World always supports online consultation for you</p>
                                    <p><i class="fa fa-check text-success me-3"></i>24/24 Support</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Friendly counselor</p>
                                    <p><i class="fa fa-check text-success me-3"></i>High level of qualification</p>
                                    <a href="contact.html" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Showroom auto start -->
    
    <!-- showroom auto End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team-1.jpg') }}" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team-2.jpg') }}" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team-3.jpg') }}" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team-4.jpg') }}" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-ciaddress-showroom rcle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-ciaddress-showroom rcle p-2 mx-auto mb-3" src="{{ asset('img/testiaddress-showroom monial-2.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-ciaddress-showroom rcle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-ciaddress-showroom rcle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>35/6 D5 street, Binh Thanh district</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 778067776</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Autoworld@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 12.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 5.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="financialsupport.html">Financial Support</a>
                    <a class="btn btn-link" href="warranty.html">Insurance/warranty Policy </a>
                    <a class="btn btn-link" href="partnerdirectory.html">Partner Directory</a>
                    <a class="btn btn-link" href="contact.html">Online Counseling</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Don't hesitate to contact us if you have any problem.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">AutoWorld</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="/contact">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
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
    <script src="{{asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js') }}"></script>
    <script src="{{asset('js/home.js') }}"></script>
</body>

</html>