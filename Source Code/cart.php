<?php
	include("includes/header.php");

?>

   <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
	
	   <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
			<form action="addtocart.php" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
									if(!empty($_SESSION['cart'])){
										$total = 0;
										foreach($_SESSION['cart'] as $id => $val){
											
											$rate = $val['price'] * $val['qty'];
											$total = $total + $rate;
											echo '<tr>
													<td class="shoping__cart__item">
														<img src="products/'.$val['img'].'" alt="">
														<h5>'.$val['name'].'</h5>
													</td>
													<td class="shoping__cart__price">
													   Rs. '.$val['price'].'
													</td>
													<td class="shoping__cart__quantity">
														<div class="quantity">
															<div class="pro-qty">
																<input type="text" name="'.$id.'" value="'.$val['qty'].'">
															</div>
														</div>
													</td>
													<td class="shoping__cart__total">
														Rs. '.$rate.'
													</td>
													<td class="shoping__cart__item__close">
														<a href="addtocart.php?did='.$id.'"><span class="icon_close"></span></a>
													</td>
												</tr>';
										}
									}
								?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="products.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <button type="submit" class="primary-btn cart-btn cart-btn-right" style="border:none;"><span class="icon_loading"></span>
                            Upadate Cart</button>
                    </div>
                </div>
               <div class="col-lg-6">
                    
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                           <li>Total <span>Rs. <?php if(isset($total)){ echo $total;}else {echo '0';} ?></span></li>
                        </ul>
                        <!-- <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a> -->
                    </div>
                </div>
            </div>
        </div>
		</form>
    </section>
    <!-- Shoping Cart Section End -->

<?php 
	include("includes/footer.php");
?>