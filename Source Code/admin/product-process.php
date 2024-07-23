<?php session_start();
	
	include("includes/checklogin.php");
	include("../includes/config.php");

	if(! empty($_POST)){
		
		$errors = array();
		extract($_POST);

		if(empty($pnm)){
			$errors[] = "Please enter Product Name";
		}
		
		if(empty($category)){
			$errors[] = "Please Select Category";
		}
		
		if(empty($length)){
			$errors[] = "Please enter Length";
		}
		
		if(empty($width)){
			$errors[] = "Please enter Width";
		}
		
		if(empty($height)){
			$errors[] = "Please enter Height";
		}
		
		if(empty($weight)){
			$errors[] = "Please enter Weight";
		}
		
		if(empty($price)){
			$errors[] = "Please enter Price";
		}
	
		if(empty($description)){
			$errors[] = "Please enter Description";
		}
		
		$ext = strtoupper(substr($_FILES['image']['name'], -4));
		
		if(empty($_FILES['image']['name'])){
			$errors[] = "Please Select Image";
		}
		else if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF")){
			$errors[] = "Wrong Image Type";
		}
		
	
		if(! empty($errors)){
			$_SESSION['errors'] = $errors;
			header("location:product.php");
		}
		else{
			
			$img = time()."_".str_replace(' ','-',$_FILES['image']['name']);
			move_uploaded_file($_FILES['image']['tmp_name'],"../products/".$img);
			
			$q = "insert into product
				(pro_name,pro_cat,pro_length,pro_width,pro_height,pro_weight,pro_price,
				pro_desc,pro_img,pro_time)
				values('$pnm','$category','$length','$width','$height','$weight','$price',
				'$description','$img','$t')";
			
			mysqli_query($link,$q);
			
			header("location:product.php");
		}
	}
	else{
		header("location:product.php");
	}
?>