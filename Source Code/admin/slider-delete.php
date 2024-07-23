<?php  
	session_start();
	include("includes/checklogin.php");
	include("../includes/config.php");
	
	$id = $_GET['id'];
	$q = "select * from slider where s_id = $id";
	$res = mysqli_query($link,$q);
	$row = mysqli_fetch_assoc($res);
	
	unlink("../slider_image/".$row['s_img']);
	
	$dq = "delete from slider
		where s_id = $id";
		
	mysqli_query($link,$dq);
	
	header("location:sliderlist.php");
		
?>