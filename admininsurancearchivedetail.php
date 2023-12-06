<?php
require("include/conn.php");
$vinsurancecode=$_POST['vinsurancecodex'];
if(isset($_POST['submit'])) {
  $vinsurancecode=$_POST['vinsurancecodex'];
    $checkfield = $_POST['checkfield'];
    if(!empty($checkfield)) {
      
      $N = count($checkfield);
      for($i=0; $i < $N; $i++){
        mysql_query("UPDATE tblinsuranceaccomplish SET fldstatus = 'Archive' WHERE fldindex = $checkfield[$i]");
      }
      
    }
  }
 
?>
<meta  http-equiv="refresh" content=".000001;url=admininsuranceview.php?vuid=<?php echo $vinsurancecode; ?>" />