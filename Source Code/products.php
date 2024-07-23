<?php
	include("includes/header.php");
	include("includes/config.php");
	
	$title = 'Products';
	if(isset($_GET['category'])){
		$c_q = "select cat_name from category where cat_id = ".$_GET['category'];
		$c_res = mysqli_query($link,$c_q);
		$c_row = mysqli_fetch_assoc($c_res);
		$title = $c_row['cat_name'];
	}
?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $title; ?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Category</h4>
                            <ul>
							<?php
								$cat_q = "select * from category";
					
								$cat_res = mysqli_query($link,$cat_q);
					
								while($cat_row = mysqli_fetch_assoc($cat_res))
								{
									echo '<li><a href="products.php?category='.$cat_row['cat_id'].'">'.$cat_row['cat_name'].'</a></li>';
								}
							?>
                            </ul>
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
     
                    <div class="row">
					<?php 
						if(isset($_GET['category'])){
							$cat = $_GET['category'];
							$pg_q = "select count(*) from product where pro_cat = $cat";
							$pg_res = mysqli_query($link,$pg_q);
							$pg_row = mysqli_fetch_assoc($pg_res);
							
							$items = 9;
							$total_items = $pg_row['count(*)'];
							$total_pages = ceil($total_items / $items);
							$cur_page = isset($_GET['page'])?$_GET['page']:1;
							
							$pgstart = ($cur_page - 1) * $items;
							$pro_q = "select * from product where pro_cat = $cat LIMIT $pgstart,$items";
						}else{
							$pg_q = "select count(*) from product";
							$pg_res = mysqli_query($link,$pg_q);
							$pg_row = mysqli_fetch_assoc($pg_res);
							
							$items = 9;
							$total_items = $pg_row['count(*)'];
							$total_pages = ceil($total_items / $items);
							$cur_page = isset($_GET['page'])?$_GET['page']:1;
							
							$pgstart = ($cur_page - 1) * $items;
							
							$pro_q = "select * from product LIMIT $pgstart,$items";
						}
						
						$pro_res = mysqli_query($link,$pro_q);
				
						while($pro_row = mysqli_fetch_assoc($pro_res))
						{
							echo '<div class="col-lg-4 col-md-6 col-sm-6">
						
									<div class="product__item">
										<div class="product__item__pic set-bg" data-setbg="products/'.$pro_row['pro_img'].'">
											<ul class="product__item__pic__hover">
												<li><a href="product-details.php?id='.$pro_row['pro_id'].'"><i class="fa fa-retweet"></i></a></li>
											</ul>
										</div>
										<div class="product__item__text">
											<h6><a href="product-details.php?id='.$pro_row['pro_id'].'">'.$pro_row['pro_name'].'</a></h6>
											<h5>Rs. '.$pro_row['pro_price'].'</h5>
										</div>
									</div>
								</div>';
						}
					?>
                        
                    </div>
                    <div class="product__pagination text-center">
						<?php
							if($cur_page > 1){
								$query_string = '';
								if(isset($_GET['category'])){
									$query_string = '&category='.$cat;
								}
								echo '<a href="products.php?page='.($cur_page - 1).''.$query_string.'"><i class="fa fa-long-arrow-left"></i></a>';
							}
						?>
						
						<?php
							if(isset($_GET['category'])){
								for($i=1;$i<=$total_pages;$i++){
									
									$query_string = '';
									if(isset($_GET['category'])){
										$query_string = '&category='.$cat;
									}
									
									echo '<a href="products.php?page='.$i.''.$query_string.'">'.$i.'</a>';
									
								}
							}
						?>
                        
						
						<?php
							if($cur_page < $total_pages){
								$query_string = '';
								if(isset($_GET['category'])){
									$query_string = '&category='.$cat;
								}
								echo '<a href="products.php?page='.($cur_page + 1).''.$query_string.'"><i class="fa fa-long-arrow-right"></i></a>';
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

<?php 
	include("includes/footer.php");
?>