<?php

require_once("../config/connection.php");
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="DELETE FROM product WHERE p_id='".$id."'";
$result=mysqli_query($conn,$sql);
}
header("Location:product.php");
?>