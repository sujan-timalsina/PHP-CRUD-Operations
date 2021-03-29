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
  </head>
  <body>


    <!-- login form -->
    <div class="container shadow-lg my-5 p-md-5">
        <h3 class="text-center">Admin Login Panel</h3>
        <div class="row">
            <div class="col col-md-7 mx-auto">
                <form action="a-login.php" method="POST">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 col-form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email..." name="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rem-check">
                        <label class="form-check-label" for="rem-check">Remember me!</label>
                    </div>
                    <input type="submit" name="login_admin" class="btn btn-primary" value="Login">
                    <?php include "errors.php"; ?>

                </form>
                Not registered yet?<a href="a-registration.php" class="btn btn-sm btn-outline-dark ms-2 mb-1">Register Now</a>
            </div>
        
        </div>
    </div>
    <!-- login form ends -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
   
  </body>
</html>