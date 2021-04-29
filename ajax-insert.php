<?php

    $conn=mysqli_connect('localhost','root','','ajaxcrud') or die("Unable to connect".mysqli_connect_error());

    // extract($_POST);
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(isset($_POST['submit'])){
      $q="INSERT INTO ajax (username,password) VALUES ('$username','$password')";
      $query=mysqli_query($conn,$q);
      header('location:display-insert.php');

    }
?>