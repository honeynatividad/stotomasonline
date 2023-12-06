<?php
//$con = mysql_connect("localhost","pma");
error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysql_connect("localhost","root","");
	if (!$con)
	{
	  	die('Could not connect: ' . mysql_error());
  	}
	mysql_select_db("dbstotomas", $con);
	//mysql_select_db("fromariz", $con);
	error_reporting (E_ALL ^ E_NOTICE);
?>