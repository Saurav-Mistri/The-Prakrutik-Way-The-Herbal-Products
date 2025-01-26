<?php
//require_once("connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		
		//echo $query = "select * from user where email = '".$username."'";
	
		//$result = mysqli_query($conn, $query);
		$arr = array();
		//if (mysqli_num_rows($result) == 1) {
			//$row1=mysqli_fetch_array($result);
				$message = "<h3>thankyou for subscription   </h3>";
				$subject = "Subscribe";		
				$mailSent = send_mail($username, $message, $subject);
				if ($mailSent) {
				//	session_start();
					//$_SESSION['id'] = $id;
					echo "<script>
								window.location='index.php';
					      </script>";
				} else {
					
				}
				$array = array('status' => '200' ,'details' => $arr);
	} else {
		echo "asdasasdad"; die;
    }
}
?>
        <footer class="footer-area">
            <!-- Footer Top Area Start -->
            <div class="footer-top bg-4 pt-120 pb-120">
                <!-- Newsletter Area Start -->
                    <div class="newsletter-area">
                        <div class="container text-center">
                            <div class="newsletter-container">
                                <h2>Subscribe Newsletter.</h2>
                                <p>Get e-mail updates about our latest shop.</p>
                                <div class="newsletter-form mc_embed_signup">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="username" class="email" id="mce-EMAIL" placeholder="Enter you email address here..." required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="default-btn">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                <!-- Newsletter Area End -->
                <!-- Service Area Start -->

                <!-- Service Area End -->
                <!-- Footer Widget Area Start -->
                <div class="footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-footer-widget">
                                    <div class="footer-logo">
                                        <a href="#"><img src="assets/img/logo/logop.png" alt="" width=170 height=75></a>
                                    </div>
                                    <p>The प्राकृतिक way: Herbal Products is an online user friendly web application for viewing different health care products and also able to place order. </p>
                                    <div class="footer-text">
                                        <span><i class="icon icon-Pointer"></i>Address :A-403,Shree Sharan,New Chandkheda, Ahmedabad.</span>
                                        <span><i class="icon icon-Phone"></i>Phone : +(91)8140883574</span>
                                        <span><i class="icon icon-Mail"></i>Email : prakrutikwayherbalproducts2019@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="single-footer-widget">
                                    <h3>Useful Links</h3>
                                    <ul class="footer-widget-list">
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="shop.php">New products</a></li>
                                        <li><a href="feedback.php">Feedback</a></li>
										<li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="single-footer-widget">
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-footer-widget">
                                   
                                    <div class="instagram-image">
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/2.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/3.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/4.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/5.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/6.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/7.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/8.jpg" alt=""></a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area End -->
            </div>
            <!-- Footer Top Area End -->
            <!-- Footer Bottom Area Start -->
            <div class="footer-bottom-area pt-15 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex col-md-6">
                            <div class="footer-text-bottom">
                                <p>Copyright &copy; <a href="index.php">The Prakrutik Way : Herbal Products</a>. All Rights Reserved</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area End -->
        </footer>
		