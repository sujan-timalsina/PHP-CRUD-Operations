<?php

    $conn=mysqli_connect('localhost','root','','formdb') or die("Unable to connect".mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-4.6.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="bootstrap-4.6.0-dist/js/jquery.js"></script>

    <title></title>
  </head>
  <body>
    

    <div class="container">
      <h2 class="text-center text-light bg-info">Get data from form</h2>

      <form action="">
        Username:
        <input type="text" class="form-control" name="">
        Password:
        <input type="text" class="form-control" name="">
        Degree:
        <select class="form-control" onchange="myfun(this.value)">
          <option>Select Any One</option>

          <?php

          $q="SELECT * FROM degree";
          $result=mysqli_query($conn, $q);
          while($rows=mysqli_fetch_array($result)){
          ?>
          <option value="<?php echo $rows['mid']; ?>"><?php echo $rows['degrees']; ?></option>
          <?php
          }
          ?>
        </select>

        Class:
        <select id="dynamic-select" class="form-control">
          <option>Choose Any One</option>
        </select>
        <button class="btn btn-success">Submit</button>
      </form>
    </div>

    

    <script>
      function myfun(datavalue){

        $.ajax({
          url:"class.php",
          type:'POST',
          data:{
            datapost:datavalue
          },
          success:function(result){
            $('#dynamic-select').html(result);
          }
        });
      }
    </script>



    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>