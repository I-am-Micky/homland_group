<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	 <link rel="icon" type="image/png" href="images/logohomeland.jpg"/>
	<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/absradio (2).png"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->

</head>



<body>
	

	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<h2>ADMIN-LOGIN</h2>

				<?php 


	 

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					
					include_once "homland/admin.php";

					//create user object 
					$obj = new Admin();

					//make use of login method 
					$login = $obj->adminLogin($_POST['email'], $_POST['password']);

					if ($login == true) {
						// redirect 
						header("Location:admindashboard.php");
						exit();
					}else{
						echo "<div class='alert alert-danger'>Invalid email address or password</div>";
					}


				}


				?>
				<form method="post" action="" class="form-control mb-5">
					<label class="form-label mt-2">Email:</label>
					<input type="text" name="email" id="email" class="form-control" style="border-left:5px solid yellow ">
					<label class="form-label mt-2">Password:</label>
					<input type="password" name="password" class="form-control" id="pass" style="border-left: 5px solid yellow;">

					<button type="submit" class="btn form-control mt-2" style="background-color:#f69314; color:white;" name="btnlogin">Login</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>