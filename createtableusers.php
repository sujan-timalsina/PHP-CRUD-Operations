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
        $con=mysqli_connect("localhost","root","","reg_user") 
            or die("Unable to connect".mysqli_connect_error());

        $query="CREATE TABLE users(
                    id INT PRIMARY KEY AUTO_INCREMENT,
                    first_name VARCHAR(55),
                    last_name VARCHAR(55),
                    email VARCHAR(55),
                    gender VARCHAR(55),
                    hobbies VARCHAR(255),
                    image_filename VARCHAR(255)
                )";

        $res=mysqli_query($con,$query);

        if($res){
            echo "Table created successfully";
        }
        else{
            echo "Error creating table".mysqli_error($con);
        }

        mysqli_close($con);

    ?>
    
</body>
</html>