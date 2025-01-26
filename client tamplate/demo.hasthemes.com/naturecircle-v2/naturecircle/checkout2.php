<?php
session_start();
require_once("../../../../config/connection.php");
$uid=$_SESSION['u_id'];
$sql="select * from cart where u_id='".$uid."'";
$result=mysqli_query($conn,$sql);
$d= date("Y-m-d");
$t=$_GET['amnt'];
$sql1="insert into `order_master`(order_date,payment_status,u_id)
values('".$d."',0,'".$uid."')";
//echo $sql1;
//die;
$result1=mysqli_query($conn,$sql1);
$oid=mysqli_insert_id($conn);
//echo $oid;
//die;
while($row=mysqli_fetch_array($result))
{
	$pid=$row['p_id'];
	$qty=$row['c_qty'];
	$amount=$row['amnt'];
    $sql2="insert into order_item(p_id,c_qty,o_id,amnt)values('".$pid."','".$qty."','".$oid."','".$amount."')";
	$result2=mysqli_query($conn,$sql2);
	//echo $sql2;
	//die;
}
$sql3="delete from cart where u_id='".$uid."'";
$result3=mysqli_query($conn,$sql3);
echo "<meta http-equiv='refresh' content='0;url=checkout.php?id=$oid&amt=$t&qty=$qty'>";
	
?>
