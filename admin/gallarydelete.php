<?php

require_once("../config/connection.php");
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="DELETE FROM gallery WHERE img_id='".$id."'";
$result=mysqli_query($conn,$sql);

if($result)
{
		header("Location:gallery.php");
}

}

?>