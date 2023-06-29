<!-- s-->
<!Doctype HTML>
<html>
<head>
    @vite('resources/js/app.js')
    @vite('resources/js/nav.js')

	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <style>
        #text{
            color: #e0b2b2;
        }
        #text1{
            color:aliceblue;
        }
        #carImage{
            color:rgb(219, 0, 22);
        }
        .choosefile{
            margin-top: 0%;
            margin-left: 30%;
        }
        .row{

            left: 10%;
        }
    </style>
</head>


<body>
	<br/>
	<div class="remake">
            <label id="text1" for=""> Admin login</label> 
			<br/>

            <form action="/login" method="POST">
                @csrf
                            <div class="container">
                    <div class="row">
                        <label for="username">Username:</label>
                        <br>
                        <input type="text" name="username" placeholder="Username">
                        <br>
                        <label for="password">Password:</label>
                        <br>
                        <input type="password" name="password" placeholder="Password">
                        <br>
                        <button type="submit">Login</button>
                    </div>
                </div>
            </form>
            
            
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>



    
    


