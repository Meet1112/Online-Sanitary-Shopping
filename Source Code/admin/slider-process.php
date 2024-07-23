<?php  
	session_start();
	include("includes/checklogin.php");
	include("../includes/config.php");
	
	
 
	if(!empty($_POST))
	{
		
		$errors = array();
		extract($_POST);

		if(empty($sname)){
			$errors[] = "Please Add Slider Name";
		}
		$ext = strtoupper(substr($_FILES['image']['name'], -4));
		
		if(empty($_FILES['image']['name'])){
			$errors[] = "Please Select Image";
		}
		else if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF")){
			$errors[] = "Wrong Image Type";
		}
		if(!empty($errors)){
			$_SESSION['errors'] = $errors;
			header("location:slider.php");
		}
		else{
			$img = time()."_".str_replace(' ','-',$_FILES['image']['name']);
			move_uploaded_file($_FILES['image']['tmp_name'],"../slider_image/".$img);
			
		
			$q = "insert into slider
				(s_name,s_img,s_time)
				values('$sname','$img','$t')";
			
			mysqli_query($link,$q);
			
			header("location:slider.php");
		}
	}	
	else{
		header("location:slider.php");
	}
		
		
?>