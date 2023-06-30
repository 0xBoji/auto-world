<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')
    @vite('resources/js/Admincompare.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>AutoWorld</span></p>
        <a  href="/admin/car-list" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a  href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
        <a id="point" href="/admin/compare"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Compare</a>
        <a href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Image</a>
        <a id="admin" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fa-solid fa-user-shield"></i>
            &nbsp; {{ Auth::user()->name }} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span class="caret"></span>
         </a>
 
         <div>
         <a id="logout" href="{{ route('logout') }}"  onclick="event.preventDefault();
         document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
         </form>
         </div>
    </div>
    <div id="main">
    
        <div class="head">
            <div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Edit Compare</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Edit Compare</span>
        </div>
        <div class="clearfix"></div>
        </div>
        <form method="post" action="/create" enctype="multipart/form-data">
            @csrf
            <script>
                function displayFileName(input) {
                    var fileName = input.files[0].name;
                    document.getElementById('carImage').setAttribute('value', fileName);
                }
            </script>
            <br>
            <label class="custom-upload" for="avatar">Choose a file</label>
            <input class="uploadfile" id="avatar" name="avatar" onchange="displayFileName(this)" type="file">
            <span class="file-name" id="file-name"></span>
          </form>
            <form action="{{ route('compare_cars.update', $compareCar->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label id="text" for="body_style">Image</label>
                <input type="text" name="image" onchange="displayFileName(this)" id="carImage" required>
                <label id="text" for="body_style">Car Model:</label>
                <select name="body_style" id="body_style">
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
                <label id="text" for="engine_type">Engine Type:</label>
            <select name="engine_type" id="engine_type">
                <option value="Turbocharged Engine">Turbocharged Engine</option>
                <option value="Twin-Turbocharged Engine">Twin-Turbocharged Engine</option>
            </select>
            <label id="text" for="fuel">Fuel:</label>
            <select name="fuel" id="fuel">
                <option value="Gasoline">Gasoline</option>
                <option value="Oil">Oil</option>
            </select>
                <label id="text" for="year_of_manufacture">Year</label>
                <select name="year_of_manufacture" id="year_of_manufacture">
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
                <label id="text" for="transmission">Transmission:</label>
                <select name="transmission" id="transmission">
                    <option value="automatic">automatic</option>
                    <option value="manual">manual</option>
                </select>
                <label id="text" for="seating_capacity">Seating Capacity:</label>
                <select name="seating_capacity" id="seating_capacity">
                    <option value="5">5</option>
                    <option value="7">7</option>
                </select>            
                <label id="text" for="number_of_doors">Number of Doors:</label>
                <select name="number_of_doors" id="number_of_doors">
                    <option value="5">2</option>
                    <option value="7">4</option>
                </select>                
                <label id="text" for="origin">Price:</label>
                <input type="text" name="price" id="origin" required>
                <label id="text" for="origin">Origin:</label>
                <input type="text" name="origin" id="origin" required>
                <button class="buttonSub" type="submit">Submit</button>
            </div>    
            </form>
            </div>
            </body>
            </html>
