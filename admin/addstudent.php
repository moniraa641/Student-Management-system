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
 ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	<form method="post" action="addstudent.php" enctype="multipart/form-data">
  	<table border="1" align="center" style="width: 70%; margin-top: 40px;">
  		<tr>
  			<th>Roll no</th>
  			<td><input type="text" name="rollno" placeholder="Enter your Roll" required="required"></td>
  		</tr>
  		<tr>
  			<th>Full name</th>
  			<td><input type="text" name="name" placeholder="Enter your full name" required="required"></td>
  		</tr>
  		<tr>
  			<th>City</th>
  			<td><input type="text" name="city" placeholder="Enter your city" required="required"></td>
  		</tr>
  		<tr>
  			<th>Parents contect</th>
  			<td><input type="text" name="pcon" placeholder="Enter your parents contect no" required="required"></td>
  		</tr>
  		<tr> 
  			<th>Standerd</th>
  			<td><input type="number" name="std" placeholder="Enter your stander" required="required"></td>
  		</tr>
  		<tr>
  			<th>Image</th>
  			<td><input type="file" name="simg" required="required"></td>
  		</tr>
  		<tr>
  			
  			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
  		</tr>
  	</table>
  	</form>
  
  </body>
  </html>

  <?php 
	if (isset($_POST['submit'])) 
	{
		# code...
		include('../dbcon.php');

		$rolno= $_POST['rollno'];
		$name= $_POST['name'];
		$city= $_POST['city'];
		$pcon= $_POST['pcon'];
		$std= $_POST['std'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];

		move_uploaded_file($tempname,"../dataimg/$imagename");

		$qry= "INSERT INTO `student`(`roll`, `name`, `city`, `pcontuct`, `standerd`, `image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')";
		echo $qry;
		$run= mysqli_query($con,$qry);

		if($run == true)
		{
			?>
			<script>
			alert('Data inseart succesfully');
		   </script>
			<?php
		}
    }

?>