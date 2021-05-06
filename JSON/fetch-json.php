<?php
$conn=mysqli_connect("localhost","root","","ajaxcrud") or die("Unable to Connect db".mysqli_connect_error());

$sql="SELECT * FROM tablecrud";

// $sql="SELECT * FROM tablecrud WHERE id= {$_POST['uid']}";

$result=mysqli_query($conn,$sql) or die("SQL Query Failed");
//Result lai multidimensional arrayma convert garxa mysqli_fetch_all methodle
// $output=mysqli_fetch_all($result);
$output=mysqli_fetch_all($result, MYSQLI_ASSOC);
//MYSQLI_ASSOC le multidimensional array jun index based ho aba key based multidimensonal associative arrayma convert hunxa

// echo "<pre>";
// print_r($output);
// echo "</pre>";

$json_output=json_encode($output);

echo $json_output;

?>