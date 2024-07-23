<?php  
	session_start();
	include("includes/checklogin.php");
	include("../includes/config.php");
	
	
	if(!empty($_POST))
	{
	
		$errors = array();
		extract($_POST);

		if(empty($sname)){
			$errors[] = "Please Add slider";
		}
		$ext = strtoupper(substr($_FILES['image']['name'], -4));
		
		if(! empty($_FILES['image']['name'])){
			if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF")){
				$errors[] = "Wrong Image Type";
			}
		}
		if(!empty($errors)){
			$_SESSION['errors'] = $errors;
			header("location:slider-edit.php?id=".$sid);
		}
		else{
				
			$img_q = '';
			
			if(!empty($_FILES['image']['name'])){				
				
				$img_q = "select * from slider where s_id = $sid";
				
				$img_res = mysqli_query($link,$img_q);
				$img_row = mysqli_fetch_assoc($img_res);
				
				unlink("slider_image/".$img_row['s_img']);
				
				$img = time()."_".str_replace(' ','-',$_FILES['image']['name']);
				move_uploaded_file($_FILES['image']['tmp_name'],"../slider_image/".$img);
			
				$img_q = ",s_img = '$img'";
			}
			$q = "update slider set s_name = '$sname' $img_q where s_id = $sid";
			
			mysqli_query($link,$q);
			
			header("location:sliderlist.php");
		}
	}
	else{
		header("location:slider.php");
	}
?>