<!-- s-->
<!Doctype HTML>
<html>
<head>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')

	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <style>
        .button-wrap {
            position: relative;
            display: inline-block;
        }
        input, select{
            border-radius: 10px;
        }
        .button {
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #584ee1;
            font-size: 16px;
            font-weight: 700;
            color: #fff;
            pointer-events: none;
        }

        .upload {
            opacity: 0;
            position: absolute;
            top: 0;            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        .custom-upload {
        display: inline-block;
        background-color: #e0e0e0;
        color: #333;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
        }

        .custom-upload:hover {
        background-color: #ccc;
        }

        .file-name {
        margin-top: 8px;
        }

        #text{
            color: #fffefe;
        }
        #text1{
            color:aliceblue;
        }
        #carImage{
            color:rgb(219, 0, 22);
        }
        .choosefile{
            margin-top: 0%;
            margin-left: 14.5%;
        }
    </style>
</head>


<body>
    <style>
        #logout {
        position: fixed;
        bottom: 0;
        }
        #admin {
            position: fixed;
            bottom: 59px;
        }
    
    
    
    </style>
    <script>
        function validateCarPrice(input) {
        const value = input.value.toString();
        if (value.length > 13) {
            input.setCustomValidity("Car Price must not exceed 13 digits");
        } else {
            input.setCustomValidity("");
        }
        }
        
    </script>
    
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>AutoWorld</span></p>
    <a id="point"  href="/admin/car-list" class="icon-a"><i class="fa-solid fa-bars"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
    <a href="/admin/compare"class="icon-a"><i class="fa-solid fa-arrows-turn-to-dots"></i> &nbsp;&nbsp;Compare</a>
    <a href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Logos</a>
    <a href="/admin/blog"class="icon-a"><i class="fa fa-book-open"></i> &nbsp;&nbsp;Add Blogs</a>
    <a id="admin" class="icon-a" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fa-solid fa-user-shield"></i>
        &nbsp; {{ Auth::user()->name }} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span class="caret"></span>
     </a>

     <div>
     <a class="icon-a" id="logout" href="{{ route('logout') }}"  onclick="event.preventDefault();
     document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
     </form>
     </div>
    </div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Edit Car</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Edit Car</span>
</div>
	

	<div class="clearfix"></div>
</div>
	<br/><br/>
	<div class="col-div-8">

        <form action="{{ route('car.update', ['id' => $car->id]) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="container">
                        <div class="row">
                            <br>
                                        <br>

                                    <div class="button-wrap">
                                        <label class="button" for="upload">Upload File <br></label>
                                        <input class="upload" id="carImageup" name="carImageup" type="file" required>
                                        <input class="upload" id="carImageup" name="carImageup" type="file" required>

                                    </div>
                                    <br>
                                    <br>
                                    <label id="text" for="carName">Car name:</label>
                                    <br>
                                    <input style="width:20%; height:35px" required type="text" name="carName" placeholder="Car Name">
                                    <br>
                                        <label id="text">ID Car:</label>
                                    <br>
                                    <input style="width:20%; height:35px" id="carID" required type="text" name="carID" placeholder="Car ID" pattern="\d+" maxlength="10">
                                    <br>
                                    <label  id="text" for="carBrand">Brand:</label>
                                    <br>
                                    <select style="width:20.5%; height:40px" name="carBrand" id="carBrand">
                                        <option value="Toyota">Toyota</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Bwm">Bwm</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Porsche">Porsche</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Mazda">Mazda</option>
                                    </select>
                                    <br>
                                    <label id="text" for="carPrice">Car Price:</label>
                                    <br>
                                    <input style="width: 20%; height: 35px;" type="number" name="carPrice" placeholder="Car Price" min="100000000" step="100000000" oninput="validateCarPrice(this)" required>
                                    <br>
                                    <label id="text" for="CarYear">Car Year:</label>
                                    <br>
                                        <!-- Thêm các tùy chọn khác -->
                                    <select style="width:20.5%; height:40px" name="carYear" id="CarYear">
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <!-- Thêm các tùy chọn khác -->
                                    </select>
                                    <br>
                                    <label id="text" for="carModel">Car Model:</label>
                                    <br>
                                    <select style="width:20.5%; height:40px" name="carModel" id="CarModel">
                                        <option value="Sedan">Sedan</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Crossover">Crossover</option>
                                        <option value="Pickup">Pickup</option>
                                        <option value="MPV">MPV</option>
                                        <option value="Hatchback">Hatchback</option>
                                        <option value="Coupe">Coupe</option>
                                        <option value="Station wagon">Station wagon</option>
                                        <!-- Thêm các tùy chọn khác -->
                                    </select>
                                    <br>
                                    
                                   
                                    <button class="buttonSub" type="submit">Submit!!!</button>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <br>
	    </div>
</div>
</body>
</html>



    
    


