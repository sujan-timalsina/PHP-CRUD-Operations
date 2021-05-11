<?php

include 'connection.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
// var_dump($mydata);
// echo $mydata;
$id = $mydata['id'];
$firstname = $mydata['firstname'];
$lastname = $mydata['lastname'];
$email = $mydata['email'];
$mobile = $mydata['mobile'];

// Insert Data
// if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile)) {
//     $sql = "INSERT INTO tablecrud(firstname,lastname,email,mobile) VALUES('$firstname','$lastname','$email','$mobile')";
//     $res = mysqli_query($conn, $sql);

//     if ($res == true) {
//         echo "Saved Successfully";
//     } else {
//         echo "Save Failed" . $sql . mysqli_error($conn);
//     }
// } else {
//     echo "Fill All Fields";
// }

//For insert or update data
if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile)) {
    $sql = "INSERT INTO tablecrud(id,firstname,lastname,email,mobile) VALUES('$id','$firstname','$lastname','$email','$mobile')
	ON DUPLICATE KEY UPDATE firstname='$firstname',lastname='$lastname',email='$email',mobile='$mobile'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "Saved Successfully";
    } else {
        echo "Save Failed";
    }
} else {
    echo "Fill All Fields";
}
