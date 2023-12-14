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
            $vcode=$row['fldcode'];			
            $vfacode=$row['fldcode'];			
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
      <a href="dashboard.php" class=" d-flex align-items-center">
        <img src="assets/img/banner.jpg" height="60" alt="">
        <span class="d-none d-lg-block"></span>
      </a>
     <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <?php
      $vctrn=0;
        $result = mysql_query("SELECT * FROM tblnotification where fldstatus='Not Yet Viewed' order by fldindex");
        while($row = mysql_fetch_array($result))
        {
            //$vctr=$row['fldindex'];
            $vctrn=$vctrn+1;
        }
        
    ?>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <!-- End Search Icon-->
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
                <font color=blue>You have <?php echo $vctrn; ?> new notifications</font>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php   
            ////////////////////////////////////////////////////////////////////////////////////////////////start
            $result = mysql_query("SELECT * FROM tblnotification where fldstatus='Not Yet Viewed' order by fldindex");
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
                window.open("notificationview.php?vuid=<?php echo $vfacode; ?>", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=400,left=300,width=800,height=600");
            }
            </script>
            </li>

          </ul><!-- End Notification Dropdown Items -->
    

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
              <a class="dropdown-item d-flex align-items-center" href="adminprofile.php">
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

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link  " href="dashboard.php">
          <i class="ri ri-dashboard-3-line"></i>
          <span>Dashboard
            </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="adminadmin.php">
          <i class="bi bi-people"></i>
          <span>Users
            </span>
        </a>
      </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="admincrops.php">
          <i class="bi bi-flower1"></i>
          <span>Crops</span>
        </a>
      </li>    
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminbarangays.php">
          <i class="bi bi-shop"></i>
          <span>Barangays</span>
        </a>
      </li>    
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminplantcalendar.php">
          <i class="bi bi-calendar4-range"></i>
          <span>Planting Calendar</span>
        </a>
      </li>    
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminheatmapfarmer.php">
          <i class="bi bi-globe2"></i>
          <span>Heat Map</span>
        </a>
      </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="admininsurance.php">
          <i class="bi bi-journal-bookmark"></i>
          <span>Insurance</span>
        </a>
      </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminfeedback.php">
          <i class="bi bi-chat-text"></i>
          <span>Feedback</span>
        </a>
      </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminreports.php">
          <i class="bi bi-files"></i>
          <span>Reports</span>
        </a>
      </li> 
        <li class="nav-item">
        <a class="nav-link collapsed" href="adminpagecontent.php">
          <i class="bi bi-aspect-ratio"></i>
          <span>Page Content</span>
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
      <h5><i class="ri ri-dashboard-3-line"></i>&nbsp;Dashboard</h5> 
      
    
    </div><!-- End Page Title -->
<?php
  $vselectdate=date("Y-m-d");
                $vdatex = new DateTime($vselectdate);
                $vdatetoday = $vdatex->format("Y-m-d");	
        
       /////////////////////////////seed request
        
        $vcountsrtoday=0;
				        $result = mysql_query("SELECT * FROM tblseedrequested where flddaterequested='$vdatetoday' && fldstatus='For Distribution' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountsrtoday=$vcountsrtoday+$row['fldrequestedqty'];
                            
                        }
        
        $vcountsrtotal=0;
				        $result = mysql_query("SELECT * FROM tblseedrequested where fldstatus='For Distribution' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountsrtotal=$vcountsrtotal+$row['fldrequestedqty'];
                            
                        }
        
     //////////////////////////////////////////
        
     /////////////////////////////seed distribution
        
        $vcountsdtoday=0;
				        $result = mysql_query("SELECT * FROM tblseedrequested where flddaterequested='$vdatetoday' && fldstatus='Distributed' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountsdtoday=$vcountsdtoday+$row['fldrequestedqty'];
                            
                        }
        
        
        $vcountsdtotal=0;
				        $result = mysql_query("SELECT * FROM tblseedrequested where fldstatus='Distributed' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountsdtotal=$vcountsdtotal+$row['fldrequestedqty'];
                            
                        }
        
     //////////////////////////////////////////
        
    /////////////////////////////seed planted
        
        $vcountsptoday=0;
				        $result = mysql_query("SELECT * FROM tblseeddistribution where flddate='$vdatetoday' && fldstatus='Seed Planted' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountsptoday=$vcountsptoday+$row['fldseeddistributed'];
                            
                        }
        
        $vcountsptotal=0;
				        $result = mysql_query("SELECT * FROM tblseeddistribution where fldstatus='Seed Planted' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountsptotal=$vcountsptotal+$row['fldseeddistributed'];
                            
                        }
        
     //////////////////////////////////////////
        
    /////////////////////////////harvest crops
        
        $vyieldtoday=0;
				        $result = mysql_query("SELECT * FROM tblseedplanted where fldharvestdateend='$vdatetoday' && fldyield!='0' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vyieldtoday=$vyieldtoday+$row['fldyield'];
                            
                        }
        
        $vyield=0;
				        $result = mysql_query("SELECT * FROM tblseedplanted where  fldyield!='0' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vyield=$vyield+$row['fldyield'];
                            
                        }
        
     //////////////////////////////////////////
        
        
    /////////////////////////////feedback
        
        $vcountftoday=0;
				        $result = mysql_query("SELECT * FROM tblfeedback where fldstatus='Yes' && flddate='$vdatetoday'");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountftoday=$vcountftoday+1;
                            
                        }
        
        $vcountf=0;
				        $result = mysql_query("SELECT * FROM tblfeedback where fldstatus='Yes'");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountf=$vcountf+1;
                            
                        }
        
     //////////////////////////////////////////      
?>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Seed Request Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                  <h5 class="card-title">Seed Requests <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-vinyl"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vcountsrtotal; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><?php echo $vcountsrtoday; ?></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Seed request Card -->
              
            <!-- Seed distribution Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Seed Distribution <span>| Total </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-command"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vcountsdtotal; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><?php echo $vcountsdtoday; ?></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Seed Distribution Card -->
              
            <!-- Planted seeds Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Planted Seeds <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-sliders"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vcountsptotal; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><?php echo $vcountsptoday; ?></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Planted seeds Card -->
            
            <!-- Harvest Crops Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Yields <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-slack"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vyield; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><?php echo $vyieldtoday; ?></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Harvest Crops Card -->
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                
                <div class="card-body">
                  <h5 class="card-title">Feedback <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vcountf; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><?php echo $vcountftoday; ?></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Barangays <span>| Today</span></h5>

               
              <div class="activity">
                 <?php
                
        
                ?>
                  
                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->
                 <?php
                
        
                ?>
                
              </div>

            </div>
          </div><!-- End Recent Activity -->
          </div>
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

