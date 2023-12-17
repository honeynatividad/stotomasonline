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
      <a class="navbar-brand " style="font-size: 14px;color: blue;" href="#page-top"><img height="60" height="60" src="img/mainlogo.jpg" alt="..."  /><span class="desktop">City Agriculture Office of Sto Tomas, Batangas</span></a>
     
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
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-people"></i>
          <span>Users
            </span>
        </a>
      </li>
    <li class="nav-item">
        <a class="nav-link " href="admincrops.php">
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
      <h5><i class="bi bi-flower1"></i>&nbsp;Crops / Retire All Past Transactions</h5>
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admincrops.php">Crops</a></li>
            <li class="breadcrumb-item">Retire All Past Transactions</li>
            
          
        </ol>
      </nav>
      
    </div><!-- End Page Title -->
<?php
        $vselectdate=date("Y-m-d");
        $vdatex = new DateTime($vselectdate);
        $vyearnowx = $vdatex->format("Y");	
        
        $vcropcode=$_REQUEST['vuid'];
								
        $result = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode'");
        while($row = mysql_fetch_array($result))
        {
            $vcrops=$row['fldcrops'];
            $vscientificname=$row['fldscientificname'];
            $vvariety=$row['fldvariety'];
            $vcropscategory=$row['fldcropscategory'];
            
        }
        ?>
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
                
                $vi=$_POST['txtvi'];
                $vyearnow=$_POST['txtyearnow'];
                
                $result = mysql_query("SELECT * FROM tblseedplanted where fldyield!='0' order by fldindex");
				while($row = mysql_fetch_array($result))
				{
                    $vselectdate=$row['fldharvestdateend'];
                    $vdatex = new DateTime($vselectdate);
                    $vharvestdateendx = $vdatex->format("Y-m-d");	    
                    $vharvestyearx = $vdatex->format("Y");  
                    if($vharvestyearx<$vyearnowx)
                    {
                        $vcode=$row['fldcode'];  
                        mysql_query("UPDATE tblseedrequested SET fldstatus = 'Retired' WHERE fldcode = '$vcode'");		
                    }
                    
                }
                
                /*$vii=0;
                
                while($vii<=$vi)
                {
                    $arrrequestedcode[$vii]=$_POST["txtrequestedcode".$vii];
                    $arrseeddistributioncode[$vii]=$_POST["txtseeddistributioncode".$vii];
                    $arrseedplantedcode[$vii]=$_POST["txtseedplantedcode".$vii];
                    
                    echo $arrrequestedcode[$vii];
                    $vii=$vii+1;
                }
                
                $vii=0;
                while($vii<=$vi)
                {
                    mysql_query("UPDATE tblseedrequested SET fldstatus = 'Retired' WHERE fldcode = '$arrrequestedcode[$vii]'");		
                    
                    mysql_query("UPDATE tblseeddistribution SET fldstatus = 'Retired' WHERE fldcode = '$arrseeddistributioncode[$vii]'");		
                    
                    mysql_query("UPDATE tblseedplanted SET fldstatus = 'Retired' WHERE fldcode = '$arrseedplantedcode[$vii]'");		
                    
                    $vii=$vii+1;
                }*/
                //////////////////////////////////////////////////
              
                
										
										
				    ?>
                    <script>
				    alert("Transactions Retired.");	
				    </script>   
    		          <meta  http-equiv="refresh" content=".000001;url=adminretireall.php" />
            	       <?php   
				
            }
        }
        ?>
          
        
    <section class="section dashboard">
      <div class="row">
          
        <!-- Left side columns
        <form name="formadd" enctype="multipart/form-data" action="aluempdatres1.php" role="form" method="post" class="form-horizontal" id="block-validate">-->
        <form action="adminretireall.php" enctype="multipart/form-data" name="frm" role="form" class="row g-3 " method="post">
        <input type="hidden" name="txt1" id="txt1">
                    <input type="hidden" name="txtpost" id="txtpost">
                    
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Code</th>
                    <th scope="col">Farmer's Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Crop</th>
                    <th scope="col">Date Harvested</th>
                    <th scope="col">Yield</th>
                    
                    <th scope="col">Status</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                     <?php 
				        $vcounter=1;
                        
                        $vi=0;
                        $result = mysql_query("SELECT * FROM tblseedplanted where fldyield!='0' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            $vseedplantedcode=$row['fldcode'];
                            
                            $vselectdate=$row['fldharvestdatestart'];
                            $vdatex = new DateTime($vselectdate);
                            $vharvestdatestartx = $vdatex->format("Y-m-d");	    
                            
                            $vselectdate=$row['fldharvestdateend'];
                            $vdatex = new DateTime($vselectdate);
                            $vharvestdateendx = $vdatex->format("Y-m-d");	    
                            $vharvestyearx = $vdatex->format("Y");
                            //echo $vharvestyearx;
                            if($vharvestyearx<$vyearnowx)
                            {
                                $vdistributioncode=$row['flddistributioncode'];
                                $result1 = mysql_query("SELECT * FROM tblseeddistribution where fldcode='$vdistributioncode' order by fldindex");
				                while($row1 = mysql_fetch_array($result1))
				                {
                                    $vrequestedcode=$row1['fldrequestcode'];
                                }
                                $result1 = mysql_query("SELECT * FROM tblseedrequested where fldcode='$vrequestedcode' order by fldindex");
				                while($row1 = mysql_fetch_array($result1))
				                {
                                    $vlocation=$row1['fldlocation'];
                                    $vrequestedbycode=$row1['fldrequestedby'];
                                    $vcropcode=$row1['fldrequestedseed'];
                                }
                                $result1 = mysql_query("SELECT * FROM tbluser where fldcode='$vrequestedbycode' order by fldindex");
				                while($row1 = mysql_fetch_array($result1))
				                {
                                    $vfarmer=$row1['fldlastname'].", ".$row1['fldfirstname']." ".$row1['fldmiddlename'];
                                }
                                $result1 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' order by fldindex");
				                while($row1 = mysql_fetch_array($result1))
				                {
                                    $vcrops=$row1['fldcrops'];
                                }
                            //echo "aaa".$vrequestedcode;
                                
				                
				            ?>
                                    <tr>
                                    <th><?php echo $vcounter; ?></th>
                                    <td><?php echo $row['fldcode']; ?></td>
                                    <td><?php echo $vfarmer; ?></td>
                                    <td><?php echo $vlocation; ?></td>
                                    <td><?php echo $vcrops; ?></td>
                                    <td><?php echo $vharvestdatestartx." to ".$vharvestdateendx; ?></td>
                                    <td><?php echo $row['fldyield'] ?></td>
                                    <td><?php echo $row['fldstatus'] ?></td>
                                    
                                    
                                    <input type="hidden"  class="" name=txtseedplantedcode<?php echo $vi; ?> id=txtseedplantedcode<?php echo $vi; ?> value="<?php echo $vseedplantedcode; ?>" />          
                                        
                                    <input type="hidden"  class="" name=txtseeddistributioncode<?php echo $vi; ?> id=txtseeddistributioncode<?php echo $vi; ?> value="<?php echo $vdistributioncode; ?>" />          
                                    
                                    <input type="hidden"  class="" name=txtrequestedcode<?php echo $vi; ?> id=txtrequestedcode<?php echo $vi; ?> value="<?php echo $vrequestedcode; ?>" />          
                                    
                                    </tr>
                    
                                <?php
                                $vi=$vi+1;
                                $vcounter=$vcounter+1;
                                
                            }
                        }
                        $vi=$vi-1;
                        $vcounter=$vcounter-1;
                    ?>
                <input type="hidden"  readonly="" class="form-control" name="txtvi" id="txtvi" value="<?php echo $vi; ?>" />
                
                <input type="hidden"  readonly="" class="form-control" name="txtyearnow" id="txtyearnow" value="<?php echo $vyearnowx; ?>" />
                
                <input type="hidden"  readonly="" class="form-control" name="txtcounter" id="txtcounter" value="<?php echo $vcounter; ?>" />
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            <button class="btn btn-danger" type="submit" onClick="fSave1()">Retire All Transactions</button>
                  <button class="btn btn-warning" type="button" onclick="window.location.href='admincrops.php'">Return</button>  
            
              <!-- Basic Modal -->
              
              <!-- End Basic Modal-->

            </div>
          </div>

              <!-- Table with stripped rows -->
              
            </div>
          </div>

        </div>
          </form>
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

