<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		//echo $_SESSION['uid']; //just for check
	}
	else
		header('location: ../login.php');
	
		//include('header.php');		
 ?>
 <?php
include('header.php');
  ?> 
 <!-- <div class="adminheader">
		<h1>Welcome to admin Dashbord</h1>
	</div>
 
 </body>
 </html>-->

 