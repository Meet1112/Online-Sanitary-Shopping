<?php session_start();
	include("includes/config.php");
	
	if(isset($_GET['pid'])){
		$id = $_GET['pid'];
		
		$q = "select * from product where pro_id = ".$id;
		$res = mysqli_query($link,$q);
		$row = mysqli_fetch_assoc($res);
		
		$_SESSION['cart'][] = array('name'=>$row['pro_name'],'price'=>$row['pro_price'],'img'=>$row['pro_img'],'id'=>$row['pro_id'],'qty'=>1);
	}
	else if(!empty($_POST)){
		foreach($_POST as $id => $val){
			$_SESSION['cart'][$id]['qty'] = $val;
		}
	}
	else if(isset($_GET['did'])){
		unset($_SESSION['cart'][$_GET['did']]);
	}
	header("location:cart.php");
	exit;
	echo '<pre>';
	print_r($_SESSION);

?>