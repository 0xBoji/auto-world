<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AutoWorld</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- template CSS -->
    
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('js/bootstrap.min.js')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Compare CSS -->
    <link href="{{asset('css/compare.css') }}" rel="stylesheet">

    <!-- thư viện search icon -->
    <link href="../img/favicon.ico" rel="icon">
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
    <style> img{
        width:50px;
        height: 50px;
    }</style>






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
                    <small>35/6 D5 street, Binh Thanh district</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 12.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+84 778067776</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="../img/W-removebg-preview.png" alt="" style="height:250px; margin-top: 20px; width: 70%;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="cars/cars.html" class="nav-item nav-link">Cars</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="financialsupport.html" class="dropdown-item">Financial Support</a>
                        <a href="warranty.html" class="dropdown-item active">Warranty Policy</a>
                        <a href="partnerdirectory.html" class="dropdown-item">Partner Directory</a>
                    </div>
                </div>
                <a href="blog.html" class="nav-item nav-link">Blog</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Compare<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <br>
                <h1 class="display-3 mb-3 animated slideInDown" style="color: #a80000;">Compare Cars</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Compare Start -->
    <div class="container-xxl service py-5">
        <div class="container backgroundwhite">
            <div class="wrap-main-page">
                <div class="block pb15">
                    <div class="box-content">
                        <table class="table table-striped">
                        <table cellpadding="0" cellspacing="0" class=" tbl-ger tbl-compare-form">
                            <tbody>
                                <form action="" method="post">
                                    <table>
                                        <!-- CHỌN HÃNG XE -->
                                        <tr>
                                            <td rowspan="3" width="25%" style="text-transform: uppercase;">
                                                <h4 class="table-title">Comparations</h4>
                                              </td>
                                              <td style="width:317px;">
                                                <select class="form-sosanh" id="brandname1" onchange="filterCarNames(1)">
                                                  <option>Choose a Brand</option>
                                                  @php
                                                  $uniqueBrands = [];
                                                  @endphp
                                                  @foreach($comparelist as $compareCar)
                                                    @if(!in_array($compareCar->brands, $uniqueBrands))
                                                      @php
                                                      $uniqueBrands[] = $compareCar->brands;
                                                      @endphp
                                                      <option>{{ $compareCar->brands }}</option>
                                                    @endif
                                                  @endforeach
                                                </select>
                                              </td>
                                              <td style="width:317px;">
                                                <select class="form-sosanh" id="brandname2" onchange="filterCarNames(2)">
                                                  <option>Choose a Brand</option>
                                                  @php
                                                  $uniqueBrands = [];
                                                  @endphp
                                                  @foreach($comparelist as $compareCar)
                                                    @if(!in_array($compareCar->brands, $uniqueBrands))
                                                      @php
                                                      $uniqueBrands[] = $compareCar->brands;
                                                      @endphp
                                                      <option>{{ $compareCar->brands }}</option>
                                                    @endif
                                                  @endforeach
                                                </select>
                                              </td>
                                              <td style="width:317px;">
                                                <select class="form-sosanh" id="brandname3" onchange="filterCarNames(3)">
                                                  <option>Choose a Brand</option>
                                                  @php
                                                  $uniqueBrands = [];
                                                  @endphp
                                                  @foreach($comparelist as $compareCar)
                                                    @if(!in_array($compareCar->brands, $uniqueBrands))
                                                      @php
                                                      $uniqueBrands[] = $compareCar->brands;
                                                      @endphp
                                                      <option>{{ $compareCar->brands }}</option>
                                                    @endif
                                                  @endforeach
                                                </select>
                                              </td>
                                              
                                        </tr>
                                        <!-- Chọn loại xe -->
                                        <tr>
                                            <td style="width:317px;">
                                                <select class="form-sosanh" id="carname1" onchange="displayCarDetails(1)">
                                                    <option>Choose Car Name</option>
                                                </select>
                                            </td>
                                            <td style="width:317px;">
                                                <select class="form-sosanh" id="carname2" onchange="displayCarDetails(2)">
                                                    <option>Choose Car Name</option>
                                                </select>
                                            </td>
                                            <td style="width:317px;">
                                                <select class="form-sosanh" id="carname3" onchange="displayCarDetails(3)">
                                                    <option>Choose Car Name</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                
                              
                                
                            </tbody>
                        </table>
                    </table>

                    </div>
                    <div class="home-box-main-full have-tab">
                        <div class="box-title">
                            <ul class="seven_tabs">
                                <li>
                                    <h2 class="sevenMainTitle white-color">
                                        <a href="#tab-car-2">Fundamental Information</a>
                                    </h2>
                                </li>
                            </ul>
                        </div>
                        <div class="box-content seven_tab_content mt10" id="tab-car-2" style="display: block;">
                            <table class="" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td width="25%">
                                            <div class="othongso">
                                                <table width="100%" cellspacing="0" class="tbl-ger tbl-body-compare">
                                                    <tbody>
                                                        <tr style="height:140px">
                                                            <td class="alleft">Car Image</td>   
                                                        </tr>

                                                        <tr>
                                                            <td class="alleft">Price</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alleft">Origin</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="alleft">Model</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alleft">Car Manufacture Year</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alleft">Car Color</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alleft">Number Of Doors</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alleft">Number Of Seats</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alleft">Transmission</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="alleft">Engine Type</td>
                                                        </tr>


                                                        <tr>
                                                            <td class="alleft">Fuel</td>
                                                        </tr>

                                                        <tr style="height: 200px">
                                                            <td class="alleft">Description</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>

                                        <td width="25%">
                                            <div class="othongso" id="coban1">
                                                <table width="100%" cellspacing="0" class="tbl-ger tbl-body-compare">
                                                    <tr>
                                                    <tr style="height:140px">
                                                        <td class="image1" align="center">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="price1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="origin1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="model1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="carmanufactureyear1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="carcolor1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="numberofdoors1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="numberofseats1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="transmission1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="enginetype1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="fuel1" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr style="height: 200px">
                                                        <td class="description1">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>

                                        <td width="25%">
                                            <div class="othongso" id="coban2">
                                                <table width="100%" cellspacing="0" class="tbl-ger tbl-body-compare">
                                                    <tr>
                                                    <tr style="height:140px">
                                                        <td class="image2" align="center">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="price2" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="origin2" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="model2" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="carmanufactureyear2" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="carcolor2" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="numberofdoors2" align="center">&nbsp;</td>
                                                    </tr>

                                                   <tr>
                                                        <td class="numberofseats2" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="transmission2" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="enginetype2" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="fuel2" align="center">&nbsp;</td>
                                                    </tr>


                                                    <tr style="height: 200px">
                                                        <td  class="description2">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                        <td width="25%">
                                            <div class="othongso" id="coban3">
                                                <table width="100%" cellspacing="0" class="tbl-ger tbl-body-compare">
                                                    <tr>
                                                    <tr style="height:140px">
                                                        <td class="image3" align="center">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="price3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="origin3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="model3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="carmanufactureyear3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="carcolor3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="numberofdoors3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="numberofseats3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="transmission3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="enginetype3" align="center">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="fuel3" align="center">&nbsp;</td>
                                                    </tr>


                                                    <tr style="height: 200px">
                                                        <td class="description3">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var compareList = <?php echo json_encode($comparelist); ?>;
    var filteredCars1 = [];
    var filteredCars2 = [];
    var filteredCars3 = [];

function filterCarNames(selectNumber) {
  var brandSelect = document.getElementById('brandname' + selectNumber);
  var carSelect = document.getElementById('carname' + selectNumber);

  if (!brandSelect || !carSelect) {
    console.error('Missing brandSelect or carSelect element');
    return;
  }

  var selectedBrand = brandSelect.value;

  switch (selectNumber) {
    case 1:
      filteredCars1 = compareList.filter(function (car) {
        return car.brands === selectedBrand;
      });
      updateCarSelect(carSelect, filteredCars1);
      break;
    case 2:
      filteredCars2 = compareList.filter(function (car) {
        return car.brands === selectedBrand;
      });
      updateCarSelect(carSelect, filteredCars2);
      break;
    case 3:
      filteredCars3 = compareList.filter(function (car) {
        return car.brands === selectedBrand;
      });
      updateCarSelect(carSelect, filteredCars3);
      break;
    default:
      console.error('Invalid selectNumber');
      break;
  }
}

function updateCarSelect(carSelect, filteredCars) {
  carSelect.innerHTML = '<option>Choose Car Name</option>';

  filteredCars.forEach(function (car) {
    var option = document.createElement('option');
    option.text = car.carName;
    carSelect.add(option);
  });
}

function displayCarDetails(selectNumber) {
  var carSelect = document.getElementById('carname' + selectNumber);
  var carDetails = document.getElementById('coban' + selectNumber);

  if (!carSelect || !carDetails) {
    console.error('Missing carSelect or carDetails element');
    return;
  }

  var selectedCarName = carSelect.value;
  var selectedCar;

  switch (selectNumber) {
    case 1:
      selectedCar = filteredCars1.find(function (car) {
        return car.carName === selectedCarName;
      });
      break;
    case 2:
      selectedCar = filteredCars2.find(function (car) {
        return car.carName === selectedCarName;
      });
      break;
    case 3:
      selectedCar = filteredCars3.find(function (car) {
        return car.carName === selectedCarName;
      });
      break;
    default:
      console.error('Invalid selectNumber');
      break;
  }

  if (selectedCar) {
    carDetails.querySelector('.image' + selectNumber).innerHTML = '<img src="../uploadCompare/' + selectedCar.image + '" alt="Car Image">';
    carDetails.querySelector('.price' + selectNumber).textContent = selectedCar.price;
    carDetails.querySelector('.origin' + selectNumber).textContent = selectedCar.origin;
    carDetails.querySelector('.model' + selectNumber).textContent = selectedCar.carName;
    carDetails.querySelector('.carmanufactureyear' + selectNumber).textContent = selectedCar.year_of_manufacture;
    carDetails.querySelector('.carcolor' + selectNumber).textContent = selectedCar.color;
    carDetails.querySelector('.numberofdoors' + selectNumber).textContent = selectedCar.number_of_doors;
    carDetails.querySelector('.numberofseats' + selectNumber).textContent = selectedCar.seating_capacity;
    carDetails.querySelector('.transmission' + selectNumber).textContent = selectedCar.transmission;
    carDetails.querySelector('.enginetype' + selectNumber).textContent = selectedCar.engine_type;
    carDetails.querySelector('.fuel' + selectNumber).textContent = selectedCar.fuel;
    carDetails.querySelector('.description' + selectNumber).textContent = selectedCar.description;
  } else {
    carDetails.querySelector('.image' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.price' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.origin' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.model' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.carmanufactureyear' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.carcolor' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.numberofdoors' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.numberofseats' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.transmission' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.enginetype' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.fuel' + selectNumber).innerHTML = '&nbsp;';
    carDetails.querySelector('.description' + selectNumber).innerHTML = '&nbsp;';
  }
}
    </script>
      
        
    
      
      
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
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js') }}"></script>
</body>

</html>