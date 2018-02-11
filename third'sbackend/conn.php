<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "elib";
	$con = mysqli_connect($servername,$username,$password);
	mysqli_select_db($con,$database);
?>