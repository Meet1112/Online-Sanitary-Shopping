<?php 
	include("includes/header.php");
?>
 <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+91 98765 43210</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>jetpar road,near pipli, Morbi, Gujrat</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>9:00 am to 8:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>meet009@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14710.970834161977!2d70.8236474!3d22.8119957!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3f8e86e37ccbf89!2sSargam%20Tiles!5e0!3m2!1sen!2sin!4v1661920041467!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>MORBI</h4>
                <ul>
                    <li>Phone: +91 98563 12345</li>
                    <li>Add:Sargam tiles AND Sanitaryware jetpar Road,near pipli,Morbi,Gujrat</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad" id="contactform">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
        	<form action="contact-process.php" method="POST" >
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
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="nm" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text"name="email" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="message" placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
<?php 
	include("includes/footer.php");
?>