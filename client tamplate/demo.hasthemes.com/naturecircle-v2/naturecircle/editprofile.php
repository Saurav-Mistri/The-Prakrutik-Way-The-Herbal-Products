<!doctype html>
 <?php
		include("header1.php");
		require_once("../../../../config/connection.php");
		
//session_start();
$uid=$_SESSION['u_id'];
$sql = "select * from user u join area a where u.area_id = a.area_id and u.u_id = '".$uid."'";

$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$aid = $row['area_id'];
	//selecting the row from table
	$sql1="Select * from user where u_id = '".$uid."'";
	$result1=mysqli_query($conn,$sql1);

	$row1 = mysqli_fetch_array($result1);

?>
<html class="no-js" lang="en">
    
    
<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:08:56 GMT -->

        <!-- Header Area Start -->
   

        <!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-12 text-center">
            <div class="container">
                <h1>Edit profile</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit profile</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
       
        <!-- Contact Area Start -->
        <div class="contact-area fix mb-95">
            <div class="contact-form pt-110">
               
                <form  method="post">
				<div class="col-md-6">
				<label>Area*</label><br>
			
									<select name="txtarea" style="width:250px;">
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
                   </div>
				   <div class="col-md-6">
						<label>Gender*</label>
						<select name="gender" style="width:250px;">
							<option>Male</option>
							<option>Female</option>
						</select><br><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" style="width:250px;" name="name" id="name" placeholder="user name*" value="<?php echo $row1['user_name'];?>">
                        </div>
						<br>
                        <div class="col-md-6">
                            <input type="text" style="width:250px;" name="address" id="l_name" placeholder="address" value="<?php echo $row1['address'];?>">
                        </div>
						<br>
                        <div class="col-md-6">
                            <input type="date" style="width:250px;" name="dob" id="subject" placeholder="DOB" value="<?php echo $row1['user_dob'];?>">
                        </div>
                    <br>
                        <div class="col-md-6">
                            <input type="email" style="width:250px;" name="email" id="subject" placeholder="email" value="<?php echo $row1['email'];?>">
                        </div>
                    <br>
                       
                        <div class="col-md-6">
                            <input type="text" style="width:250px;" name="cnum" id="subject" placeholder="contact number" value="<?php echo $row1['contact_no'];?>">
                        </div>
                  <div>
				  <br>
				  <input type="submit" value="Update" class="p-cart-btn default-btn" />
				  </div>
                       
				
                  
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
			$sql = "update user set area_id='".$area1."',user_name='".$uname1."',address='".$address1."',gender='".$gender1."',email='".$email1."',user_dob='".$dob1."',contact_no='".$cnum1."' where u_id = '".$id."'";
		//echo $sql;
		//die;
			$result=mysqli_query($conn,$sql);
			
			if($result)
			{
				echo "<meta http-equiv='refresh' content='0;url=index.php'>";

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