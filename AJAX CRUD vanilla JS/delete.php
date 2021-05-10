<?php
include 'connection.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['sid'];

//Deleting Data 
if (!empty($id)) {
    $sql = "DELETE FROM tablecrud WHERE id={$id}";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        echo "Deleted Successfully";
    } else {
        echo "Delete Failed" . $sql . mysqli_error($conn);
    }
} else {
    echo "Fill All Fields";
}
