<?php

    $conn=mysqli_connect('localhost','root','','formdb') or die("Unable to connect".mysqli_connect_error());

    $nameid=$_POST['datapost'];

    $sql="SELECT * FROM classes
    	WHERE mid=$nameid";

    $res=mysqli_query($conn,$sql);

    while($rows=mysqli_fetch_array($res)){
    ?>

    <option><?php echo $rows['class']; ?></option>

    <?php

    }


?>