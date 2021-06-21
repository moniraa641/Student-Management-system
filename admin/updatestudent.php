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
 	<form method="post" action="updatestudent.php">
 		<table align="center" style="margin-top: 20px;">
 			<tr>
	  			<th>Enter Standerd</th>
	  			<td><input type="number" name="standerd" placeholder="Enter your stander" required="required"></td>
	  			<th>Enter name</th>
	  			<td><input type="text" name="stdname" placeholder="Enter your full name" required="required"></td>
	  			<td><input type="submit" name="submit" value="search"></td>
  		    </tr>
 		</table>
 	</form>

 	<table align="center" width="80%" border="1" style="margin-top: 10px;">
 		<tr>
 			<th>No</th>
 			<th>Image</th>
 			<th>Name</th>
 			<th>Rollno</th>
 			<th>Edit</th>
 		</tr>


 		<?php 
	if (isset($_POST['submit'])) 
	{
		include('../dbcon.php');

		$standerd= $_POST['standerd'];
		$name= $_POST['stdname'];

		$sql="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name`LIKE '%$name%'";
		$run=mysqli_query($con,$sql);
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td>No record found</td></tr>";

		}
		else
		{
			$count=0;
			while ($data=mysqli_fetch_assoc($run))
			 {
				$count++;
				?>
			<tr>
	 			<td><?php echo $count; ?></td>
	 			<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 200px;"/></td>
	 			<td><?php echo $data['name']; ?></td>
	 			<td><?php echo $data['roll']; ?></td>
	 			<td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>

	 		</tr>

				<?php
			 }
		}
	}
?>
</table>
 
 </body>
 </html>

