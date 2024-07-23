<?php  
	session_start();
	include("includes/checklogin.php");
	include("../includes/config.php");
	
	
 
	if(!empty($_POST))
	{
		
		$errors = array();
		extract($_POST);

		if(empty($category)){
			$errors[] = "Please Add category";
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
			header("location:category.php");
		}
		else{
			$img = time()."_".str_replace(' ','-',$_FILES['image']['name']);
			move_uploaded_file($_FILES['image']['tmp_name'],"../cat_image/".$img);
			
			
			$q = "insert into category
				(cat_name,cat_img,cat_time)
				values('$category','$img','$t')";
			
			mysqli_query($link,$q);
			
			header("location:category.php");
		}
	}	
	else{
		header("location:category.php");
	}
		
		
?>