<!DOCTYPE html>
<html>
<head>
    <title>Danh sách xe</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/js/jquery.magnify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.min.css">
</head>
<body>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
    
        .dropdown .dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 70px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
    
        .dropdown.show .dropdown-menu {
            display: block;
        }
    
        .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
        }
        #navbarDropdown {
            color:rgb(247,64,59);
            text-decoration: none;
        }
        #logout {
        position: fixed;
        bottom: 0;
        }
        #admin {
            position: fixed;
            bottom: 59px;
        }
        .scrollable-table {
            max-height: 600px; /* Chiều cao tối đa của bảng */
            overflow: auto; /* Tạo thanh cuộn khi nội dung vượt quá chiều cao */
        }
        .search-add-container {
    display: flex;
    align-items: center;
        }
        .container-input {
        position: relative;
        }

        .input {
        width: 150px;
        padding: 10px 0px 10px 40px;
        border-radius: 9999px;
        border: solid 1px #333;
        transition: all .2s ease-in-out;
        outline: none;
        opacity: 0.8;
        }
        .container-input{
            left:20px;
        }

        .container-input svg {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translate(0, -50%);
        }

        .input:focus {
        opacity: 1;
        width: 250px;
        }
        #searchInput{
            height: 25px;
        }

    </style>
<div id="mySidenav" class="sidenav">
	<p class="logo"><span>AutoWorld</span></p>
    <a href="/admin/car-list" class="icon-a"><i class="fa-solid fa-bars"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
    <a href="/admin/compare"class="icon-a"><i class="fa-solid fa-arrows-turn-to-dots"></i> &nbsp;&nbsp;Compare</a>
    <a id="point"  href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Logos</a>
    <a href="/admin/blog"class="icon-a"><i class="fa fa-book-open"></i> &nbsp;&nbsp;Add Blogs</a>
    <a id="admin" class="icon-a" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fa-solid fa-user-shield"></i>
        &nbsp; {{ Auth::user()->name }} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span class="caret"></span>
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
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Details</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Details</span>
</div>
<div class="col-div-6">
</div>
	<br/><br/>
  <div class="col-div-8">
            <br/>
            <br>                
            <style>
                .zoom {
                    cursor: zoom-in;
                    transition: transform 0.2s;
                }

                .zoom:hover {
                    transform: scale(2);
                    z-index: 1000;
                }

                img{
                    width: 200px;
                    height: 200px;
                    border-radius: 0px;
                }
            </style>    
            <h1 style="color:white">Logo Details:</h1>
            <table class="table mt-3">
                <tbody>
                    <tr>
                        <th>ID:</th>
                        <th >Image Logo:</th>
                        <th>Brand</th>
                    </tr>
                    <tr>
                          
                        <td>{{ $uploadLogo->id }}</td>
                        <td>
                            @php
                            $image = str_replace('D:\\xampp\\tmp\\', '', $uploadLogo->image);
                            @endphp
                            <div>
                                <img class="zoom" src="{{ asset('uploadLogo/'. $image) }}">
                            </div>
                        </td>
                        <td>{{ $uploadLogo->brand }}</td>
                    </tr>
                </tbody>
            </table>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                  var image = document.querySelector(".zoom");
              
                  $(image).magnify({
                    zoomRatio: 2,
                    zoomViewDistance: 10,
                    zoomViewOffset: { x: 10, y: 0 },
                    zoomViewSize: { width: 400, height: 400 },
                    zoomCaption: true
                  });
                });
              </script>
              
          
    </body>
    </html>