<?php

require_once('../../config/connection.php');
session_start();
$usern = $pswd = $a = "";
$error="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["Username"]))
		{
		$usern = "Name Is Mandatory";
		}
		else
		{
			$user = $_POST["Username"];
		}
		if(empty($_POST["Password"]))
		{
			$pswd = "Password Is Mandatory";
		}
		else
		{
			$password = $_POST["Password"];
		}

		if(isset($_POST["Username"]) && isset($_POST["Password"]))
		{
			$Username = $_POST["Username"];
			$Password = $_POST["Password"];
			
			if( $Username!='' && $Password !='')
			{
				$sql= "select * from user where user_name = '".$Username."' and password='".$Password."' and isadmin=1";

				$result=mysqli_query($conn,$sql);
				
				$row = mysqli_fetch_array($result);
				
				if(mysqli_num_rows($result)==1)
					
				{
					session_start();
					
					$_SESSION["user_name"] = $row["u_id"];
					
					
						header("Location:../index.php");
				}
				else
				{
					echo"Invalid password";
				}
			}
		}	
}
?>
<style>
.error
{
	color:#FF0000;
}
</style>
<!doctype html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/influence/landingpage/influence/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 10:23:56 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../assets/images/logop.png" alt="logo" width=190 height=90	></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="Username" id="username" type="text" placeholder="Username" autocomplete="off">
						<span class="error"><?php echo $usern;?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="Password" id="password" type="password" placeholder="Password">
						<span class="error"><?php echo $pswd;?></span>
                    </div>
                    	<?php
									if(isset($_GET['error']))
									{
										echo "<span style='color:red'>" .$_GET['error']."</span>";
									}
										?>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="reset1.php" class="footer-link">Reset password</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forget.php" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/influence/landingpage/influence/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 10:23:56 GMT -->
</html>