<?php
require("include/conn.php");
$vcodex=$_REQUEST['vuid'];
$vfeedbackcodex=$_REQUEST['vuid1'];
$result = mysql_query("SELECT * FROM tblfeedback where fldcode='$vfeedbackcodex'");
        while($row = mysql_fetch_array($result))
        {
            $vtitlex=$row['fldtitle'];
            $vfeedbackx=$row['fldfeedback'];
            $vstatusx=$row['fldstatus'];
            
        }





?>
<!DOCTYPE html>
<html>
<head>
   <title> Call JavaScript function on page load. </title>
</head>
   <body >
   
       
    <script>
    window.onload = myFunction0();
    function myFunction0() {
                                                    
     window.open("farmfeedbackpicview.php?vuid=<?php echo $vcodex; ?>&vuid1=<?php echo $vfeedbackcodex; ?>", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=100,left=300,width=700,height=550");
    }
    </script>  
    
    <meta  http-equiv="refresh" content=".0000001;url=farmfeedbackpic.php?vuid=<?php echo $vfeedbackcodex; ?>" />
</body>
</html>