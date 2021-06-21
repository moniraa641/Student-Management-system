<?php 
    include('../dbcon.php');

    $id=$_REQUEST['sid'];
	$qry= "DELETE FROM `student` WHERE `id`='$id'";
	echo $qry;
	$run= mysqli_query($con,$qry);

	if($run == true)
	{
		?>
		<script>
		alert('Data delete succesfully');
		window.open('deletestudent.php','_self');
	   </script>
		<?php
	}
	
?>