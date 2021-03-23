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

        $sql="SELECT *
                FROM users";

        $result=mysqli_query($con,$sql);

        // explode(',',$row['image_filename']);

        if(mysqli_num_rows($result)>0){

            // for each row
            while($row=mysqli_fetch_assoc($result)){
                
                echo "Id: ".$row['id']." First Name: ".$row['first_name']." Last Name: ".$row['last_name'].
                " Email: ".$row['email']." Gender: ".$row['gender']." Hobbies: ".$row['hobbies'];

                $temp = explode(',', $row['image_filename']);
                foreach($temp as $image){
                echo "<img src='images/$image' height=50px width=50px>";
                }
                echo"<br>";
               

            }

        }

        mysqli_close($con);

    ?>

        
    
</body>
</html>