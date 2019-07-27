<?php
require 'function.php';

if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//cek username 
	if( mysqli_num_rows($result) === 1 ) {

		//cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"]) ) {
			header("Location : home.php");
			exit;
		}

	}

	$error = true;
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<div class="container">

		 <div class="navlog">
		 	<form action="" method="post" class="form-inline" >
			  <div class="form-group mb-2">
			    <label for="username" class="sr-only">Username</label>
			    <input type="text" class="form-control" id="username" name="username" placeholder="Username...">
			  </div>
			  <div class="form-group mx-sm-3 mb-2">
			    <label for="password" class="sr-only">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password..">
			  </div>
			  <button type="submit" name="login" class="btn btn-primary mb-2">Login</button>
			</form>
		 	
		 </div> 

		 <div class="jumbotron">
			  <h1 class="welcome">WELCOME TO <br> SMK MUHAMMADIYAH PENCONGAN</h1>
			  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>




			  <hr class="my-4">
			  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
			  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</div>
		 
		
	</div>

</body>
</html>