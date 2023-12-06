<?php
require("include/conn.php");
$vcode=$_REQUEST['vuid'];
$vinsurancecode=$_REQUEST['vuid1'];
mysql_query("DELETE FROM tblinsuranceaccomplish WHERE fldcode = '$vcode'");
?>
<meta  http-equiv="refresh" content=".000001;url=farminsuranceaccomplish.php?vuid=<?php echo $vinsurancecode; ?>" />