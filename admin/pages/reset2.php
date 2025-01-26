<?php 
//$id;
if(isset($_GET['email']))
{
	$id=$_GET['email'];
}

//session_start();
require_once('../../config/connection.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	//$id=$_SESSION['user_name'];
	$otp = $_POST['otp'];
	$nPass = $_POST['npassword'];
	$cPass = $_POST['cpassword'];
	
	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	}
	
	$query = "update user set otp_used = 1, 
	password = '".$nPass."' where email='".$id."' and 
	otp = '".$otp."'";
	
	
	$result = mysqli_query($conn, $query);
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset !');
						window.location='login.php';
					</script>";
	
	
	}
	
}
?>
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
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../assets/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="otp" id="username" type="text" placeholder="OTP" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="npassword" id="password" type="password" placeholder=" new Password">
                    </div>
					<div class="form-group">
                        <input class="form-control form-control-lg" name="cpassword" id="password" type="password" placeholder=" confirmpassword" autocomplete="off">
                    </div>
                   
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
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