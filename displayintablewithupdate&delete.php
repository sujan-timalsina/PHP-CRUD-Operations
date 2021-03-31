<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
    ?>


    <?php       
        $sql="SELECT *
                FROM users";

        $result=mysqli_query($con,$sql);
    ?>

    <!-- code to update each records -->
    <?php
        if (isset($_POST['update'])) {
            $id=$_POST['id'];
            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            
            $insert_query="UPDATE users 
                            SET first_name='$first_name', last_name='$last_name'
                            WHERE id=$id";

            $res=mysqli_query($con,$insert_query);

            if($res){
                echo "Succesfully updated";
            }
            else{
                echo "Failed to update";
            }
        }
    ?>

        <!-- code to delete selected record -->
    <?php
        if(isset($_POST['del'])){
            $id=$_POST['id'];

            $delete_query="DELETE FROM users
                            WHERE id=$id";

            $res=mysqli_query($con,$delete_query);

            if($res){
                echo "Succesfully deleted";
            }
            else{
                echo "Failed to delete";
            }
        }
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
            <th>Update:</th>
            <th>Delete:</th>
        </tr>

        <?php
            while($row=mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td>
                <?php
                    echo $row['id']; 
                ?>
            </td>
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
            <td>
                <a class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#uModal<?php echo $row['id'] ?>" href="displayintablewithupdate&delete.php?edit=<?php echo $row['id']; ?>">Update</a>
                <!-- <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#uModal<?php //echo $row['id'] ?>" name="edit">
                    Update: 
                </button> -->
                

                <!-- Modal -->
                <div class="modal fade" id="uModal<?php echo $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="displayintablewithupdate&delete.php" method="POST" class="reg-form" enctype="multipart/form-data">
                            <div class="form-group">

                            <!-- In registration part there is no input field for id part which is 
                            because of auto increment in db.
                            So, we should add one here to use id on query
                            Main concept is to give id in value -->
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                            </div>
                            
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass" placeholder="Password">
                                <input type="password" class="form-control" name="pass" placeholder="Confirm Password">
                            </div>
                            
                            <div class="form-group">
                                Gender:
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                                <input type="radio" name="gender" value="Others">Others
                            </div>
                            
                            <div class="form-group">
                                Hobbies:
                                <input type="checkbox" value="Football" name="hobbies[]">Football
                                <input type="checkbox" value="Basketball" name="hobbies[]">Basketball
                                <input type="checkbox" value="Cricket" name="hobbies[]">Cricket
                                <input type="checkbox" value="Volleyball" name="hobbies[]">Volleyball
                            </div>
                            
                            <div class="form-group">
                                <input type="file" name="files[]" id="files" multiple>
                                <div id="selectedFiles"></div>
                            </div>
                            
                            <!-- <div class="form-group">
                                <input type="submit" name="submit" value="Submit">
                            </div> -->
                            
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                        <!-- <button type="button" class="btn btn-primary" name="update">Update</button> -->
                    </div>
                    </form>
                    </div>
                </div>
                </div>
            </td>
            <td>
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#dModal<?php echo $row['id'] ?>">Delete:</button>

                <!-- Modal -->
                <div class="modal fade" id="dModal<?php echo $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="displayintablewithupdate&delete.php" method="POST" class="reg-form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  
        
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <input type="submit" value="Yes" name="del" class="btn btn-primary">
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            </td>
        </tr>

    <?php
        }
    ?>
    
    </table>

    <?php
        mysqli_close($con);
    ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>