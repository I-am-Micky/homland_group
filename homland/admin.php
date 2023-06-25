<?php 
include_once "homland/constant.php";
include_once "homland/common.php";


class Admin{
	public $admin_email;
	public $admin_password;

	public $conn; //database connection handler 

	//functions 

	function __construct(){
		$this->conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASENAME);
	}


	//login 
	public function adminLogin($email,$password){
		//prepare statement 

		$stmt = $this->conn->prepare("SELECT * FROM admin WHERE EMAIL_ADDRESS =?");

		//bind parameter 
		$stmt->bind_param("s", $email);

		//execute 
		$stmt->execute();

		//get result 

		$result = $stmt->get_result();

		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();

			//check if password match
			if (password_verify($password, $row['PASSWORD'])) {
				// create session variables
				// session_start();
				$_SESSION['ADMIN_ID'] = $row['ADMIN_ID'];

				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	//end of login

	//begin add properties 


	function addProp($title,$location,$size,$price,$description,$publisher){


		//prepare statement 

		$stmt= $this->conn->prepare("INSERT INTO properties(TITLE,LOCATION,SIZE,PRICE,DESCRIPTION,ADMIN_ID,PICTURES)VALUES(?,?,?,?,?,?,?)");

		//allowed file extentions
		$ext = array('jpg','png','jpeg','gif','jfif');
		//create common  object 
		$obj = new Common;

		$picture = $obj->UploadAnyFile("images/",2097152,$ext);

		if (array_key_exists('success', $picture)) {


			$filename = $picture['success'];
			

			//bind parameter 
			$stmt->bind_param("sssisis",$title,$location,$size,$price,$description,$publisher,$filename);
			//execute

			$stmt->execute();

			if ($stmt->affected_rows == 1 ) {
				return true;

			}else{
				return $stmt->error;
			}
		}else{
			return $picture['error'];
		}

	}


	//end add properties 

	//begin delete properties 

		function deleteNews($id){
		$stmt= $this->conn->prepare("DELETE FROM properties WHERE PROP_ID=?");
		$stmt->bind_param("i",$id);
		//execute

			$stmt->execute();

			//check if record was deleted

			if ($stmt->affected_rows ==1) {
				//redirect to list clubs
				$msg = "News  was successfully deleted!";
				header("location:admindashboard.php?m=$msg");
				exit;
			}else{
				$msg = "Oops! could not delete News record.";
				header("location:admindashboard.php?info=$msg");
				exit;
			}

	}


	//end delete properties 

//begin upadate properties

	function UpdateProp($title,$price,$location,$size,$description){


		//prepare statement 

		$stmt= $this->conn->prepare("UPDATE properties SET TITLE=?,PRICE=?,LOCATION=?,SIZE=?,DESCRIPTION=? WHERE PROP_ID=?");

		//allowed file extentions
		$ext = array('jpg','png','jpeg','gif','jfif');
		//create common  object 
		$obj = new Common;

		$picture = $obj->UploadAnyFile("images/",2097152,"$ext");

		if (array_key_exists('success', $picture)) {


			$filename = $picture['success'];
			

			//bind parameter 
			$stmt->bind_param("sssiss",$title,$price,$location,$size,$description,$filename);
			//execute

			$stmt->execute();

			if ($stmt->affected_rows == 1 ) {
				return true;

			}else{
				return $stmt->error;
			}
		}else{
			return $picture['error'];
		}

	}

	//end update properties

		//begin logout

			function logout(){
				session_start();
				session_destroy();

				//redirect to login
				header("location:login.php");
			}


			//end logout

				//begin get pub

		 function getPub(){
	 	//prepare statement 
	 	$stmt = $this->conn->prepare("SELECT * FROM admin ");

	 	//execute 
	 	$stmt->execute();;

	 	//get results 
	 	$result = $stmt->get_result();

	 	$records = array();

	 	if ($result->num_rows > 0) {
	 		//looping through 
	 		while ($row = $result->fetch_assoc()) {
	 			$records[] = $row;
	 		}
	 	}


	 	return $records;


	}



	//end get pub 


// begin get prop

		function Prop(){
			$stmt = $this->conn->prepare("SELECT * FROM properties");
			//execute
			$stmt->execute();
			//get result
			$result = $stmt->get_result();
			$records =array();


			 if ($result->num_rows > 0) {
			 	// loop through
			 	while($row = $result->fetch_assoc()){
			 		$records[] = $row;
			 	}
			 }
			 return $records;
		}

	//end get prop

		//begin fetch prop

				function getProp($propid){
			//prepare statement 

			$stmt = $this->conn->prepare("SELECT * FROM properties WHERE PROP_ID =? ");
			//bind sttatement
			$stmt->bind_param("i",$news_id);

			//execute
			$stmt->execute();

			//get result 
			$result = $stmt->get_result();
			return $result->fetch_assoc();
		}
		//end fetch prop


}

?>