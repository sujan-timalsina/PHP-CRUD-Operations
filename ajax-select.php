<?php

$conn=mysqli_connect('localhost','root','','ajaxcrud') or die("Unable to connect".mysqli_connect_error());

$q="SELECT * FROM ajax";
$res=mysqli_query($conn,$q);
if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res)){
?>
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['username'];?></td>
		<td><?php echo $row['password'];?></td>
	</tr>
<?php
	}
}
?>