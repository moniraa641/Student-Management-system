<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #c8d8db;">
	<h3 align="right" style="margin-right: 10px;"><a href="login.php">Admin Login</a></h3>
	<h1 align="center">Welcome to Student Management System</h1>
	<form method="post" action="showinfo.php">
		<table align="center" border="1" style="width: 30%;"> 
			<tr style="width: 100%">
				<td colspan="2" align="center" style="font-size: 23px;">Student informations</td>
			</tr>
			<tr>
				<td align="left">Chose stander</td>
				<td> 
					<select name="std" required>
						<option value="1">1st</option>
						<option value="2">2nd</option>
						<option value="3">3rd</option>
						<option value="4">4th</option>
						<option value="5">5th</option>
						<option value="6">6th</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="left">Enter Roll</td>
				<td><input type="text" name="rollnumber" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
/*if(isset($_POST['submit']))
{
	$standerd=$_POST['std'];
	$rollno=$_POST['rollnumber'];
	include('dbcon.php');
	include('function.php');
	showdetals($standerd,$rollno);
}*/

?>