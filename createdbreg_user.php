<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con=mysqli_connect("localhost","root","") or die("Connection errror".mysqli_connect_error());

        $query="CREATE DATABASE reg_user";
        $res=mysqli_query($con,$query);

        if($res){
            echo"Database created successfully";
        }
        else{
            echo "Error creating database".mysqli_error($con); 
        }

        mysqli_close($con);

    ?>
    
</body>
</html>