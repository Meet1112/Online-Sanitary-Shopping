<?php 
	include("includes/header.php");
?>
 <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Register</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Register</span>
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
		  
            <form action="register-process.php" method="post" class="register-form">
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
					<div class="col-lg-6">
                        <input type="text" name="fnm" placeholder="First name">
                    </div>
					<div class="col-lg-6">
                        <input type="text" name="lnm" placeholder="Last name">
                    </div>
                    <div class="col-lg-6">
                        <input type="email" name="email" placeholder="Email Address">
                    </div>
					<div class="col-lg-6">
                        <input type="text" name="phone" placeholder="Phone No">
                    </div>
                    <div class="col-lg-6">
                        <input type="Password" name="pwd" placeholder="Password">
                    </div>
					<div class="col-lg-6">
                        <input type="Password" name="cpwd" placeholder=" Confirm Password">
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Registration</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
<?php 
	include("includes/footer.php");
?>