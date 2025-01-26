<?php
//session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<?PHP INCLUDE("../../../../config/connection.php");?>    
    
<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:08:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Naturecircle - Premium eCommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- All css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ie7.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<style>

</style>
    </head>
    <body>
        
        <!-- Header Area Start -->
    <?php
		include("header1.php");
		?>
            <!-- Header Area End -->
           
            <!--Start of Login Form-->
            <div class="modal fade" id="login_box" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content">
								<h2>Login to your account</h2>
								<form action="#" method="post">
									<div class="form-box">
										<input type="text" placeholder="User Name" name="username">
										<input type="password" placeholder="Password" name="pass">
									</div>
									<div class="checkobx-link">
									    <div class="left-col">
								            <input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
									    </div>
									    <div class="right-col"><a href="#">Forget Password?</a></div>
									</div>
								    <button type="submit">Sign In</button>
								</form>
							</div>
                        </div>	
                    </div>	
                </div>
            </div>
            <!--End of Login Form-->
            <!--Start of Register Form-->
            <div class="modal fade" id="register_box" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content">
								<h2>Sign Up</h2>
								<form action="#" method="post">
									<div class="form-box">
										<input type="text" placeholder="Full Name" name="fullname">
										<input type="text" placeholder="User Name" name="username">
										<input type="email" placeholder="Email" name="email">
										<input type="password" placeholder="Password" name="pass">
										<input type="password" placeholder="Confirm Password" name="re_pass">
									</div>
									<div class="checkobx-link">
									    <div class="left-col">
								            <input type="checkbox" id="remember_reg"><label for="remember_reg">Remember Me</label>
									    </div>
									</div>
								    <button class="text-uppercase" type="submit">Register</button>
								</form>
							</div>
                        </div>	
                    </div>	
                </div>
            </div>
            <!--End of Register Form-->
        </header>
        <!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-12 text-center">
            <div class="container">
                <h1>Feedback</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">feedback</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Google Map Area Start -->
       
        <!-- Google Map Area End -->
        <!-- Contact Area Start -->
<?php
if(isset($_SESSION['u_id']))
{
?>	
	   <div class="contact-area fix mb-95">
            <div class="contact-form pt-110">
                <h1 class="contact-title">TELL US YOUR FEEDBACK</h1>
                <form  method="post">
                    <div class="row">
                        
                    </div><br>
                    <textarea name="message" style="width:520px;" id="message" placeholder="Message *"></textarea>
                  <div>
				  <input type="submit" class="button" style="
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;">
				  </div>
                       
				
                  
                </form>
					<?php


	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_POST["message"]))

		{
			$uid = $_SESSION['u_id'];
			$description=$_POST["message"];
			
			$feedbackdate=date('y-m-d');		
			
			if($description!='' )
			{
				$sql1="insert into feedback(f_discription,f_date,u_id)
				values('".$description."','".$feedbackdate."','".$uid."')";
				//echo $sql1;
				//die;
                //echo $sql1;
				//die;
				$result=mysqli_query($conn,$sql1);
				
				
				if($result)
				{
					
					echo "<meta http-equiv='refresh' content='0;url=index.php'>";
				}
			}
			
		}
		else
		{
			echo"value not set";
		}
	}
?>
       </div>
	   
	   

        </div>
		<?php
}
?>
        <!-- Contact Area End -->
        <!-- Footer Area Start -->
        <?php
include("footer1.php");
?>
        <!-- Footer Area End -->
        
        <!-- Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClpvcUyl31wMd7DJZQnnzI006S99u9nnM"></script>
        <script  src="https://www.google.com/jsapi"></script>
        <script src="assets/map/map.js"></script>
        <!-- All js here -->
        <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:09:03 GMT -->
</html>