<?php
	if(empty($_SESSION['admin'])){
		header("location:login.php");
		exit;
	}
?>