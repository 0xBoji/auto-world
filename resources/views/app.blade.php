<html>
<head>
    @vite('resources/js/app.js')
    {{-- @vite('resources/js/nav.js') --}}

	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>



<body>
	<style>
		
		.container {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        width: 100%;
      }
      input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 10px;
        left: 8px;
        font-size: 17px;
        color: #b8b8b8;
      }
      .button-wrap {
        position: relative;
      }
      .button {
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 5px;
        background-color: rgb(88,78,225);
        font-size: 16px;
        font-weight: bold;
        color: #fff;
      }

		.dropdown {
			position: relative;
			display: inline-block;
			height:35px;
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
	
		.dropdown:hover .dropdown-menu {
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
		#navbarDropdown{
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
	<a href="/admin/compare"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Compare</a>
	<a id="point" href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Image</a>
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
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Add Images</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Add Images</span>
	</div>
		<div class="col-div-6">
		<div class="profile">
		</div>
		</div>
		<div class="clearfix"></div>
		</div>
	<div class="col-div-8">
			<br/>
			<br>
<!-- resources/views/app.blade.php -->
			<form method="post" action="/admin/upload" enctype="multipart/form-data">
				@csrf
				<div class="container">
					<div class="button-wrap">
					<label class="button" for="upload">Upload File <br></label>
					<input id="upload" name="avatar" type="file">
					</div>
				</div>  
				<br>	
				<button type="submit">Upload!</button>
			</form>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>	
</html>
