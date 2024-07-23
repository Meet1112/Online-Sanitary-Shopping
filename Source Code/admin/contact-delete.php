<?php  
	session_start();
	include("includes/checklogin.php");
	include("../includes/config.php");
	
	$id = $_GET['id'];
	$q = "select * from contact where con_id = $id";
	$res = mysqli_query($link,$q);
	$row = mysqli_fetch_assoc($res);
	$dq = "delete from contact
		where con_id = $id";
		
	mysqli_query($link,$dq);
	
	header("location:contact.php");
		
?>