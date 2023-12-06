<?php
	require("include/conn.php");
	$Username = serialize(array_merge($_COOKIE)); 
	$COOKIE_ID = $_COOKIE['Email'];
	$prod_code = $_GET['vuid'];
	mysql_query("DELETE FROM tbluser WHERE fldcode = '$prod_code'") or die($con->connect_error); 
	echo "<script language='javascript' type='text/javascript'>alert('Product Deleted Successfully!')</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('adminfarmers.php','_self')</script>";
	//Audit Trail
	mysql_query($con, "INSERT INTO `tblusertemp` (fldemail) 
	VALUES ('$COOKIE_ID','Had Deleted a User')") or die($con->connect_error);
?>