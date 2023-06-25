		<?php 
		include_once "homland/admin.php";

		session_start();


		?>


		<!-- begin add news -->
<?php   
					
					if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['btnadd'])) {

								if (empty($_POST['title'])) {
		
		$errors['title'] = "Title Cannot be Empty!";

		
	}

	if (empty($_POST['name'])) {
		
		$errors['name'] = "Name Cannot be Empty!";

		
	}


	if (empty($_POST['price'])) {
		
		$errors['price'] = "Price Cannot be Empty!";

		
	}

	if (empty($_POST['location'])) {
		
		$errors['location'] = "Location Cannot be Empty!";

		
	}
	if (empty($_POST['size'])) {
		
		$errors['size'] = "Size Cannot be Empty!";

		
	}

	if (empty($_POST['description'])) {
		
		$errors['description'] = "Description Cannot be Empty!";

		
	}

	if (empty($errors)) {
		// code...

		include_once "homland/common.php";

		$cmobj = new Common;
		$title=($_POST['title']);
		$name=($_POST['name']);
		$price=($_POST['price']);
		$location=($_POST['location']);
		$size=($_POST['size']);
					$description =($_POST['description']);


	

	$obj = new Admin();
			

			//reference

			$output = $obj->addProp($title,$location,$size,$price,$description,$name);


			//check if Successful 
			if ($output == true ) {
				// code...

				$msg =" News Was Successfully Uploaded ";

				//redirect

				header("Location:admindashboard.php?m=$msg");
				exit();
			}else{
				$errors[] = "OOPS! Could Not Upload News".$output;
			}

		}




					}





			
	












	



?>




		<!-- End add news  -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
		<!-- CK EDITOR -->
<script src="ckeditor/ckeditor.js"></script>
	 <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	 <link rel="icon" type="image/png" href="images/logohomeland.jpg"/>
   	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<style type="text/css">

	.body{
	overflow-x: ;
	overflow-y:;
/*		width: 100%;*/



	}
	html{
/*		width: 100%;*/
	}

		.banner{
				background-color:#f69314;
				background-image: url("images/logohomeland.jpg");
				background-attachment: fixed;
				background-repeat:repeat;
				/*background-size: cover;*/
				width: 100%;
				
			}
			.overlay{
				background-color: rgba(0,0, 0, 0.5);
				
			}
			h2{color: white;}
			.cl11 {color: #fff;}
			.cl10 {color: #fff;}
			.bg2 {background-color: #0076c8;}
			.bg11 {background-color: #151515;}
			.img{
				width: 100% !important;
				height: 100% !important;
			}
</style>





<body class="" >
	<div class="container-fluid">
<div class="row body">
				<div class="col banner">
					<div class="row">
						<div class="col overlay">

							<header>

									<div class="container" >
			<div class="row" style=" background-color: white;">
				<div class="col-4" style="border:1px solid #ccc;">
				<img src="images/logohomeland.jpg " class="img-fluid py-2 " >	
				</div>

				<div class="col-8" style="text-align: center ; border:1px solid #ccc; ">
					<h4 class="m-2" style="font-family: tahoma;font-weight: bold; color:#f69314; ">HOMLAND GROUP</h4>
				</div>
			</div>
		</div>



</header>
<div  class="container">
		<div class="row">
			<div class="col">
	<?php if (isset($_REQUEST['m'])){?>


        <div class="alert alert-dismissible alert-success mt-3">

          <?php echo $_REQUEST['m'];?>
            	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>

        <?php

        }?>

        <?php if (isset($_REQUEST['e'])){?>


       <div class="alert alert-dismissible alert-danger mt-3">
          <?php echo $_REQUEST['e'];?>
           
        	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>

        <?php

        }?>

      </div>
    </div>
  </div>

	<div class="container mt-2">
		 <?php 
            if (!empty($errors)){
                echo "<ul class='alert alert-danger'>";
                foreach($errors as $key => $value){
                  echo "<li>$value</li>";
                }
                echo "</ul>";
            }
          ?>
		<div class=row>
			<div class="col-4">
					

				<!-- <p>
					<button type="button" class="btn btn-warning mb-1 form-control" name="addprop"  id="addprop" style="font-size:14px;">
						ADD PROPERTIES
					</button>

				</p> -->
				<p>

				<button name="addadmin" type="button" class="btn btn-warning mb-1 form-control" id="addadmin" style="font-size:14px;">ADD-ADMIN</button>

				</p>
			

				<p>

				<button name="allprop" type="button" class="btn btn-success  mb-1 form-control" id="allprop" style="font-size:14px;">ALL PROPERTIES</button>

				</p>

				<p>

				<button name="contact" type="button" class="btn btn-danger  mb-1 form-control" id="contact" style="font-size:14px;">CONTACT</button>

				</p>

					<p>

				<button name="subscribers" type="button" class="btn btn-primary  mb-1 form-control" id="subscribers" style="font-size:14px;">SUBSCRIBERS</button>

				</p>


			</div>

			<div class="col-8">
						
						<div class="container">
							<div class="row">
								<div class="col">
									<h2>ADD PROPERTIES</h2>


									<form method="post" action="" class="form-control mb-2" enctype="multipart/form-data">

											<div class="control-group form-group">
						<div class="controls">
					<label class="form-label  ">Title: <span style="color:red; font-size: 16px;">*</span></label>
					<input type="text" name="title" class="form-control" id="title">
				</div>
			</div>


				<!-- admin center -->
				<div class="control-group form-group">
						<div class="controls">
					<label class="form-label">Publisher Name: <span style="color:red; font-size: 16px;">*</span></label>
					<select class="form-select" name="name" id="name" >
			<option>Select Publisher</option>
			<?php

			include_once "homland/admin.php";

			//create object 

			$obj = new Admin();

			//make Reference 
			$role = $obj->getPub();

			if (count($role)>0) {
				foreach ($role as $key => $value) {
					// code...
				
				$role_id = $value['ADMIN_ID'];
				$role_name = $value['EMAIL'];

				echo "<option value='$role_id'>$role_name</option>";
			}
		}


			?>

		</select>
				</div>
			</div>


			<!-- price -->
				<div class="control-group form-group">
						<div class="controls">
					<label class="form-label  ">Price: <span style="color:red; font-size: 16px;">*</span></label>
					<input type="text" name="price" class="form-control" id="price">
				</div>
			</div>

			<!-- location -->

				<div class="control-group form-group">
						<div class="controls">
					<label class="form-label  ">Location: <span style="color:red; font-size: 16px;">*</span></label>
					<input type="text" name="location" class="form-control" id="location">
				</div>
			</div>

			<!-- size -->
				<div class="control-group form-group">
						<div class="controls">
					<label class="form-label  ">Size: <span style="color:red; font-size: 16px;">*</span></label>
					<input type="text" name="size" class="form-control" id="size">
				</div>
			</div>

			<!-- Picture -->

				<div class="control-group form-group mt-2">
            <div class="controls">
              <label>Featured Image: <span style="color:red; font-size: 16px;">*</span></label>
              <input type="file" class="form-control" id="emblem1" name='myfile'>
              
            </div>
          </div>

          	<!-- Description -->
          	<label class="form-label">Description: <span style="color:red; font-size: 16px;">*</span></label>
          <textarea name="description" rows="5" cols="50" class="form-control " id="description" style="resize: none;">
          	

          </textarea>

            	<button type="submit" class="btn btn-success form-control mt-2" name="btnadd" id="btnadd" > POST PROPERTY </button>




										
									</form>
								</div>
							</div>
						</div>

			</div>
		</div>
	</div>


</div>
</div>
</div>
</div>
</div>

<footer class="">
			<div class="container-fluid " style="background-color: #f69314;">
			
				<div class="row">
		


					</div> 
					<div style="color:white; text-align: center;">Copyright &copy; HOMLAND-GROUP 2023</div>
						
				</div>
			</div>
			</div>
</div>
</div>


		</footer>
	


<script>                              
// Initialize CKEditor

CKEDITOR.replace('description',{

  width: "100%",
  height: "200px"

}); 
</script>

</body>
</html>