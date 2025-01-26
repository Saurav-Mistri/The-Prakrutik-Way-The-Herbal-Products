<?php

		require_once('../../config/connection.php');
		
session_start();
$uid=$_SESSION['user_name'];
$sql = "select * from user u join area a where u.area_id = a.area_id and u.u_id = '".$uid."'";

$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$aid = $row['area_id'];
	//selecting the row from table
	$sql1="Select * from user where u_id = '".$uid."'";
	$result1=mysqli_query($conn,$sql1);

	$row1 = mysqli_fetch_array($result1);

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
            <div class="card-header text-center"><a href="../index.php"><img class="logo-img" src="../assets/images/logop.png" alt="logo" width=170 height=70	></a><span class="splash-description">Update your information.</span></div>
            <div class="card-body">
                <form method="post">

							<label>Area*</label>
			
									<select name="txtarea" class="form-control"style="width:250px;">
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
							  <br>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="name" id="username" type="text" placeholder="Username" autocomplete="off" value="<?php echo $row1['user_name'];?>">
                    </div>
                    
					<div class="form-group">
                        <input class="form-control form-control-lg" name="address" id="username" type="text" placeholder="Address" autocomplete="off"  value="<?php echo $row1['address'];?>">
                    </div>
					<div class="form-group">
                        <select name="gender" class="form-control"style="width:250px;">
							<option>Male</option>
							<option>Female</option>
						</select>
                    </div>
					<div class="form-group">
                        <input class="form-control form-control-lg" name="dob" id="username" type="date" placeholder="date" autocomplete="off" value="<?php echo $row1['user_dob'];?>">
                    </div>
					<div class="form-group">
                        <input class="form-control form-control-lg" name="email" id="username" type="email" placeholder="email" autocomplete="off" value="<?php echo $row1['email'];?>">
                    </div>
					<div class="form-group">
                        <input class="form-control form-control-lg" name="cnum" id="username" type="text" placeholder="Contact Number" autocomplete="off" value="<?php echo $row1['contact_no'];?>">
                    </div>					
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                </form>
				<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_POST["txtarea"]) && isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["gender"]) && isset($_POST["dob"]) && isset($_POST["email"]) && isset($_POST["cnum"]) )
	{
		$area1=$_POST["txtarea"];
		$uname1=$_POST["name"];
		$address1=$_POST["address"];
		$gender1=$_POST["gender"];
		$dob1=$_POST["dob"];
		$email1=$_POST["email"];
		$cnum1=$_POST["cnum"];
		
		if( $area1!='' && $uname1!='' && $address1!='' && $gender1!='' && $dob1!='' && $email1!='' && $cnum1!='')
		{
			$sql = "update user set area_id='".$area1."',user_name='".$uname1."',address='".$address1."',gender='".$gender1."',email='".$email1."',user_dob='".$dob1."',contact_no='".$cnum1."' where u_id = '".$uid."'";
		//echo $sql;
		//die;
			$result=mysqli_query($conn,$sql);
			
			if($result)
			{
				echo "<meta http-equiv='refresh' content='0;url=../index.php'>";

			}
		}
		else
		{
			echo "Value is Null";
		}
	}
	else
	{
		echo "value not set";
	}
}	
?>     
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