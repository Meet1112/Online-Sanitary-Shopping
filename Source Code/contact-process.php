<?php  
	session_start();
	include("includes/config.php");

 
	if(! empty($_POST))
	{
		
		$errors = array();
		extract($_POST);

		if(empty($nm)){
			$errors[] = "Please enter your Name";
		}
		
		if(empty($email)){
			$errors[] = "Please enter your Email";
		}
		
		if(empty($message)){
			$errors[] = "Please enter your Message";
		}
		
		if(! empty($errors)){
			$_SESSION['errors'] = $errors;
			header("location:contact.php#contactform");
		}
		else{
			$q = "insert into contact
				(con_fnm,con_email,con_message,con_time)
				values('$nm','$email','$message','$t')";
			
			mysqli_query($link,$q);
			
			header("location:contact.php");
		}
	}	
	else{
		header("location:contact.php");
	}
		
		
?>