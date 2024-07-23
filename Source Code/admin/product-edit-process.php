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
		
		if(! empty($_FILES['image']['name'])){
			if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF")){
				$errors[] = "Wrong Image Type";
			}
		}
	
		if(! empty($errors)){
			$_SESSION['errors'] = $errors;
			header("location:product-edit.php?id=".$pid);
		}
		else{
			
			$img_q = '';
			if(!empty($_FILES['image']['name'])){				
				
				$img_q = "select * from product where pro_id = $pid";
				$img_res = mysqli_query($link,$img_q);
				$img_row = mysqli_fetch_assoc($img_res);
				
				unlink("../products/".$img_row['pro_img']);
				
				$img = time()."_".str_replace(' ','-',$_FILES['image']['name']);
				move_uploaded_file($_FILES['image']['tmp_name'],"../products/".$img);
				
				$img_q = ",pro_img = '$img'";
			}
			
			$q = "update product
				set pro_name = '$pnm',
				pro_cat = '$category',
				pro_length = '$length',
				pro_width = '$width',
				pro_height = '$height',
				pro_weight = '$weight',
				pro_price = '$price',
				pro_desc = '$description' $img_q
				where pro_id = $pid";
			
			mysqli_query($link,$q);
			
			header("location:productlist.php");
		}
	}
	else{
		header("location:product.php");
	}
?>