<?php
define("DB_HOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","prakrutik");
$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
if(!$conn)
	{
	echo "error in connection";
	}
	else
	{
		//echo "connection successfull";
	}

?>