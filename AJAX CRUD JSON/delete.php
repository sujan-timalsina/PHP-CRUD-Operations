<?php

include 'connection.php';

$data=stripslashes(file_get_contents("php://input"));
$mydata=json_decode($data,true);
$id=$mydata['sid'];

//Deleting Record
if(!empty($id)){
	$sql="DELETE FROM tablecrud WHERE id = {$id}";
	$res=mysqli_query($conn,$sql);
	if($res){
		echo "Deleted Successfully";
	}else{
		echo "Unable to Delete";
	}
}
?>