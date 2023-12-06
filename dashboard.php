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
                <a onclick="myFunction1()"> <font color=blue>You have <?php echo $vctrn; ?> new notifications</font></a>
              
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
          <span>Planting Schedule</span>
        </a>
      </li>    
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminheatmap.php">
          <i class="bi bi-globe2"></i>
          <span>Mapping</span>
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
				        $result = mysql_query("SELECT * FROM tblseedrequested where flddaterequested='$vdatetoday'  order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcountsrtoday=$vcountsrtoday+$row['fldrequestedqty'];
                            
                        }
        
        $vcountsrtotal=0;
				        $result = mysql_query("SELECT * FROM tblseedrequested  order by fldindex");
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
        /////////////////////////////argicultural lang
        
        $vland=0;
				        $result = mysql_query("SELECT * FROM tblfarm");
				        while($row = mysql_fetch_array($result))
				        {
                            $vland=$vland+$row['fldlotarea'];
                            
                        }
        
        /////////////////////////////registered farmers
        
        $vfarmer=0;
				        $result = mysql_query("SELECT * FROM tbluser where fldusertype='Farmer'");
				        while($row = mysql_fetch_array($result))
				        {
                            $vfarmer=$vfarmer+1;
                            
                        }
        
        /////////////////////////////total crops
        
        $vcropcount=0;
				        $result = mysql_query("SELECT * FROM tblcrops order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vcropcount=$vcropcount+1;
                            
                        }
        
        /////////////////////////////announcements
        
        
        $vann=0;
				        $result = mysql_query("SELECT * FROM tblannouncement  order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vann=$vann+1;
                            
                        }
        
     //////////////////////////////////////////
        
     /////////////////////////////top 5 requested seeds
        
        
                        $vi=0;
				        $result = mysql_query("SELECT * FROM tblcrops  order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $arrcropcode[$vi]=$row['fldcode'];
                            $arrcrops[$vi]=$row['fldcrops'];
                            $vi=$vi+1;                    
                        }
                        $vi=$vi-1;
                        
                        $vii=0;
                        while($vii<=$vi)
                        {
                            $vtotal=0;
                            $result = mysql_query("SELECT * FROM tblseedrequested where fldrequestedseed='$arrcropcode[$vii]'  order by fldindex");
				            while($row = mysql_fetch_array($result))
				            {
                                $vtotal=$vtotal+$row['fldrequestedqty']; 
                            }
                            $arrreq[$vii]=$vtotal; 
                            $vii=$vii+1;
                        }
                        $vii=$vii-1;
                        
                        mysql_query("DELETE FROM tbltop5 where fldusercode='$vcode'"); 
                        
                        $vctr=0;
                        $result = mysql_query("SELECT * FROM tbltop5  order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vctr=$row['fldindex'];
                        }
                        $vctr=$vctr+1;
                        
                        $viii=0;
                        while($viii<=$vii)
                        {
                            $sql="INSERT INTO tbltop5 (fldindex, fldusercode, fldcropcode, fldcrops, fldtotal) 
                            VALUES ('$vctr','$vcode','$arrcropcode[$viii]','$arrcrops[$viii]','$arrreq[$viii]')";

				            if (!mysql_query($sql,$con))
				            {
  						        die('error: ' . mysql_error());
  		                    }
                            
                            $vctr=$vctr+1;
                            $viii=$viii+1;
                        }
                    
                        $vi=0;
                        $vcount=1;
                        $result = mysql_query("SELECT * FROM tbltop5 order by fldtotal desc");
				        while($row = mysql_fetch_array($result))
				        {
                            if($vcount<=5)
                            {
                            $arrcropx[$vi]=$row['fldcrops'];
                            $arrtotalx[$vi]=$row['fldtotal'];
                            
                            $vi=$vi+1;
                            }
                            $vcount=$vcount+1;
                        }
        
        
        
     //////////////////////////////////////////
?>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-6">
          <div class="row">
            <!-- Seed Request Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                  <h5 class="card-title">Seed Requests <span>| Total Grams</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-vinyl"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vcountsrtotal; ?></h6>
                        <span class="text-success small pt-1 fw-bold"><?php echo $vcountsrtoday; ?></font></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Seed request Card -->
              
            <!-- Seed distribution Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Seed Distribution <span>| Total Grams</span></h5>

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
                  <h5 class="card-title">Planted Seeds <span>| Total Grams</span></h5>

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
                  <h5 class="card-title">Yields <span>| Total in Tons</span></h5>

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
            
            <!-- Harvest Crops Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Registered Farmers <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vfarmer; ?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Harvest Crops Card -->
            
            <!-- Harvest Crops Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Crops <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-gear-wide"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vcropcount; ?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Harvest Crops Card -->
            
            
            
            
            <!-- Harvest Crops Card -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Announcements <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-megaphone"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vann; ?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Harvest Crops Card -->
              
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                
                <div class="card-body">
                  <h5 class="card-title">Agricultural Land <span>| Total Hectares</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-border"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $vland; ?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"> | <?php echo $vdatetoday; ?></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->  
            
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
            
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                
                <div class="card-body">
                  <h5 class="card-title">Reports <span>| Table</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-files"></i>
                    </div>
                    <div class="ps-3">
                      
                        <span class="text-success small pt-1 fw-bold"><a href="adminreportsrequest.php">Seed Request</a> | <a href="adminreportsdistribution.php">Seed Distribution</a> | <a href="adminreportsyield.php">Yields</a></span> 

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-6">

          <!-- Recent Activity -->
            
        <?php
        ///////////////////////////////////////seed request
        $vc1=0;
        $vc2=0;
        $vc3=0;
        $vc4=0;
        $vc5=0;
        $vc6=0;
        $vc7=0;
        $vc8=0;
        $vc9=0;
        $vc10=0;
        
        $result = mysql_query("SELECT * FROM tblseedrequested where flddaterequested<='$vdatetoday'  order by fldrequestedseed");
        while($row = mysql_fetch_array($result))
        {
            $vreqty=$row['fldrequestedqty'];
            //echo $vreqty.",";
            //$vcountsrtoday=$vcountsrtoday+$row['fldrequestedqty'];
            $vseedcode=$row['fldrequestedseed'];
            $result1 = mysql_query("SELECT * FROM tblcrops where fldcode='$vseedcode'");
            while($row1 = mysql_fetch_array($result1))
            {
                if($row1['fldcrops']=="Ampalaya")
                {
                    $vc1=$vc1+$vreqty;
                }
                if($row1['fldcrops']=="Eggplant")
                {
                    $vc2=$vc2+$vreqty;
                }
                if($row1['fldcrops']=="Pole Sitao")
                {
                    $vc3=$vc3+$vreqty;
                }
                
                if($row1['fldcrops']=="Okra")
                {
                    $vc4=$vc4+$vreqty;
                }
                if($row1['fldcrops']=="Squash")
                {
                    $vc5=$vc5+$vreqty;
                }
                if($row1['fldcrops']=="Tomato")
                {
                    $vc6=$vc6+$vreqty;
                }
                if($row1['fldcrops']=="Upo")
                {
                    $vc7=$vc7+$vreqty;
                }
                if($row1['fldcrops']=="Patola")
                {
                    $vc8=$vc8+$vreqty;
                }
                if($row1['fldcrops']=="Cucumber")
                {
                    $vc9=$vc9+$vreqty;
                }
                if($row1['fldcrops']=="Watermelon")
                {
                    $vc10=$vc10+$vreqty;
                }
            }
                            
                            
        }
        //echo "aaa".$vc2;
        ?>
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Seed Requests</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['Ampalaya', 'Eggplant', 'Pole Sitao', 'Okra', 'Squash', 'Tomato', 'Upo', 'Patola','Cucumber','Watermelon'],
                      datasets: [{
                        label: 'Seed Requests',
                        data: [<?php echo $vc1; ?>, <?php echo $vc2; ?>, <?php echo $vc3; ?>, <?php echo $vc4; ?>, <?php echo $vc5; ?>, <?php echo $vc6; ?>, <?php echo $vc7; ?>, <?php echo $vc8; ?>, <?php echo $vc9; ?>, <?php echo $vc10; ?>],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>

            </div>
            
          <?php
        ///////////////////////////////////////seed distributed
        $vc1=0;
        $vc2=0;
        $vc3=0;
        $vc4=0;
        $vc5=0;
        $vc6=0;
        $vc7=0;
        $vc8=0;
        $vc9=0;
        $vc10=0;
        
        $result = mysql_query("SELECT * FROM tblseedrequested where flddaterequested<='$vdatetoday' && fldstatus='Distributed' order by fldrequestedseed");
        while($row = mysql_fetch_array($result))
        {
            $vdisqty=$row['fldrequestedqty'];
            //echo $vreqty.",";
            //$vcountsrtoday=$vcountsrtoday+$row['fldrequestedqty'];
            $vseedcode=$row['fldrequestedseed'];
            $result1 = mysql_query("SELECT * FROM tblcrops where fldcode='$vseedcode'");
            while($row1 = mysql_fetch_array($result1))
            {
                if($row1['fldcrops']=="Ampalaya")
                {
                    $vl1=$vl1+$vdisqty;
                }
                if($row1['fldcrops']=="Eggplant")
                {
                    $vl2=$vl2+$vdisqty;
                }
                if($row1['fldcrops']=="Pole Sitao")
                {
                    $vl3=$vl3+$vdisqty;
                }
                
                if($row1['fldcrops']=="Okra")
                {
                    $vl4=$vl4+$vdisqty;
                }
                if($row1['fldcrops']=="Squash")
                {
                    $vl5=$vl5+$vdisqty;
                }
                if($row1['fldcrops']=="Tomato")
                {
                    $vl6=$vl6+$vdisqty;
                }
                if($row1['fldcrops']=="Upo")
                {
                    $vl7=$vl7+$vdisqty;
                }
                if($row1['fldcrops']=="Patola")
                {
                    $vl8=$vl8+$vdisqty;
                }
                if($row1['fldcrops']=="Cucumber")
                {
                    $vl9=$vl9+$vdisqty;
                }
                if($row1['fldcrops']=="Watermelon")
                {
                    $vl10=$vl10+$vdisqty;
                }
            }
                            
                            
        }
        ///////////////////////////////////////////////////////////////////
        //echo "aaa".$vc2;
        ?>  
            <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Seed Distributed</h5>

              <!-- Bar Chart -->
             <canvas id="lineChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#lineChart'), {
                    type: 'line',
                    data: {
                      labels: ['Ampalaya', 'Eggplant', 'Pole Sitao', 'Okra', 'Squash', 'Tomato', 'Upo', 'Patola','Cucumber','Watermelon'],
                      datasets: [{
                        label: 'Seed Distributed',
                        data: [<?php echo $vl1; ?>, <?php echo $vl2; ?>, <?php echo $vl3; ?>, <?php echo $vl4; ?>, <?php echo $vl5; ?>, <?php echo $vl6; ?>, <?php echo $vl7; ?>, <?php echo $vl8; ?>, <?php echo $vl9; ?>, <?php echo $vl10; ?>],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.4
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>

            </div>
            
            
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Most Requested Seeds</h5>

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        '<?php echo $arrcropx[0]; ?>',
                        '<?php echo $arrcropx[1]; ?>',
                        '<?php echo $arrcropx[2]; ?>',
                        '<?php echo $arrcropx[3]; ?>',
                        '<?php echo $arrcropx[4]; ?>'
                      ],
                      datasets: [{
                        label: 'Requested (Grams)',
                        data: [<?php echo $arrtotalx[0]; ?>, <?php echo $arrtotalx[1]; ?>, <?php echo $arrtotalx[2]; ?>, <?php echo $arrtotalx[3]; ?>, <?php echo $arrtotalx[4]; ?>],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)',
                          'rgb(25, 105, 16)',
                          'rgb(115, 65, 16)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->
            
                
                
            </div>
          </div>
           
          </div><!-- End Recent Activity -->

          
          
          
          
        </div><!-- End Right side columns -->

        
        
        
      
      
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

