<?php
include 'connection.php';

//Retrieve Student Information
$sql="SELECT * FROM tablecrud";
$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
	$data[]=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
}

//Returning JSON Format Data as Response to Ajax Call
echo json_encode($data)


?>