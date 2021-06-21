<?php 
session_start();
if (isset($_SESSION['uid'])) {
	# code...
	header('location:admin/admindash.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body>
	<h2 align="center">Admin Login</h2>
	<form method="post" action="login.php">
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="user" required></td>
			</tr>
			<tr>
				<td>passourd</td>
				<td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
	</body>
</html>
	<?php
		include('dbcon.php');
		if (isset($_POST['login'])) 
		 {
			# code...
			$username=($_POST['user']);
			$password=($_POST['pass']);

			$qry= "SELECT * FROM admin WHERE name='$username' AND password='$password'";
			//echo $qry;
			$run= mysqli_query($con,$qry);
			$row = mysqli_num_rows($run);
		if ($row <1)
		   {
	        ?>
			<script>
				alert('Username or password not match !!');
				window.open('login.php','_self'); /*refresh page*/
			</script>
	       <?php
		    }
		    else
			{
				$data = mysqli_fetch_assoc($run);
				$id = $data['id'];
				//echo "id =".$id; //for check write this line
				//session_start();
				$_SESSION['uid']=$id;
				header('location:admin/admindash.php'); 
			}
	     }
		
	?>


