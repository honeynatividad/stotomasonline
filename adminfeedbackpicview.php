 <?php
session_start();
?>

<?php
require("include/conn.php");
$vun=$_SESSION['views'];
?>

<?php
if(isset($_SESSION['views']))
{
	require("include/conn.php");
	
	
	$vun=$_SESSION['views'];
	
	
	
	if($_SESSION['views']!="a")
  	{
  
		$result = mysql_query("SELECT * FROM tbluser where fldusername='$vun'");
		while($row = mysql_fetch_array($result))
		{
			$vuser=$row['fldfirstname']." ".$row['fldlastname'];	
            $vlastname=$row['fldlastname'];
            $vfirstname=$row['fldfirstname'];
            $rest = substr($vfirstname, 0, 1);
			$vusertype=$row['fldusertype'];			
			$vimage=$row['fldimage'];			
            $vfarmercodex=$row['fldcode'];			
 		}
        
        
    $vcodex=$_REQUEST['vuid'];
    $vfeedcodex=$_REQUEST['vuid1'];
   
    
    $result = mysql_query("SELECT * FROM tblfeedbackpic where fldcode='$vcodex'");
		while($row = mysql_fetch_array($result))
		{
            $vpicture=$row['fldpicture'];
            $vdescription=$row['flddescription'];
            $vfeedbackcodex=$row['fldseedplantedcode'];
            
 		}
    $result = mysql_query("SELECT * FROM tblfeedback where fldcode='$vfeedcodex'");
        while($row = mysql_fetch_array($result))
        {
            $vtit=$row['fldtitle'];
            $vfeedbackx=$row['fldfeedback'];
            $vstatusx=$row['fldstatus'];
            
        }
    //echo "aaa".$vstatusx;
  ?>    


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sto. Tomas City Agricultural Mapping Web Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    
    
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<link href="scroll.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <!-- End Logo -->

    
    
     <div class="pagetitle" align=left>
          <font color="blue"><?php echo $vtit; ?></font>
      
      
    
    </div><!-- End Page Title -->
    <!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <!-- End Sidebar-->

  <main id="main" class="main">

    <!-- End Page Title -->
      <script>
        function fSave1()
        {
            document.frm["txt1"].value=1;
            
										
        }
      </script>
        <?php
        
        
        $vtest=0;
								
        ///////////////////////////////////
        $vtestx=$_POST['txt1'];
        //
        
        if($vtest==0)
        {
            if($vtestx==1)
            {
                
                $vcodex=$_POST['txtcode'];
                $vdescriptionx=$_POST['txtdescription'];
                
                
                mysql_query("UPDATE tblfeedbackpic SET flddescription = '$vdescriptionx' WHERE fldcode = '$vcodex'");		
                ?>
                <script>
								    alert("Description Updated.");
								    </script>   
    		                                         
                                    <script>
                                    window.onunload = refreshParent;
                                    function refreshParent() {
                                        window.opener.location.reload();
                                    }
                                    </script>

                    
                                    <script> 
                                    setTimeout(function() {
                                    window.close()
                                    }, 100);
                                    </script>
              <?php  
            }
            
        } 
        
        ?>
      <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-6">

          <!-- Default Card -->
          <div class="card">
            <div class="card-body">
            <form action="farmfeedbackpicview.php" name="frm" class="row g-3 needs-validation" id="block-validate" method="post" novalidate>
                <input type="hidden" name="txt1" id="txt1">
                    <input type="hidden" name="txtpost" id="txtpost">
                    <input type="hidden" name="txtcode" id="txtcode" value="<?php echo $vcodex; ?>">
            <br>
            <img width="505" height="305" src="assets/img/<?php echo $vpicture; ?>">
            <hr/>
            <div class="row mb-6">
                <label for="validationCustom01" class="form-label col-sm-3 col-form-label">Edit Description</label>
                <div class="col-sm-8">
                
                  <input type="text"  class="form-control col-sm-12" readonly id="validationCustom01"  name="txtdescription" value="<?php echo $vdescription; ?>" required>
                
                </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div>
                    
                </div>
            </form>
            </div>
          </div><!-- End Default Card -->

          
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
	}

?> 
<?php
	}
	else
	{
		
	
		?>
    
        <meta  http-equiv="refresh" content=".000001;url=login.php" />
        <?php 	
	}

?>

