<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:2px solid black;
            border-collapse:collapse;
        }
        table{
            margin: 50px auto;
        }
    </style>
</head>
<body>
    <?php
        $con=mysqli_connect("localhost","root","","reg_user") 
            or die("Unable to connect".mysqli_connect_error());

        $sql="SELECT *
                FROM users";

        $result=mysqli_query($con,$sql);
    ?>

    <table>
        <tr>
            <th>ID:</th>
            <th>First Name:</th>
            <th>Last Name:</th>
            <th>Email:</th>
            <th>Gender:</th>
            <th>Hobbies:</th>
            <th>Images:</th>
        </tr>
    <?php
        while($row=mysqli_fetch_assoc($result)){

    ?>
        
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['hobbies']; ?></td>
            <td><?php
                $temp = explode(',', $row['image_filename']);
                foreach($temp as $image){
                    echo "<img src='images/$image' height=50px width=50px>";
                }
                ?>
            </td>
        </tr>
    <?php
        }
    ?>
    
    </table>

    <?php
        mysqli_close($con);
    ?>
</body>
</html>