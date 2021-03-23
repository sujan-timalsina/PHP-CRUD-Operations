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

        $first_name=$_POST['fname'];
        $last_name=$_POST['lname'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        
        $checkBox = implode(', ', $_POST['hobbies']);

        // $filename = implode(',',$_FILES["files"]["name"]); 
        // $tempname = implode(',',$_FILES["files"]["tmp_name"]);     
        // $folder = "images/".$filename; 

        /*$checkBox=$_POST['hobbies'];
        for ($i=0; $i<sizeof($checkBox);$i++) {  
            $query="INSERT INTO users (first_name,last_name,email,gender,hobbies) 
                VALUES ('$first_name','$last_name','$email','$gender','".$checkBox[$i]."')";  

            if(mysqli_query($con,$query)){
                echo "Records are successfully inserted";
            }
            else{
                echo "Error entering records".mysqli_error($con);
            }
        }*/

        $uploadFolder = 'images/';
        foreach ($_FILES['files']['tmp_name'] as $key => $image) {
            $imageTmpName = $_FILES['files']['tmp_name'][$key];
            $imageName = $_FILES['files']['name'][$key];
            $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

            $filename=implode(',',$_FILES['files']['name']);

            $query="INSERT INTO users (first_name,last_name,email,gender,hobbies,image_filename) 
                VALUES ('$first_name','$last_name','$email','$gender','$checkBox','$filename')";
                
        }

        if(mysqli_query($con,$query)){
            echo "Records are successfully inserted";
        }
        else{
            echo "Error entering records".mysqli_error($con);
        }
        
        //To move the uploaded image into the folder: image 
        // if (move_uploaded_file($tempname, $folder))  { 
        //     $msg = "Image uploaded successfully"; 
        // }else{ 
        //     $msg = "Failed to upload image"; 
        // }    

        mysqli_close($con);

        ?>
    
</body>
</html>