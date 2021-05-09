<?php
include 'connection.php';

//Retrieve User Info
$sql="SELECT * FROM tablecrud";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	$data=array();
	while($row=mysqli_fetch_assoc($result)){
		$data[]=$row;
	}
}else{
	echo "No data found";
}

//Returning JSON Format Data as Response to AJAX Call
echo json_encode($data);

?>