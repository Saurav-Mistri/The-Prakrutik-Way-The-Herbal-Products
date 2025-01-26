<?php 
session_start();
unset($_SESSION['u_name']);
session_destroy();

header("Location:index.php");
exit;
?>