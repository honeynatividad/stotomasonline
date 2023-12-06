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
        
        
    $vseedplantedcodex=$_REQUEST['vuid'];
    $vcropsx=$_REQUEST['vuid1'];
    
    $result = mysql_query("SELECT * FROM tblpicharvest where fldcode='$vpicharvestcodex'");
		while($row = mysql_fetch_array($result))
		{
            $vpicture=$row['fldpicture'];
            $vdescription=$row['flddescription'];
            $vseedplantedcodex=$row['fldseedplantedcode'];
            
 		}
    if($vpicture=="")
    {
        $vpicture="blank.jpg";
    }
  ?>    


<!DOCTYPE html>


<head>
    

  <title>Sto. Tomas City Agricultural Mapping Web Portal</title>
    
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
          <font color="blue"><?php echo $vcropsx; ?></font>
      
      
    
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
                
                $vctr=0;
				$result = mysql_query("SELECT * FROM tblpicharvest order by fldindex");
				while($row = mysql_fetch_array($result))
				{
					$vctr=$row['fldindex'];
				}
				$vctr=$vctr+1;
				$vcodex="HPIC".$vctr;
                
                
                $vdescriptionx=$_POST['txtdescription'];
                $vcropsx=$_POST['txtcrops'];
                $vseedplantedcodex=$_POST['txtseedplantedcode'];
                
                $target = "assets/img/";
				$target = $target . basename( $_FILES['photo']['name']);
		
                $pic=($_FILES['photo']['name']);
				
                echo $pic;
                
				if($pic=="")
				{
				    $pic="blank.jpg";
				}
                
                $sql="INSERT INTO tblpicharvest (fldindex, fldcode, fldseedplantedcode, fldpicture, flddescription) 
	VALUES ('$vctr','$vcodex','$vseedplantedcodex','$pic','$vdescriptionx')";

										if (!mysql_query($sql,$con))
										{
  											die('error: ' . mysql_error());
  										}
										//Writes the photo to the server
   										 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
									    {

											basename( $_FILES['uploadedfile']['name']);

										    //Tells you if its all ok
										    //echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been 

											//uploaded, and your information has been added to the directory";
									    }
									    else {

										    //Gives and error if its not
											  //  echo "Sorry, there was a problem uploading your file.";
									    }
                ?>
                <script>
								    alert("New Picture Added.");
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
            <form action="farmharvestcropspicadd.php" name="frm" enctype="multipart/form-data" class="row g-3 needs-validation" id="block-validate" method="post" novalidate>
                <input type="hidden" name="txt1" id="txt1">
                    <input type="hidden" name="txtpost" id="txtpost">
                    <input type="hidden" name="txtseedplantedcode" id="txtseedplantedcode" value="<?php echo $vseedplantedcodex; ?>">
                    <input type="hidden" name="txtcrops" id="txtcrops" value="<?php echo $vcropsx; ?>">
            <br>
            
            <hr/>
            <div class="row mb-6">
                <label for="validationCustom01" class="form-label col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                
                  <input type="text"  class="form-control col-sm-12" id="validationCustom01"  name="txtdescription" value="<?php echo $vdescription; ?>" required>
                
                </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div  data-provides="fileupload">
                    
                    <input type="file" id="photo" name="photo"  title="Upload New Picture">
                    
                </div>
                <div>
                    
                    
                    <button class="btn btn-primary btn-sm" type="submit" onClick="fSave1()">Submit</button>
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
    
        <meta  http-equiv="refresh" content=".000001;url=http://localhost/stotomas/index.php" />
        <?php 	
	}

?>

