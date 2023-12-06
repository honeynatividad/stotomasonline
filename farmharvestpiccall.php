<?php
$vcodex=$_REQUEST['vuid'];



?>
<!DOCTYPE html>
<head>
   <title> Call JavaScript function on page load. </title>
</head>
   <body >
   
       
    <script>
    window.onload = myFunction0();
    function myFunction0() {
                                                    
     window.open("farmharvestcropspicview.php?vuid=<?php echo $vcodex; ?>", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=100,left=300,width=700,height=500");
    }
    </script>  
    
    <meta  http-equiv="refresh" content=".0000001;url=aluedback.php?vuid=<?php echo $valumnicode; ?>" />
</body>
</html>