<?php
include 'connection.php';

//stripslashes function can be used to clean up data retrieved from a database or from an HTML form

//php://input - This is a read-only stream that allows  us to read raw data from the request body. It returns all the raw data after the HTTP-headers of the request, regardless of the content type

//json_decode - It takes JSON string and converts it into a PHP object or array, if true then associative array

$data=stripslashes(file_get_contents("php://input"));
$mydata=json_decode($data,true);
$firstname=$mydata['fn'];
$lastname=$mydata['ln'];
$email=$mydata['email'];
$mobile=$mydata['mobile'];

if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile)){
	$sql="INSERT INTO tablecrud(firstname,lastname,email,mobile) VALUES('$firstname','$lastname','$email','$mobile')";
	$res=mysqli_query($conn,$sql);

	if ($res) {
		echo "Saved Successfully";
	}else{
		echo "Save Failed";
	}
}else{
	echo "Fill All Fields";
}
?>