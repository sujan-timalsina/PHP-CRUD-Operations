<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title></title>
    <style>
        table,th,td{
            border:2px solid black;
            border-collapse:collapse;
        }
        table{
            margin: 50px auto;
        }
        th,td{
            width:100px;
            text-align:center;
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
            <th>View More</th>
        </tr>
    <?php
        while($row=mysqli_fetch_assoc($result)){

    ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td>
                <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['id'] ?>">
                    View More
                </button>
            </td>
        </tr>
        

        <!-- Modal -->
        <div class="modal fade" id="modal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">More Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Email:<?php echo $row['email']; ?> <hr> <br>
                Gender:<?php echo $row['gender']; ?> <hr> <br>
                Hobbies:<?php echo $row['hobbies']; ?> <hr> <br>
                Images:<?php
                            $temp = explode(',', $row['image_filename']);
                            foreach($temp as $image){
                                echo "<img src='images/$image' height=50px width=50px>";
                            }
                        ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

    <?php
        }
    ?>
    
    </table>

    <?php
        mysqli_close($con);
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