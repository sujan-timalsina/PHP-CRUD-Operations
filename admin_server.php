<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>HCC</title>
  </head>
  <body>

    <?php

      session_start();

      // initializing variable
      $email    = "";
      $errors = array(); 

      // connect to the database
      $con = mysqli_connect('localhost', 'root', '', 'hcc_db');

      // REGISTER ADMIN

      if (isset($_POST['reg_admin'])) {

        // receive all input values from the form

        $email = mysqli_real_escape_string($con, $_POST['email']);

        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

        $first_name = mysqli_real_escape_string($con, $_POST['fname']);
        $last_name = mysqli_real_escape_string($con, $_POST['lname']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $phone_number = mysqli_real_escape_string($con, $_POST['phone']);

        // first check the database to make sure 
        // a user does not already exist with the same email

        $check_email = "SELECT * FROM admin 
                WHERE email='$email' LIMIT 1";

        $result = mysqli_query($con,$check_email);

        $row = mysqli_fetch_assoc($result);
        
        if ($row) { // if user exists
          
          if ($row['email'] === $email) {
            array_push($errors, "Email already exists");
          }
        }

        // Finally, register user if there are no errors in the form

        if (count($errors) == 0) {

          $password = md5($password);//encrypt the password before saving in the database
          $cpassword = md5($cpassword);//encrypt the password before saving in the database

          $query = "INSERT INTO admin (first_name,last_name,gender,dob,phone_number,email,password,cpassword) 
                    VALUES('$first_name','$last_name','$gender','$dob',$phone_number,'$email','$password','$cpassword')";
          
          mysqli_query($con, $query);

          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";

          header('location: admin-home.php');
        }
      }


      // LOGIN USER

      if (isset($_POST['login_admin'])) {

        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $_POST['email']);

        $password = stripslashes($_REQUEST['password']);    // removes backslashes
        $password = mysqli_real_escape_string($con, $_POST['password']);



        if (empty($email)) {
          array_push($errors, "Email is required");
        }
        if (empty($password)) {
          array_push($errors, "Password is required");
        }


        if (count($errors) == 0) {

          $password = md5($password);

          $query = "SELECT * FROM admin 
                    WHERE email='$email' AND password='$password'";

          $result = mysqli_query($con,$query);

          $row=mysqli_num_rows($result);

          if ($row == 1) {

            $_SESSION['email'] = $email;

            $_SESSION['success'] = "You are now logged in";

            header('location: admin-home.php');

          }else {

            array_push($errors, "Wrong username/password combination");
          }

        }
      }    

    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>