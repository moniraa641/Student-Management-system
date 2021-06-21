<?php 
function showdetals($standerd,$rollno)
{
	include('dbcon.php');
	$sql="SELECT * FROM `student` WHERE `roll`='$rollno' AND `standerd`= '$standerd';";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0)
	 {
		$data=mysqli_fetch_assoc($run);
		?>
		<!--<form action="showinfo.php" method="post">-->
			<table border="1" align="center" style="width: 50%; margin-top: 20px;">
				<tr><td colspan="3" align="center"><h3>Student Detals</h3></td></tr>
				<tr>
					<td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>" style="max-height: 150px; max-width: 120px;"/></td>
					<th>Rollno</th>
					<td><?php echo $data['roll']; ?></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $data['name']; ?></td>
				</tr>
				<tr>
					<th>City</th>
					<td><?php echo $data['city']; ?></td>
				</tr>
				<tr>
					<th>Parents conturcts</th>
					<td><?php echo $data['pcontuct']; ?></td>
				</tr>
				<tr>
					<th>Standerd</th>
					<td><?php echo $data['standerd']; ?></td>
				</tr>
			</table>
			<!--</form>-->
			<?php
		}
		else{
			echo"<script>alert('No data founf.')</script>";
		}
}
?>
