<?php require_once('../../../../config/connection.php'); ?> 
<?php

session_start();

$error="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

		if(isset($_POST["txtemail"]) && isset($_POST["txtpassword"]))
		{
			$email1 = $_POST["txtemail"];
			$password1 = $_POST["txtpassword"];
			
			if( $email1!='' && $password1 !='')
			{
				 $sql= "select u_id,email,password,user_name from user where email= '".$email1."' and password='".$password1."' and isadmin = 0";

				$result=mysqli_query($conn,$sql);
				
				$row = mysqli_fetch_array($result);
				
				if(mysqli_num_rows($result)==1)
					
				{
					session_start();
					
					$_SESSION["u_id"] = $row["u_id"];
					$_SESSION["u_id"] = $email1;
					
						echo "<meta http-equiv='refresh' content='0;index.php'>";
				}
				else
				{
					echo"Invalid password";
				}
			}
		}	
}
?>
<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:08:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>login form</title>
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
    </head>
    <body>
        
       
           
         
      
       
        <!-- Contact Area Start -->
        <div class="contact-area fix mb-95">
            <div class="contact-form pt-110">
                <h1 class="contact-title">Login Form</h1>
                <form id="contact-form" action="index.php" method="post">
                    <div class="row">
                       <div class="col-md-6">
                            <input type="text" name="txtemail" id="name" placeholder="Email">
                  <br>  <input type="password" name="txtpassword" id="l_name" placeholder="Password">
                        </div>
                       
                    </div>
                    
                    <button type="submit" >
                        <span></span>sign in
                    </button>
                  
                </form>
            </div>
           
        </div>
       
        
       
    </body>

<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:09:03 GMT -->
</html>