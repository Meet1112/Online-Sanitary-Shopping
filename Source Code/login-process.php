<?php 	
	session_start();
	include("includes/config.php");
	
	if(! empty($_POST))
	{
		
		$errors = array();
		extract($_POST);

		if(empty($email)){
			$errors[] = "Please enter Email";
		}
		
		if(empty($pwd)){
			$errors[] = "Please enter Password";
		}
		
		else if(strlen($pwd) < 6)
		{
			$errors[] = "Please enter Minimum 6 Digit Password";
		}
		
		if(! empty($errors)){
			
			$_SESSION['errors'] = $errors;
			
			header("location:login.php");
			
		}
		else{
			
			$q = "select * from register
			where reg_email='$email' and reg_pwd = '$pwd'";
			
			$res = mysqli_query($link,$q);
			
			if(mysqli_num_rows($res) > 0){
				
				$row = mysqli_fetch_assoc($res);
				
				$_SESSION['client'] = $row;
				
				header("location:index.php");
				
			}
			else
			{
				$_SESSION['errors'][] = "Wrong username or Password";
				header("location:login.php");
			}
		}
	}	
	else{
		header("location:login.php");
	}
		
		
?>