<?php

require_once("../config/connection.php");
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="DELETE FROM sub_category WHERE sub_category_id='".$id."'";
$result=mysqli_query($conn,$sql);
}
header("Location:subcategory.php");
?>