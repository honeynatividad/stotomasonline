<?php
	require("include/conn.php");
	$COOKIE_ID = $_COOKIE['Email'];
	$prod_code = $_GET['vuid'];
	mysql_query("DELETE FROM tblannouncement WHERE fldcode = '$prod_code'") or die($con->connect_error); 
	echo "<script language='javascript' type='text/javascript'>alert('Announcement Deleted Successfully!')</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('adminpagecontentannouncement.php','_self')</script>";
	//Audit Trail
	mysql_query($con, "INSERT INTO `tblusertemp` (fldemail) 
	VALUES ('$COOKIE_ID','Had Deleted an announcement')") or die($con->connect_error);
?>