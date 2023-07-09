<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')
    @vite('resources/js/Admincompare.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
    <style>
        .text-wrap {
            position: relative;
            display: inline-block;
        }
        label{
            width:70px;
            height:20px;
        }
        .custom-file {
        position: relative;
        display: inline-block;
        }

        .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 100%;
        opacity: 0;
        }

        .text {
        border-radius: 6px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 10px;
        font-size: 13px;
        background-color: #584ee1;
        cursor: pointer;
        }
        .price{
            width: 88px;
            border-radius:5px; 
        }
    </style>
    <div id="mySidenav" class="sidenav">
		<p class="logo"><span>AutoWorld</span></p>
        <a href="/admin/car-list" class="icon-a"><i class="fa-solid fa-bars"></i> &nbsp;&nbsp;Dashboard</a>
		<a href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
		<a id="point" href="/admin/compare"class="icon-a"><i class="fa-solid fa-arrows-turn-to-dots"></i> &nbsp;&nbsp;Compare</a>
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
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Add Compare</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Add Compare</span>
        </div>
        <div class="clearfix"></div>
        </div>
        <div class="scrollable-table">
            <form action="{{ route('compare_cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
            <div class="custom-file">
                <input style="height: 40px;" type="file" name="imageUPLOAD" id="imageUPLOAD" class="custom-file-input" required>
                <label id="text" class="text" for="imageUPLOAD">Upload File</label>
              </div>
              
            </div>
            <br>
            <div class="form-row">
                
        <div style="display:flex;"class="all-post" id="create">
            <div class="post">                  
                <input type="text" name="image" id="image" class="form-control" style="display: none;" required>
                <label id="text" for="brands">Brands</label>
                <br>
                <select name="brands" id="brands" required>
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
                <label id="text" for="brands">CarName:</label>
                <br>
                <input style="height:35px" type="text" name="carName" id="carName" required>
                <br>
                <label id="text" for="color">Color:</label>
                <br>
                <select name="color" id="color" required>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Red">Red</option>
                    <option value="Brown">Brown</option>
                </select>                
                
                <br>
                <label id="text" for="body_style">Model Style:</label>
                <br>
                <select style="height:35px" name="body_style" id="body_style" required>
                    <option value="Sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                    <option value="Crossover">Crossover</option>
                    <option value="Pickup">Pickup</option>
                    <option value="MPV">MPV</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Coupe">Coupe</option>
                    <option value="Station wagon">Station wagon</option>
                </select>
            </div>
            <div class="post">
                <label id="text" for="engine_type">Engine Type:</label>
                <br>
                <select name="engine_type" id="engine_type">
                    <option value="Turbocharged Engine">Turbocharged Engine</option>
                    <option value="Twin-Turbocharged Engine">Twin-Turbocharged Engine</option>
                </select>
                <br>
                <label id="text" for="fuel">Fuel:</label>
                <br>
                <select name="fuel" id="fuel">
                    <option value="Gasoline">Gasoline</option>
                    <option value="Oil">Oil</option>
                </select>
                <br>
                <label id="text" for="year_of_manufacture">Year</label>
                <br>
                <select name="year_of_manufacture" id="year_of_manufacture">
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
                <label id="text" for="origin">Origin:</label>
                <br>
                <select name="origin" id="origin">
                    <option value="Japan">Japan</option>
                    <option value="Italia">Italia</option>
                    <option value="Germany">Germany</option>
                    <option value="USA">USA</option>
                </select>
            </div>
            <div class="post">
                <label id="text" for="transmission">Transmission:</label>
                <br>
                <select name="transmission" id="transmission" required>
                    <option value="automatic">Automatic</option>
                    <option value="manual">Manual</option>
                </select>
                <br>
                <label id="text" for="seating_capacity">Seating Capacity:</label>
                <br>
                <select name="seating_capacity" id="seating_capacity" required>
                    <option value="5">5</option>
                    <option value="7">7</option>
                </select>     
                <br>       
                <label id="text" for="number_of_doors">Number of Doors:</label>
                <br>
                <select name="number_of_doors" id="number_of_doors" required>
                    <option value="5">2</option>
                    <option value="7">4</option>
                </select>  
                <br>              
                <label id="text" for="origin">Price:</label>
                <br>
                <input class="price" style="height: 35px;" type="number" name="price" placeholder="Car Price" min="100000000" step="100000000" oninput="validateCarPrice(this)" required>
            </div>
        </div>
        <label id="text" for="Description">Description</label>
        <br>
        <div style="width: 70%;">
        <textarea class="note-editor"  name="description" id="summernote" required></textarea>
            <br>
            <button class="buttonSub" type="submit">Submit</button>
        </div>
    </div>

        </form>
    </div>

        <script>
            $(document).ready(function() {
              $('#summernote').summernote({
                height: 150,
                disableDragAndDrop: true,
                disableAutoParagraph: true,
                callbacks: {
                  onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    document.execCommand('insertText', false, bufferText);
                  },
                  onKeydown: function(e) {
                    if (e.keyCode === 13) {
                      document.execCommand('insertHTML', false, '<br/><br/>');
                      return false;
                    }
                  }
                }
              });
            });
        </script>
        <script>
            document.getElementById('imageUPLOAD').addEventListener('change', function(e) {
                var filename = e.target.files[0].name;
                document.getElementById('image').value = filename;
        
                // Update label text with selected file name
                var label = document.querySelector('.custom-file-label');
                label.textContent = filename;
            });
        </script>
</body>
</html>
