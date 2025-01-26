<?php
session_start();
if(!isset($_SESSION["u_id"]))
{
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}


require_once("../../../../config/connection.php");

//$uid=$_SESSION['username'];
//if(isset($_SESSION['userid']))
//{
	//$pid=$_GET['productid'];
	//$sql="Select * from product p join Product_Image pi where p.Product_Id=pi.Product_Id and p.Product_Id = '".$pid."'";

	$d = date("Y-m-d");
	$uid=$_SESSION['u_id'];
	$pid=$_GET['p_id'];
	$qty = $_GET['qty'];
	
	$sql1 = "select p_price from product where p_id = '".$pid."'";
	
	$result1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_array($result1);
	$amount = $row1['p_price'];
	
	$total = $amount * $qty;

	$sql3 = "select * from cart where p_id=$pid and u_id=$uid";
	$result3 = mysqli_query($conn,$sql3);
	  
	  if(mysqli_num_rows($result3) == 1)
	  {
		$row3 = mysqli_fetch_array($result3);  
		$q = $row3['c_qty'];
		$amt = $row3['amnt'];
		$amt = $amt + $total;
		$nq = $q + $qty;
		$sql = "update cart set c_qty = $nq , amnt = $amt where u_id = $uid and p_id=$pid"; 	
	  }
	  else
	  {
		$sql = "insert into cart(u_id,c_qty,p_id,amnt,c_date)values('".$uid."','".$qty."','".$pid."','".$total."','".$d."')";
	  }
	//echo $sql;
	//die;

	$result=mysqli_query($conn,$sql);
	
	if($result)
	{
		echo "<meta http-equiv='refresh' content='0;url=cart.php'>";
		//header("location:cart.php");
	}	
//else 
//{
//	echo "Value not set";
//}
?>