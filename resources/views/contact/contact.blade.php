<!Doctype HTML>
<html>
<head>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')

	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>


<body>

	<style>
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
	
	
	
	
	</style>
	
	<div class="dropdown" style="background-color: rgb(27, 32, 61); margin-left: 96.5%">
		<a id="navbarDropdown" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
			{{ Auth::user()->name }}  <span class="caret"></span>
		</a>
	
		<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
			<a id="Btn" class="dropdown-item" href="{{ route('logout') }}"
			
			   onclick="event.preventDefault();
							 document.getElementById('logout-form').submit();">
				{{ __('Logout') }}
			   
			</a>
	
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
		</div>
	</div>
	
	<script>
		document.getElementById('navbarDropdown').addEventListener('click', function () {
			document.getElementById('navbarDropdown').parentNode.classList.toggle('show');
		});
	</script>
	
	
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>AutoWorld</span></p>
	<a  href="/admin/car-list" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
	<a id="point" href="/admin/contact"class="icon-a"><i class="fa fa-address-card"></i> &nbsp;&nbsp;ContactCus</a>
	<a href="/admin/compare"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Compare</a>
	<a  href="/admin/upload"class="icon-a"><i class="fa fa-image"></i> &nbsp;&nbsp;Add Image</a>
</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Customers</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Customers</span>
</div>
	

	<div class="col-div-6">
	<div class="profile">

		<p><span></span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>
	<div class="clearfix"></div>
	<br/>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Car List</p>
			<br/>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($contacts as $contact)
						<tr>
							<td>{{ $contact->name }}</td>
							<td>{{ $contact->email }}</td>
							<td>{{ $contact->subject }}</td>
							<td>{{ $contact->message }}</td>
							<td>
								<a href="{{ route('contact.edit', $contact->id) }}">Edit</a>
								<form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		
			<a href="{{ route('contact.create') }}">Create New Contact</a>
		</div>
	</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
