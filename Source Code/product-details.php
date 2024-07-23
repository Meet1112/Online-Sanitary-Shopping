<?php 
	include("includes/header.php");
	
	$p_q = "select * from product
	where pro_id = ".$_GET['id'];
	
	$p_res = mysqli_query($link,$p_q);
	
	$p_row = mysqli_fetch_assoc($p_res);
?>

 <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Product</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Prodect Detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
	
	 <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="products/<?php echo $p_row['pro_img']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $p_row['pro_name']; ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">Rs. <?php echo $p_row['pro_price']; ?></div>
                        <p><?php echo $p_row['pro_desc']; ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="addtocart.php?pid=<?php echo $p_row['pro_id']; ?>" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Lenght</b> <span><?php echo $p_row['pro_length']; ?></span></li>
                            <li><b>Width</b> <span><?php echo $p_row['pro_width']; ?></span></li>
                            <li><b>Height</b> <span><?php echo $p_row['pro_height']; ?></span></li>
							<li><b>Weights</b> <span><?php echo $p_row['pro_weight']; ?></span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>   
    </section> 
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php 
					
					$pro_q = "select * from product
							where pro_cat = ".$p_row['pro_cat']." and pro_id != ".$p_row['pro_id']."
							order by rand()
							LIMIT 0,4";
					
					$pro_res = mysqli_query($link,$pro_q);
			
					while($pro_row = mysqli_fetch_assoc($pro_res))
					{
						echo '<div class="col-lg-3 col-md-6 col-sm-6">
					
								<div class="product__item">
									<div class="product__item__pic set-bg" data-setbg="products/'.$pro_row['pro_img'].'">
										<ul class="product__item__pic__hover">
											<li><a href="product-details.php?id='.$pro_row['pro_id'].'"><i class="fa fa-retweet"></i></a></li>
										</ul>
									</div>
									<div class="product__item__text">
										<h6><a href="product-details.php?id='.$pro_row['pro_id'].'">'.$pro_row['pro_name'].'</a></h6>
										<h5>'.$pro_row['pro_price'].'</h5>
									</div>
								</div>
							</div>';
					}
				?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->


<?php 
	include("includes/footer.php");
?>