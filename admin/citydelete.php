<?php

require_once("../config/connection.php");
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="DELETE FROM city WHERE city_id='".$id."'";
$result=mysqli_query($conn,$sql);

if($result)
{
		header("Location:city.php");
}

}

?>