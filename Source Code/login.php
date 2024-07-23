<?php 
	include("includes/header.php");
?>
 <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Login</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

  
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
			<form action="login-process.php" method="POST" class="login-form">
				<?php
					if(!empty($_SESSION['errors'])){
						echo '<div class="error-box">';
						foreach($_SESSION['errors'] as $er){
							echo '<p class="error">'.$er.'</p>';
						}
						echo '</div>';
						unset($_SESSION['errors']);
					}
				?>
				
				<div class="row">
                    <div class="col-lg-12">
                        <input type="email" name="email" placeholder="Email Address">
                    </div>
                    <div class="col-lg-12">
                        <input type="Password" name="pwd" placeholder="Password">
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Login</button>
                    </div>
					<div class="col-lg-12">
                        <a href="register.php">Create Account</a>
					</div>
				</div>
					
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
<?php 
	include("includes/footer.php");
?>