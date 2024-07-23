<?php 
	include("includes/header.php");
?>
<div class="hero-banner-section">
	<div class="swiper hero-slider">
	  <div class="swiper-wrapper">
		<?php
			$hs_q = "select * from slider";
			
			$hs_res = mysqli_query($link,$hs_q);
			
			while($hs_row = mysqli_fetch_assoc($hs_res)){
				echo '<div class="swiper-slide">
					<img src="slider_image/'.$hs_row['s_img'].'" />
				</div>';
			}
		?>
	  </div>
	  
	  <div class="hero-pagination"></div>
	</div>
</div>
 <!-- Categories Section Begin -->
    <section class="categories mt-5">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php 
						$cat_list_q = 'select * from category';
						
						$cat_list_res = mysqli_query($link,$cat_list_q);
						
						while($cat_list_row = mysqli_fetch_assoc($cat_list_res)){
							echo '<div class="col-lg-3">
									<div class="categories__item set-bg" data-setbg="cat_image/'.$cat_list_row['cat_img'].'">
										<h5><a href="products.php?category='.$cat_list_row['cat_id'].'">'.$cat_list_row['cat_name'].'</a></h5>
									</div>
								</div>';
						}
					?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
	
	<!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
							<li class="active" data-filter="*">All</li>
							<?php
								$fq = "select * from category limit 0,4";
								
								$fres = mysqli_query($link,$fq);
								
								while($frow = mysqli_fetch_assoc($fres)){
									$fcat[] = $frow['cat_id'];
									$fcat_class = str_replace(" ","-",$frow['cat_name']);
									echo '<li data-filter=".'.$fcat_class.'">'.$frow['cat_name'].'</li>';
								}
							?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
				<?php
					foreach($fcat as $catid){
						$fpq = "select * from product where pro_cat = ".$catid." LIMIT 0,4";
						
						$fpres = mysqli_query($link,$fpq);
						
						while($fprow = mysqli_fetch_assoc($fpres)){
							$cq = "select * from category where cat_id = ".$fprow['pro_cat'];	
							$cres = mysqli_query($link,$cq);
							$crow = mysqli_fetch_assoc($cres);
							$cls = str_replace(" ","-",$crow['cat_name']);
							echo '<div class="col-lg-3 col-md-4 col-sm-6 mix '.$cls.'">
								<div class="featured__item">
									<div class="featured__item__pic set-bg" data-setbg="products/'.$fprow['pro_img'].'">
										<ul class="featured__item__pic__hover">
											<li><a href="product-details.php?id='.$fprow['pro_id'].'"><i class="fa fa-retweet"></i></a></li>
										</ul>
									</div>
									<div class="featured__item__text">
										<h6><a href="product-details.php?id='.$fprow['pro_id'].'">'.$fprow['pro_name'].'</a></h6>
										<h5>Rs. '.$fprow['pro_price'].'</h5>
									</div>
								</div>
							</div>';
						}
					}
				?>
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
	
	<!-- Banner Begin -->
    <div class="banner mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="products.php?category=8"><img src="img/banner/banner-1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                       <a href="products.php?category=14"><img src="img/banner/banner-2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
	
	



<?php 
	include("includes/footer.php");
?>