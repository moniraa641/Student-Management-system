<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">Here is your all details</h1>

</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$standerd=$_POST['std'];
	$rollno=$_POST['rollnumber'];
	include('dbcon.php');
	include('function.php');
	showdetals($standerd,$rollno);
}