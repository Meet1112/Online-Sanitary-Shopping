<?php  
	session_start();
	include("includes/checklogin.php");
	include("../includes/config.php");
	
	$id = $_GET['id'];
	$q = "select * from product where pro_id = $id";
	$res = mysqli_query($link,$q);
	$row = mysqli_fetch_assoc($res);
	
	unlink("../products/".$row['pro_img']);
	
	$dq = "delete from product
		where pro_id = $id";
		
	mysqli_query($link,$dq);
	
	header("location:productlist.php");
		
?>