<?php  
	session_start();
	include("includes/checklogin.php");
	include("../includes/config.php");
	
	$id = $_GET['id'];
	$q = "select * from category where cat_id = $id";
	$res = mysqli_query($link,$q);
	$row = mysqli_fetch_assoc($res);
	
	unlink("../cat_image/".$row['cat_img']);
	
	$dq = "delete from category
		where cat_id = $id";
		
	mysqli_query($link,$dq);
	
	header("location:categorylist.php");
		
?>