<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		//echo $_SESSION['uid']; //just for check
	}
	else
		header('location: ../login.php');		
 ?>
 <?php
 //include('header.php');
 include('title.php');
 include('../dbcon.php');

 $sid= $_GET['sid'];
 $sql="SELECT * FROM `student` WHERE `id`='$sid'";

 $run=mysqli_query($con,$sql);
 $data= mysqli_fetch_assoc($run);
 ?>

 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table border="1" align="center" style="width: 70%; margin-top: 40px;">
		<tr>
			<th>Roll no</th>
			<td><input type="text" name="rollno" value=<?php echo $data['roll']; ?>  required></td> <!-- $data[database variable] -->
		</tr>
		<tr>
			<th>Full name</th>
			<td><input type="text" name="name" value=<?php echo $data['name']; ?>></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" value=<?php echo $data['city']; ?>></td>
		</tr>
		<tr>
			<th>Parents contect</th>
			<td><input type="text" name="pcon" value=<?php echo $data['pcontuct']; ?>></td>
		</tr>
		<tr>
			<th>Standerd</th>
			<td><input type="number" name="std" value=<?php echo $data['standerd']; ?>></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="simg" required="required"></td>
		</tr>
		<tr>
			
			<td colspan="2" align="center">
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
	</form>

</body>
</html>