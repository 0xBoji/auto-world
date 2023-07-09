<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- thư viện search icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/styles1.css') }}" rel="icon">
    <link href="{{ asset('css/blog.css') }}" rel="icon">

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
     <nav class="navbar navbar-expand-lg bg-dark navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset('img/W-removebg-preview.png') }}" alt="" style="height:250px; margin-top: 20px; width: 70%;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="cars/cars.html" class="nav-item nav-link">Cars</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="financialsupport.html" class="dropdown-item active">Financial Support</a>
                        <a href="warranty.html" class="dropdown-item">Warranty Policy</a>
                        <a href="partnerdirectory.html" class="dropdown-item">Partner Directory</a>
                    </div>
                </div>
                <a href="blog" class="nav-item nav-link active">Blog</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Compare<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <br>
                <h1 class="display-3 text-white mb-3 animated slideInDown">Blog & News</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item" ><a href="about.html">About</a></li>
                        <li class="breadcrumb-item"><a href="cars/cars.html">Cars</a></li>
                        <li class="breadcrumb-item"><a href="financialsupport.html">Services</a></li>
                        <li class="breadcrumb-item text-danger active" aria-current="page">Blog</li>
                        <li class="breadcrumb-item"><a href="contact.html">Contact</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<style>
    #blog {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    }
    img{
        width:250px;
        height:250px;
    }
    .box {
    display: grid;
    grid-template-columns: auto 1fr;
    grid-gap: 10px;
    align-items: start;
    }

    .box img {
    grid-row: 1 / span 2;
    }

    .box h3 {
    grid-column: 2;
    margin-bottom: 0px; /* Khoảng cách dưới tiêu đề */
    }

    .box p {
    grid-column: 2;
    margin-top: 0px; /* Khoảng cách trên nội dung */
    }

    .box a.blog-btn {
    grid-column: 2;
    margin-top: 10px;
    }



</style>
    <!-- blog section -->
        <section class="blog" id="blog">
                <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5 v1">
                    <h2 class="m-0" style="color:#a80000"></i> AutoWorld</h2>
                </a>
                <p class="fontt">Auto World is one of the reputable and quality car information <br>
                     and car buying and selling sites in Vietnam</p>
        </section>
        <section class="blog" id="news" style="margin-top: 50px;margin-left: 230px;">
            <!-- blog container -->
            <div class="blog-container container" id="blog-container">
                <div class="box">
                    <h3 class="box-title">{{ $blog->title }}</h3>
                    <p>{{ $blog->content }}</p>
                </div>
            </div>
            <div id="pagination-container"></div>
        </section>
    
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
                            <a href="">Home</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
</body>

</html>