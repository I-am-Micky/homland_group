<?php 
//class definition

class Common{
	//member variables


	//member functions


	public function sanitizeInputs($data){
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = addslashes($data);



		return $data;
	}

	//member functions
	public function UploadAnyFile($dest,$size,$ext){
		//create varaibles for file upload
	$filename = $_FILES['myfile']['name'];
	$filesize = $_FILES['myfile']['size'];
	$fileerror = $_FILES ['myfile']['error'];
	$file_type = $_FILES['myfile']['type'];
	$tmp_name = $_FILES['myfile']['tmp_name'];

	//check if file is uploaded and the file is okay
	if ($fileerror > 0) { 
		$uploadresponse['error'] = "You've not uploaded any file!";
		return $uploadresponse;
	}

	if ($filesize > $size) {
		$uploadresponse['error'] = "File cannot be more than $size";
		return $uploadresponse;
	}

	//pick the file type  by file extension
	$filename_arr = explode(".", $filename);
	$file_ext = end($filename_arr);

		//CHECK IF EXTENSION IS ALLOWED
	if (!in_array(strtolower($file_ext), $ext)) {
		$uploadresponse['error']= "File not allowed !";
		return $uploadresponse;
	}

			//DESTINATION FOLDER
	$newfilename = "ch".rand().time().".".$file_ext;
	$destination = $dest.$newfilename;

		//echeck if file uploaded

	if (move_uploaded_file($tmp_name, $destination)) {
		 $uploadresponse ['success'] = $newfilename;
		 return $uploadresponse;
	}else{
		$uploadresponse['error']= "Could not upload file !";
		return $uploadresponse;
	}

	}

}


?>