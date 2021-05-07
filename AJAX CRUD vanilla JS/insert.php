<?php

include 'connection.php';

// $data=stripslashes(file_get_contents("php://input"));
// $mydata=json_decode($data,true);
// var_dump($mydata);
// echo $mydata;

// $firstname=$mydata['firstname'];
// $lastname=$mydata['lastname'];
// $email=$mydata['email'];
// $mobile=$mydata['mobile'];


// Insert Data
//if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile)){
//	$sql="INSERT INTO tablecrud(firstname,lastname,email,mobile) VALUES('$firstname','$lastname','$email','$mobile')";
//	$res=mysqli_query($conn,$sql);

//	if ($res==TRUE) {
//		echo "Saved Successfully";
//		echo $data;
//		echo $mydata;
//	}else{
//		echo "Save Failed".$sql.mysqli_error($conn);
//	}
//}else{
//	echo "Fill All Fields";
//}


	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];

	$sql="INSERT INTO tablecrud(firstname,lastname,email,mobile) VALUES('$firstname','$lastname','$email','$mobile')";
	$res=mysqli_query($conn,$sql);

	if ($res) {
		echo "Saved Successfully";
		// echo $data;
		// echo $mydata;
	}else{
		echo "Save Failed".$sql.mysqli_error($conn);
	}


?>
