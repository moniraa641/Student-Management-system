<?php 
    include('../dbcon.php'); 

	$rolno= $_POST['rollno'];
	$name= $_POST['name'];
	$city= $_POST['city'];
	$pcon= $_POST['pcon'];
	$std= $_POST['std'];
	$id= $_POST['sid'];
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$imagename");

	$qry= "UPDATE `student` SET `roll` = '$rolno', `name` = '$name', `city` = '$city', `pcontuct` = '$pcon', `standerd` = '$std', `image` = '$imagename' WHERE `id` = '$id';";
	echo $qry;
	$run= mysqli_query($con,$qry);

	if($run == true)
	{
		?>
		<script>
		alert('Data update succesfully');
		window.open('updateform.php?sid=<?php echo $id; ?>','_self');
	   </script>
		<?php
	}
	
?>