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
            $vusercode=$row['fldcode'];			
 		}
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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="farmdashboard.php" class=" d-flex align-items-center">
        <img src="assets/img/banner.jpg" height="60" alt="">
        <span class="d-none d-lg-block"></span>
      </a>
     
    </div><!-- End Logo -->
    
    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
          <?php
      $vctrn=0;
        $result = mysql_query("SELECT * FROM tblnotificationf where fldstatus='Not Yet Viewed' order by fldindex");
        while($row = mysql_fetch_array($result))
        {
            //$vctr=$row['fldindex'];
            $vctrn=$vctrn+1;
        }
        
    ?>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
          <button type="button" class="btn btn-success" onclick="myFunction2()"><i class="bi bi-chat-dots"></i></button>&nbsp;&nbsp;&nbsp;
          <script>
            function myFunction2() {
                window.open("farmchat.php", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=300,left=500,width=400,height=570");
            }
            </script>
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
            
            
        </li><!-- End Search Icon-->
          <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
              <?php
                if($vctrn!=0)
                {
                ?>
            <span class="badge bg-danger badge-number"><?php echo $vctrn; ?></span>
              <?php
                }
                ?>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
                <a onclick="myFunction1()"> <font color=blue>You have <?php echo $vctrn; ?> new notifications</font></a>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php   
            ////////////////////////////////////////////////////////////////////////////////////////////////start
            $result = mysql_query("SELECT * FROM tblnotificationf where fldstatus='Not Yet Viewed' order by fldindex");
            while($row = mysql_fetch_array($result))
            {
                $vtitle=$row['fldtitle'];
                $vsubtitle=$row['fldsubtitle'];
                $vdate=$row['flddate'];
            ?>
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-primary"></i>
              <div>
                <h4><?php echo $vtitle; ?></h4>
                <p><?php echo $vsubtitle; ?></p>
                <p><?php echo $vdate; ?></p>
                 
                 
              </div>
               
            </li>
            <?php
            }
            /////////////////////////////////////////////////////////////////////////////////////////////////end
            ?>
            <li>
              <hr class="dropdown-divider">
            
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#" onclick="myFunction1()">Show all notifications</a>
            <script>
            function myFunction1() {
                window.open("notificationviewf.php?vuid=<?php echo $vcode; ?>", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=400,left=300,width=800,height=600");
            }
            </script>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        <!-- End Notification Dropdown Items -->

        <!-- End Notification Nav -->

        <!-- End Messages Dropdown Items -->

        <!-- End Messages Nav -->
          
        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/<?php echo $vimage; ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $vlastname.", ".$rest; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $vuser; ?></h6>
              <span><?php echo $vusertype; ?></span>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="farmprofile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="lo.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="farmdashboard.php">
          <i class="bi bi-vinyl"></i>
          <span>Seed Request</span>
        </a>
      </li>    
    <li class="nav-item">
        <a class="nav-link collapsed" href="farmplantseeds.php">
          <i class="bi bi-sliders"></i>
          <span>Planting Seeds</span>
        </a>
      </li>    
    <li class="nav-item">
        <a class="nav-link collapsed" href="farmharvestcrops.php">
          <i class="bi bi-slack"></i>
          <span>Harvesting Crops</span>
        </a>
      </li>    
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="farmplantcalendar.php">
          <i class="bi bi-calendar4-range"></i>
          <span>Planting Calendar</span>
        </a>
      </li>    
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="farminsurance.php">
          <i class="bi bi-journal-bookmark"></i>
          <span>Insurance</span>
        </a>
      </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="farmfeedback.php">
          <i class="bi bi-chat-text"></i>
          <span>Feedback</span>
        </a>
      </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="farmreports.php">
          <i class="bi bi-files"></i>
          <span>Reports</span>
        </a>
      </li> 
    <!-- End Dashboard Nav -->

      <!-- End Contact Page Nav -->

      <!-- End Register Page Nav -->

      <!-- End Login Page Nav -->

      <!-- End Error 404 Page Nav -->

      <!-- End Blank Page Nav -->

    </ul>
<!-- End Menu -->
  </aside><!-- End Sidebar-->

  <main id="main" class="main">


    <div class="pagetitle">
      <h5><i class="bi bi-vinyl"></i>&nbsp;Seed Request / Edit</h5>
     
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="farmdashboard.php">Seed Request</a></li>
            <li class="breadcrumb-item">Edit</li>
        </ol>
      </nav>
     
    </div><!-- End Page Title -->
    
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <br>
             
            
            <?php
    ////////////////////////////////////////////////save data
    ?>
    <script>
        function fSave1()
        {
            document.frm["txt1"].value=1;
            
										
        }
      </script>
    
    <?php
    
        $vcodex=$_REQUEST['vuid'];
								
        $result = mysql_query("SELECT * FROM tblseedrequested where fldcode='$vcodex'");
        while($row = mysql_fetch_array($result))
        {
            $vcropcodex=$row['fldrequestedseed'];
            $vrequestedqtyx=$row['fldrequestedqty'];
            
            $vselectdate=$row['flddaterequested'];
            $vdatex = new DateTime($vselectdate);
            $vdaterequestedx = $vdatex->format("Y-m-d");	

        }
        $result = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcodex'");
        while($row = mysql_fetch_array($result))
        {
            $vcropsx=$row['fldcrops'];
        }
        
        $vtest=0;
								
        ///////////////////////////////////
        $vtestx=$_POST['txt1'];
        //
        
        if($vtest==0)
        {
            if($vtestx==1)
            {
                //echo "aa".$vtestx;
                
                $vcodex=$_POST['txtcode'];
                $vrequestedbyx=$_POST['txtrequestedby'];
                $vrequestedseedx=$_POST['txtrequestedseed'];
	           $vrequestedqtyx=$_POST['txtrequestedqty'];
                
                
                $vselectdate=$_POST['txtdaterequested'];
                $vdatex = new DateTime($vselectdate);
                $vdaterequestedx = $vdatex->format("Y-m-d");	

                
               mysql_query("UPDATE tblseedrequested SET fldrequestedseed = '$vrequestedseedx',fldrequestedqty = '$vrequestedqtyx',flddaterequested = '$vdaterequestedx' WHERE fldcode = '$vcodex'");		
                
                 ?>
                    <script>
				    alert("Seed Request Updated.");	
				    </script>   
    		          <meta  http-equiv="refresh" content=".000001;url=farmdashboard.php" />
            	       <?php   
            }
        }
    /////////////////////////////////////////////////////////
    ?>
             <!-- Custom Styled Validation -->
            <form action="farmseedreqedit.php" name="frm" class="row g-3 needs-validation" id="block-validate" method="post" novalidate>
             <!--  <form class="row g-3 needs-validation" method="post" name="frm" id="block-validate" action="adminadminadd.php" enctype="multipart/form-data"  novalidate>-->
                    <input type="hidden" name="txt1" id="txt1">
                    <input type="hidden" name="txtpost" id="txtpost">
                    <input type="hidden" name="txtrequestedby" id="txtrequestedby" value="<?php echo $vusercode; ?>">
                    
                
                <div class="row mb-3">
                  <label for="validationCustom01" class="form-label col-sm-2 col-form-label">Code</label>
                  <div class="col-sm-3">
                  <input type="text"  class="form-control col-sm-6" id="validationCustom01" readonly name="txtcode" value="<?php echo $vcodex; ?>" required>
                    </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputState" class="form-label col-sm-2 col-form-label">Crop Name</label>
                 <div class="col-sm-8">
                  <select id="inputState" class="form-select" name="txtrequestedseed">
                    <option value="<?php echo $vcropcodex; ?>"><?php echo $vcropsx; ?></option>
                    <?php
                    $result = mysql_query("SELECT * FROM tblcrops order by fldindex");
				    while($row = mysql_fetch_array($result))
				    {
                    ?>
                    <option value="<?php echo $row['fldcode']; ?>"><?php echo $row['fldcrops']; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                    </div>
                </div>
                
                
                
                <div class="row mb-3">
                  <label for="validationCustom01" class="form-label col-sm-2 col-form-label">Seed Quantity</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control col-sm-2" placeholder="0.0" id="validationCustom01" name="txtrequestedqty" value="<?php echo $vrequestedqtyx; ?>" required>  
                    </div>
                
                    <label for="inputDate" class="col-sm-2 col-form-label">Request Date</label>
                  <div class="col-sm-3">
                    <input type="date" class="form-control" name="txtdaterequested" required value=<?php echo $vdaterequestedx; ?>>
                  </div>
               
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="col-12">
                  <button class="btn btn-primary" type="submit" onClick="fSave1()">Submit</button>
                  <button class="btn btn-warning" type="button" onclick="window.location.href='farmdashboard.php'">Return</button>
                </div>
              </form><!-- End Custom Styled Validation -->

            </div>
          </div>

        </div>
            <!-- Sales Card -->
            <!-- End Sales Card -->

            <!-- Revenue Card -->
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <!-- End Customers Card -->

            <!-- Reports -->
            <!-- End Reports -->

            <!-- Recent Sales -->
            <!-- End Recent Sales -->

            <!-- Top Selling -->
            <!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>City of Sto. Tomas Batangas</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      
    </div>
  </footer><!-- End Footer -->

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

