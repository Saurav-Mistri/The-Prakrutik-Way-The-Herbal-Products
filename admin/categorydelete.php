<?php

require_once("../config/connection.php");
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="DELETE FROM category WHERE c_id='".$id."'";
$result=mysqli_query($conn,$sql);
}
header("Location:category.php");
?>