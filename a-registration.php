<?php include "admin_server.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>HCC</title>

    <script>
        function validateForm() {
          var fname = document.forms["myForm"]["fname"].value;
          var lname = document.forms["myForm"]["lname"].value;
          var email = document.forms["myForm"]["email"].value;

            // atpos = emailID.indexOf("@");
            // dotpos = emailID.lastIndexOf(".");

          var password = document.forms["myForm"]["password"].value;
          var cpassword = document.forms["myForm"]["cpassword"].value;
          var phone = document.forms["myForm"]["phone"].value;
          var dob = document.forms["myForm"]["dob"].value;
          
          if (fname == "") {
            document.getElementById("para-fname").innerHTML="First Name must be filled out";
            return false;
          }

          if (lname == "") {
            document.getElementById("para-lname").innerHTML="Last Name must be filled out";
            return false;
          }

          if (email == "") {
            document.getElementById("para-email").innerHTML="Email must be filled out";
            return false;
          }

          if (password == "") {
            document.getElementById("para-password").innerHTML="Password must be filled out";
            return false;
          }

          if (cpassword == "") {
            document.getElementById("para-cpassword").innerHTML="Password must be filled out";
            return false;
          }

          if (password != cpassword) {
            document.getElementById("para-cpassword").innerHTML="Both Password area must be same";
            document.getElementById("para-password").innerHTML="Both Password area must be same";
            return false;
          }

          if (phone.length != 10 || isNaN(phone)) {
            document.getElementById("para-phone").innerHTML="Please enter your correct phone number";
            return false;
          }

          var terms = document.forms["myForm"]["terms"];

         if(terms.checked == false){
            document.getElementById("para-terms").innerHTML="You must agree to the terms & conditions first";
            return false;
         }


         //  if (atpos < 1 || ( dotpos - atpos < 2 )) {
         //    document.getElementById("para-email").innerHTML="Please enter correct email ID";
         //    return false;
         // }

        // var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        
        // if(email.match(mailformat)){
        //     return true;
        // }else{
        //     document.getElementById("para-phone").innerHTML="You have entered an invalid email address";
        //     return false;
        // }

        // if (dob = "") {
        //     document.getElementById("para-dob").innerHTML="Please enter your date of birth";
        //     return false;
        // }

        }
    </script>

  </head>
  <body>



    <!-- Start of admin registration form -->
<div class="container-flud shadow-lg m-2 m-md-5 p-md-5 p-2">
        <h3 class="text-center">Admin Registration Panel</h3>
        <form name="myForm" action="a-registration.php" onsubmit="return(validateForm())" method="POST">
            <div class="row my-2">
                <div class="form-group col-sm-6">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" placeholder="First Name..." name="fname" id="fname">
                    <p id="para-fname" class="text-danger"></p>
                </div>
                <div class="form-group col-sm-6">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Last Name..." name="lname">
                    <p id="para-lname" class="text-danger"></p>
                </div>
            </div>

            <div class="row my-2">
                <div class="form-group col-auto">
                    <label for="">Gender:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="Male" id="male" name="gender" checked="checked">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="Female" id="female" name="gender">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="Others" id="others" name="gender">
                        <label class="form-check-label" for="others">Others</label>
                    </div>
                </div>  
            </div>

            <div class="row my-2">
                <div class="col-auto">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                    <p id="para-dob" class="text-danger"></p>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-auto">
                    <label for="phone">Phone Number:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Mobile Number...">
                    <p id="para-phone" class="text-danger"></p>
                </div>
            </div>

            <div class="row my-2">
                <div class="form-group col-sm-6">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email..." name="email" value="<?php echo $email; ?>">
                    <p id="para-email" class="text-danger"></p>
                </div>  
            </div>

            <div class="row my-2">
                <div class="form-group col-sm-6">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Your Password Here.." name="password">
                    <p id="para-password" class="text-danger"></p>
                </div>
                <div class="form-group col-sm-6">
                    <label for="cpassword">Confirm Password:</label>
                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Your Password Here.." name="cpassword">
                    <p id="para-cpassword" class="text-danger"></p>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-auto">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" value="check">
                        <label class="form-check-label" for="terms">
                        I'll accept the terms & conditions.
                        </label>
                        <p id="para-terms" class="text-danger"></p>
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-auto">
                    <input type="submit" class="btn btn-primary" value="Register" name="reg_admin">
                    <?php include "errors.php"; ?>
                </div>
            </div>

        </form>
    </div>
    <!-- End of admin registration form-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
   
  </body>
</html>