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
		
		if(! empty($_FILES['image']['name'])){
			if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF")){
				$errors[] = "Wrong Image Type";
			}
		}
		if(!empty($errors)){
			$_SESSION['errors'] = $errors;
			header("location:category-edit.php?id=".$cid);
		}
		else{
				
			$img_q = '';
			
			if(!empty($_FILES['image']['name'])){				
				
				$img_q = "select * from category where cat_id = $cid";
				
				$img_res = mysqli_query($link,$img_q);
				$img_row = mysqli_fetch_assoc($img_res);
				
				unlink("../cat_image/".$img_row['cat_img']);
				
				$img = time()."_".str_replace(' ','-',$_FILES['image']['name']);
				move_uploaded_file($_FILES['image']['tmp_name'],"../cat_image/".$img);
			
				$img_q = "cat_img = '$img'";
			}
			$q = "update category set cat_name = '$category' $img_q where cat_id = $cid";
			
			mysqli_query($link,$q);
			
			header("location:categorylist.php");
		}
	}
	else{
		header("location:category.php");
	}
?>