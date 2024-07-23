<?php session_start();
	
	include("includes/config.php");

	if(! empty($_POST)){
		
		$errors = array();
		extract($_POST);

		if(empty($fnm)){
			$errors[] = "Please enter First Name";
		}
		
		if(empty($lnm)){
			$errors[] = "Please enter Last Name";
		}
		
		if(empty($email)){
			$errors[] = "Please enter Email";
		}
		
		if(empty($phone)){
			$errors[] = "Please enter Phone Number";
		}
		else if(! is_numeric($phone))
		{
			$errors[] = "Please enter Valid Phone Number";
		}
		
		if(empty($pwd) || empty($cpwd)){
			$errors[] = "Please enter Password";
		}
		else if($pwd != $cpwd){
			$errors[] = "Don't Match Password";
		}
		else if(strlen($pwd) < 6)
		{
			$errors[] = "Please enter Minimum 6 Digit Password";
		}
		
		if(! empty($errors)){
			$_SESSION['errors'] = $errors;
			header("location:register.php");
		}
		else{
			
			$q = "insert into register
				(reg_fnm,reg_lnm,reg_email,reg_phone,reg_pwd,reg_time)
				values('$fnm','$lnm','$email','$phone','$pwd','$t')";
			
			mysqli_query($link,$q);
			
			header("location:register.php");
			
			
		}
	}
	else{
		header("location:register.php");
	}
?>