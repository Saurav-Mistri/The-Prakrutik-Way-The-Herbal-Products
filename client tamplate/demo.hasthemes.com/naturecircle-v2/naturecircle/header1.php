<?php
session_start();
 require_once('../../../../config/connection.php'); ?> 

<html class="no-js" lang="en">
    
	
<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:07:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>The Prakrutik Way : Herbal Products</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logop.png">

        <!-- All css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ie7.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    </head>
    <body>

  <header class="header-area header-sticky">
            <div class="header-container">
                <div class="row">
                    <div class="col-lg-5 display-none-md display-none-xs">
                        <div class="ht-main-menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.php">Home </a></li>
                                    <li><a href="shop.php">Products </a>
                                        <ul class="ht-mega-menu">
										<?php
										$sql="Select * From category";
										$results=mysqli_query($conn,$sql);
						
										while($row=mysqli_fetch_array($results))
										{
											$cid = $row['c_id'];
									?>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><?php echo $row['c_name']?></li>
													<li>
									<?php
									
										$sql4="Select * From sub_category where c_id = $cid";
										$result4=mysqli_query($conn,$sql4);
						
										while($row4=mysqli_fetch_array($result4))
										{
												$sid = $row4['sub_category_id'];
									?>
													<a href="shop.php?sid=<?php echo $sid;?>"><?php echo $row4['sub_category_name']?></a>
                                                    
									<?php
										}
									?>
									</li>
                                                </ul>
                                            </li>
									<?php
										}
									?>

                                        </ul>

                                    </li>
                                    <li><a href="contact.php">contact</a></li>
									<li><a href="feedback.php">feedback</a></li>
									<?php
											if(isset($_SESSION['u_id']))
											{
										?>
									<li><a href="vieworder.php">My Order </li>
									<?php
											}
											?>
							
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="logo text-center">
                            <a href="index.php"><img src="assets/img/logo/logop.png" alt="NatureCircle" width=170 height=75></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-8">
                        <div class="header-content d-flex justify-content-end">
                            
                            <div class="settings-wrapper">
                                <a href="#"><i class="icon icon-Settings"></i></a>
                                <div class="settings-content">
                                    <h4>My Account <i class="fa fa-angle-down"></i></h4>
                                    <ul>
                                        <?php
											if(isset($_SESSION['u_id']))
											{
										?>
										<li><a href="editprofile.php" class="modal-view button">Profile</a></li>
										 <li><a href="#" class="modal-view button" data-toggle="modal" data-target="#reset_box">Reset password</a>
										 <li><a href="logoutclient.php" class="modal-view button">Logout</a>
										<?php
											}
											else{
										?>
										<li><a href="#" class="modal-view button" data-toggle="modal" data-target="#register_box">Register</a></li>
                                        <li><a href="#" class="modal-view button" data-toggle="modal" data-target="#login_box">login</a></li>
										<?php
											}
										?>
										 </li>
                                    </ul>
                                   
                                </div>
                            </div>
							 <?php
											if(isset($_SESSION['u_id']))
											{
										?>
                            <div class="cart-wrapper">
                                <a href="cart.php">
                                    <i class="icon icon-FullShoppingCart"></i>
                                </a>
                            </div>
							<?php
											}
											?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Area End -->
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="mobile-menu container">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.php">HOME</a>
                                <ul>
                                    <li><a href="index.php">Home </a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="shop.php">Shop</a></li>
                            
                            <li><a href="contact.php">Contact</a></li>
                            
                        </ul>
                    </nav>							
                </div>
            </div>
            <!-- Mobile Menu Area End -->
			<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if( $email !='' && $password !='')
		{
			$sql= "select u_id,email,password,user_name from user where email= '".$email."' and password='".$password."' and isadmin = 0";
			
			$result=mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				//session_start();
				$_SESSION["u_id"] = $row['u_id'];
					$_SESSION["user_name"] = $row['email'];
				
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			}
			else
			{
				echo"Invalid password";
			}			
		}
	}
}
?>
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
										<input type="text" placeholder="User Name" name="email">
										<input type="password" placeholder="Password" name="password">
									</div>
									<div class="checkobx-link">
									    
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
			<?php	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
		{

			if(isset($_POST['register']))
			{

			if (isset($_POST["txtarea"]) && isset($_POST["uname"]) && isset($_POST["address"]) && isset($_POST["gender"])  && isset($_POST["dob"]) && isset($_POST["email"]) && isset($_POST["contact_no"])  )
				{ 
			
				$area=$_POST["txtarea"];
					$username=$_POST["uname"];
					$address=$_POST["address"];
					$gender=$_POST["gender"];
					$dob=$_POST["dob"];
					$email=$_POST["email"];
					$password1=$_POST["password1"];
					$contact_no=$_POST["contact_no"];
					
					
						
						if($area!='' && $username!='' && $address!=''  && $gender!='' && $dob!='' && $email!=''
						&& $password1!='' && $contact_no!='')
						{
							
							$sql = "insert into user(area_id,user_name,address,gender,user_dob,email,password,contact_no)	
							values('".$area."','".$username."','".$address."','".$gender."','".$dob."','".$email."','".$password1."','".$contact_no."')";
							
							$result=mysqli_query($conn,$sql);
			
							if($result)
							{
								echo "<meta http-equiv='refresh' content='0;index.php'>";
							}
						}
				}
				else
				{
				echo "value not set";
				}
			}
		}
				  
?>
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
								
									<label>Area*</label>
									<select name="txtarea" class="col-md-6 mb--20">
									<?php
                                $sql="select * from area";
								$result = mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($result))
								{
							 ?>
							 <option value="<?php echo $row['area_id'];?>"> <?php echo $row['area_name'];?>
								<?php
								}
								?>
                              </select>
							  
										<input type="text" placeholder="user Name" name="uname">
										<input type="text" placeholder="address" name="address">
										<input type="text" placeholder="gender" name="gender">
										<input type="date" placeholder="Date-of-birth" name="dob">
										<input type="email" placeholder="email" name="email">
										<input type="password" placeholder="Password" name="password1">
										<input type="text" placeholder="Contact number" name="contact_no">
									</div>
									
								    <button class="text-uppercase" type="submit" name="register">Register</button>
								</form>
							</div>
                        </div>	
                    </div>	
                </div>
            </div>
            <!--End of Register Form-->
			
			
			
			<?php


	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		if(isset($_POST["txtemail"]) && isset($_POST["txtpassword"]))
		{
			$Username = $_POST["txtemail"];
			$Password = $_POST["txtpassword"];
			if($Username !='' && $Password !='' )
			{

				$query = "select * from user where
				email = '".$Username."' and
				password='".$Password."' and isadmin=0";

				$result = mysqli_query($conn,$query);

					if(mysqli_num_rows($result) == 1)
					{
						$newpassword=$_POST["txtnewpassword"];
						$rnewpassword=$_POST["txtconpassword"];
					if($newpassword == $rnewpassword)
					{
						$query1="update user set password = '".$newpassword."'
						where email = '".$Username."'";
						$result1 = mysqli_query($conn,$query1);
						if($result1)
						{
								echo"<meta http-equiv='refresh' content='0;index.php'>";
						}
					}
					else
					{
						header("Location:reset.php?error=invalid new password");
					}
			}
			}
			else
			{
				echo "value is null";
			}
		}
		
	}

?>
		 <!--start of reset Form-->
			 <div class="modal fade" id="reset_box" tabindex="-1" role="dialog">
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
										<input type="text" placeholder="email" name="txtemail">
										<input type="password" placeholder="old Password" name="txtpassword">
										<input type="password" placeholder="new password" name="txtnewpassword">
										<input type="password" placeholder="confirm Password" name="txtconpassword">
									</div>
									<div class="checkobx-link">
									    
									    <div class="right-col"><a href="#">Forget Password?</a></div>
									</div>
								    <button type="submit">Sign In</button>
								</form>
							</div>
              
			  </div>	
                    </div>	
                </div>
            </div>
            <!--End of reset Form-->
        </header>
		
		
    <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="mobile-menu container">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.php">HOME</a>
                                <ul>
                                    <li><a href="index.php">Home </a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="shop.php">Shop</a></li>
                            
                            <li><a href="contact.php">Contact</a></li>
                            
                        </ul>
                    </nav>							
                </div>
            </div>
            <!-- Mobile Menu Area End -->
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
									
								    <button class="text-uppercase" type="submit">Register</button>
								</form>
							</div>
                        </div>	
                    </div>	
                </div>
            </div>
            <!--End of Register Form-->
        </header>		