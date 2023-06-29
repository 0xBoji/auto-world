<!Doctype HTML>
<html>
<head>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')

	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    </style>
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
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; CompareCus</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; CompareCus</span>
</div>
</div>
	<div class="col-div-8">
		<div class="content-box">
            <a class="cssbuttons-io-button" href="{{ route('compare_cars.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg>
                <span>Add</span>
            </a>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Body style</th>
                    <th>Enginetype</th>
                    <th>YearOfManufacture</th>
                    <th>&nbsp;&nbsp; Transmission</th>
                    <th>SeatingCapacity</th>
                    <th>NumberOfDoors</th>
                    <th>Price</th>
                    <th>Origin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compareCars as $compareCar)
                <tr>
                    <td>{{ $compareCar->image }}</td>
                    <td>{{ $compareCar->body_style }}</td>
                    <td>{{ $compareCar->engine_type }}</td>
                    <td>&nbsp;&nbsp;&nbsp; {{ $compareCar->year_of_manufacture }}</td>
                    <td> &nbsp;&nbsp;{{ $compareCar->transmission }}</td>
                    <td>&nbsp;&nbsp;{{ $compareCar->seating_capacity }}</td>
                    <td>&nbsp;&nbsp;{{ $compareCar->number_of_doors }}</td>
                    <td>{{ $compareCar->price }}</td>
                    <td>{{ $compareCar->origin }}</td>

                    <td>
                        <br>
                        <a class="buttonn" href="{{ route('compare_cars.edit', $compareCar->id) }}"><svg class="svg-icon" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g stroke="#a649da" stroke-linecap="round" stroke-width="2"><path d="m20 20h-16"></path><path clip-rule="evenodd" d="m14.5858 4.41422c.781-.78105 2.0474-.78105 2.8284 0 .7811.78105.7811 2.04738 0 2.82843l-8.28322 8.28325-3.03046.202.20203-3.0304z" fill-rule="evenodd"></path></g></svg>
                            <span class="lablee">Edit</span></a></a>
                            <br>
                        <form action="{{ route('compare_cars.destroy', $compareCar->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tooltipp"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                              </svg>
                              <span class="lable2">Delete</span>
                            </button>
                        </form>
                        <br>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include other necessary scripts -->
</body>
</html>