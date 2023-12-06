<?php
session_start();
session_unset();
session_destroy();
$_SESSION = array(); 
require("include/conn.php");
$vemailx=$_REQUEST['vuid'];
mysql_query("DELETE FROM tblusertemp where fldemail='$vemailx'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta  http-equiv="refresh" content=".000001;url=login.php" />

<title>Untitled Document</title>
</head>

<body>
</body>
</html>