<?php
$vcodex=$_REQUEST['vuid'];
$vcodex1=$_REQUEST['vuid1'];
$vcropsx=$_REQUEST['vuid2'];




?>
<!DOCTYPE html>
<head>
   <title> Call JavaScript function on page load. </title>
</head>
   <body >
   
       
    <script>
    window.onload = myFunction0();
    function myFunction0() {
                                                    
     window.open("farmharvestcropspicview.php?vuid=<?php echo $vcodex; ?>&vuid1=<?php echo $vcropsx; ?>", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=100,left=300,width=700,height=550");
    }
    </script>  
    
    <meta  http-equiv="refresh" content=".0000001;url=farmharvestcropspic.php?vuid=<?php echo $vcodex1; ?>&vuid1=<?php echo $vcropsx; ?>" />
</body>
</html>