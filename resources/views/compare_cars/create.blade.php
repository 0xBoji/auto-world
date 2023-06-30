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
    <style>
        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
        }
        
        .form-row > * {
            flex-basis: calc(33.33% - 10px);
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>AutoWorld</span></p>
        <a  href="/admin/car-list" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a  href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
        <a id="point" href="/admin/compare"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Compare</a>
        <a href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Image</a>
        <a id="admin" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fa-solid fa-user-shield"></i>
            &nbsp; {{ Auth::user()->name }} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <span class="caret"></span>
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
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Add Compare</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Add Compare</span>
        </div>
        <div class="clearfix"></div>
        </div>
        <div class="scrollable-table">

        <form method="post" action="/create" enctype="multipart/form-data">
            @csrf
            <br>
            <label class="custom-upload" for="avatar">Choose a file</label>
            <input class="uploadfile" id="avatar" name="avatar" onchange="displayFileName(this)" type="file">
            <span class="file-name" id="file-name"></span>
          </form>
            <form action="{{ route('compare_cars.store') }}" method="POST">
            @csrf
            <script>
                function displayFileName(input) {
                    var fileName = input.files[0].name;
                    document.getElementById('carImage').setAttribute('value', fileName);
                }
            </script>
            <br>
            <div class="form-row">
            <label id="text" for="brands">Brands</label>
            <select name="brands" id="brands">
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
            <label id="text" for="body_style">Image</label>
            <input type="text" onchange="displayFileName(this)" name="image" id="carImage" required>
            <label id="text" for="body_style">Body Style:</label>
            <input type="text" name="body_style" id="body_style" required>
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
            <select name="origin" id="origin">
                <option value="Japan">Japan</option>
                <option value="Italia">Italia</option>
                <option value="Germany">Germany</option>
                <option value="USA">USA</option>
            </select>
            <label id="text" for="Description">Description</label>
            <br>
            <textarea class="note-editor" name="description" id="summernote"></textarea>
        </div>

            <br>
            <button class="buttonSub" type="submit">Submit</button>
    </div>

        </form>
    </div>

        <script>
            $(document).ready(function() {
              $('#summernote').summernote({
                height: 200,
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
</body>
</html>
