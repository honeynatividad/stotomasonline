<?php
require("include/conn.php");
if(isset($_POST['submit'])) {
    $checkfield = $_POST['checkfield'];
    if(!empty($checkfield)) {
      
      $N = count($checkfield);
      for($i=0; $i < $N; $i++){
        echo '<br>NO--'.$checkfield[$i];
        mysql_query("UPDATE tblinsurance SET fldstatus = 'Archive' WHERE fldindex = $checkfield[$i]");
      }
      
    }
  }
 
?>
 <meta  http-equiv="refresh" content=".000001;url=admininsurance.php" />