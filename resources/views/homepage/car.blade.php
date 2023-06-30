<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- thư viện search icon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('css/style1.css') }}" rel="stylesheet">
    <link href="{{asset('css/phantrang.css') }}" rel="stylesheet">
    <link href="{{asset('js/jquery-3.6.3.min.js') }}" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="../..//tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- cars css -->
    <link href="{{asset('css/Cars.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('ccs/blog.css')}}">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
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
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>36/5 D5.Bình Thạnh.TPHCM</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>24/7 Operation</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
<small>+84338165083</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/profile.php?id=100024459408325"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://twitter.com/?lang=vi"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/nguyendo.t/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="../index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{asset('img/W-removebg-preview.png')}}" alt="" style="height:250px; margin-top: 20px; width: 70%;">
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
                        <div id="search-test1" >
                            <a href="car1.html">
                                <div ng-repeat="x in names | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car2.html">
                                <div ng-repeat="x in names1 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car3.html">
                                <div ng-repeat="x in names2 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car4.html">
                                <div ng-repeat="x in names3 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car5.html">
                                <div ng-repeat="x in names4 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car6.html">
                                <div ng-repeat="x in names5 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car7.html">
                                <div ng-repeat="x in names6 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car8.html">
                                <div ng-repeat="x in names7 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car9.html">
                                <div ng-repeat="x in names8 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>
                            <a href="car10.html">
                                <div ng-repeat="x in names9 | filter:test" id="search-test" ng-if="test!=''">
                                    {{ x }}
                                </div>
                            </a>                                                       
                        </div>
                    </div>
                </div>
                <a href="../index.html" class="nav-item nav-link">Home</a>
                <a href="../about.html" class="nav-item nav-link">About</a>
                <a href="" class="nav-item nav-link active">Cars</a>
                <div class="nav-item dropdown">
                    <a href="../service.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="../financialsupport.html" class="dropdown-item active">Financial Support</a>
                        <a href="../warranty.html" class="dropdown-item">Warranty Policy</a>
                        <a href="../partnerdirectory.html" class="dropdown-item">Partner Directory</a>
                    </div>
                </div>
                <a href="../blog.html" class="nav-item nav-link">Blog</a>
                <a href="../contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Compare<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../../img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <br>
                <h1 class="display-3 text-white mb-3 animated slideInDown">Cars</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="../about.html">About</a></li>
<li class="breadcrumb-item text-danger active" aria-current="page">Cars</li>
                        <li class="breadcrumb-item"><a href="../financialsupport.html">Services</a></li>
                        <li class="breadcrumb-item"><a href="../blog.html">Blog</a></li>
                        <li class="breadcrumb-item"><a href="../contact.html">Contact</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!--Card section -->
    <section class="parts card-content" id="parts" >
        <div class="heading">
            <span class="carsfont fontt">All Cars</span>
            <h2 class="carsh2 fontt">Information about vehicles</h2>
        </div>
        <!-- parts container -->
        <div class="card">
            <div class="parts-container container" >
                <div class="row" id="myDIV">
                    <!-- box1 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/civic.jpg" alt="">
                        <h3><a href="car1.html">Honda Civic Type R 2023 (Limited)</a></h3>
                        <i class='bx bxs-star'>(15 Review)</i>
                        <a href="car1.html" class="details">View Details</a>
                    </div>
                    <!-- box2 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/audiden.jpg" alt="">
                        <h3><a href="car2.html">Audi A7 2023</a></h3>
                        <i class='bx bxs-star'>(13 Review)</i>
                        <a href="car2.html" class="details">View Details</a>
                    </div>
                    <!-- box3 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/bmw.jpg" alt="">
                        <h3><a href="car3.html">BMW 320i Sport 2023</a></h3>
                        <i class='bx bxs-star'>(7 Review)</i>
                        <a href="car3.html" class="details">View Details</a>
                    </div>
                    <!-- box4 --> 
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/Ford-Everest-3.jpg" alt="">
                        <h3><a href="car4.html">Ford Everest 2023</a></h3>
                        <i class='bx bxs-star'>(12 Review)</i>
                        <a href="car4.html" class="details">View Details</a>
                    </div>
                </div>
            </div>
            <div class="parts-container container" >
                <div class="row" id="myDIV">
                    <!-- box5 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/hyundaiac.jpg" alt="">
                        <h3><a href="car5.html">Hyundai Accent 2023</a></h3>
                        <i class='bx bxs-star'>(8 Review)</i>
                        <a href="car5.html" class="details">View Details</a>
                    </div>
                    <!-- box6 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/toyotacr.jpg" alt="">
                        <h3><a href="car6.html">Toyota Camry 2023</a></h3>
                        <i class='bx bxs-star'>(10 Review)</i>
                        <a href="car6.html" class="details">View Details</a>
                    </div>
                    <!-- box7 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/nis.jpg" alt="">
                        <h3><a href="car7.html">Nissan Maxima 2023</a></h3>
                        <i class='bx bxs-star'>(26 Review)</i>
                        <a href="car7.html" class="details">View Details</a>
                    </div>
                    <!-- box8 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/po911.jpg" alt="">
                        <h3><a href="car8.html">Porche Panamera 4S Executive</a></h3>
                        <i class='bx bxs-star'>(5 Review)</i>
                        <a href="car8.html" class="details">View Details</a>
                    </div>
                </div>
            </div>
            <div class="parts-container container" >
                <div class="row" id="myDIV">
                    <!-- box9 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/suzuki.jpg" alt="">
                        <h3><a href="car9.html">Suzuki XL7 2023</a></h3>
                        <i class='bx bxs-star'>(10 Review)</i>
                        <a href="car9.html" class="details">View Details</a>
                    </div>
                    <!-- box10 -->
                    <div class="box col-md-3">
                        <img id="heght" src="../../img/maz6.jpg" alt="">
                        <h3><a href="car10.html">Mazda 6 2023</a></h3>
                        <i class='bx bxs-star'>(14 Review)</i>
                        <a href="car10.html" class="details">View Details</a>
                    </div>
                    <!-- box11
                    <div class="box col-md-3" id="carList">
                        <img id="heght" src="img/maz6.jpg" alt="">
                        <h3><a href="#"></a></h3>
                        <i class='bx bxs-star'></i>
                        <a href="#" class="details"></a>
                    </div>
                    box12
                    <div class="box col-md-3" id="carList">
                        <img id="heght" src="img/maz6.jpg" alt="">
                        <h3><a href="#">${car.carName}</a></h3>
                        <i class='bx bxs-star'></i>
                        <a href="#" class="details"></a>
                    </div> -->
                </div>
            </div>
            
        </div>
            
               
    </section>
    <div class="wrapper">
        <ul>
            <li class="btn"><i class="fas fa-angle-left"></i></li>
            <li class="numb"><span>1</span></li>
            <li class="numb active"><span>2</span></li>
            <li class="numb"><span>3</span></li>
            <li class="btn"><i class="fas fa-angle-right"></i></li>
        </ul>
    </div>
      

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
                    <a class="btn btn-link" href="../financialsupport.html">Financial Support</a>
                    <a class="btn btn-link" href="../warranty.html">Insurance/warranty Policy </a>
                    <a class="btn btn-link" href="../partnerdirectory.html">Partner Directory</a>
                    <a class="btn btn-link" href="../contact.html">Online Counseling</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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
                            <a href="../index.html">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
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

  

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js') }}"></script>
    <script src="{{asset('js/mainn.js') }}"></script>
</body>

</html>