<?php

include 'connection.php';

//When you click Edit button (below code get executed)
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['uid'];

//Retrieve Specific User information
$sql1 = "SELECT * FROM tablecrud WHERE id={$id}";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

//ReturningJson Format as Response to Ajax Call
echo json_encode($row1);
