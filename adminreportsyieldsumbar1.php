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
      <a href="dashboard.php" class=" d-flex align-items-center">
        <img src="assets/img/banner.jpg" height="60" alt="">
        <span class="d-none d-lg-block"></span>
      </a>
     
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
        <a class="nav-link collapsed" href="dashboard.php">
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
        <a class="nav-link collapsed " href="adminbarangays.php">
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
        <a class="nav-link " href="adminreports.php">
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
      <h5><i class="bi bi-files"></i>&nbsp;Reports / Summary of Crop Yields Per Barangay</h5> 
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="adminreports.php">Reports</a></li>
          <li class="breadcrumb-item"><a href="adminreportsyieldsum.php">Summary of Crop Yields</li>
        </ol>
      </nav>
    
    </div><!-- End Page Title -->
<?php
  $vcropcategoryx=$_REQUEST['txtcropscategory'];
        

        $vselectdate=$_REQUEST['txtstartingdate'];
        $vdatex = new DateTime($vselectdate);
        $vstartingdate = $vdatex->format("Y-m-d");
        $vstartingdatew = $vdatex->format("F d Y");	

        $vselectdate=$_REQUEST['txtendingdate'];
        $vdatex = new DateTime($vselectdate);
        $vendingdate = $vdatex->format("Y-m-d");
        $vendingdatew = $vdatex->format("F d Y");	      
?>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div>
                    <font size=-2><?php echo "Barangay: ".$vcropcategoryx; ?></font><br> 
                    <font size=-2><?php echo "Starting Date: ".$vstartingdatew; ?></font><br> 
                    <font size=-2><?php echo "Ending Date: ".$vendingdatew; ?></font><br> 
                </div>
              <!-- Custom Styled Validation -->
             <?php
        
        
        
        
        $vno1=0;
        $vno2=0;
        $vno3=0;
        $vno4=0;
        $vno5=0;
        $vno6=0;
        $vno7=0;
        $vno8=0;
        $vno9=0;
        $vno10=0;
        $vno11=0;
        $vno12=0;
        $vno13=0;
        $vno14=0;
        $vno15=0;
        $vno16=0;
        $vno17=0;
        $vno18=0;
        $vno19=0;
        $vno20=0;
        $vno21=0;
        $vno22=0;
        $vno23=0;
        $vno24=0;
        $vno25=0;
        $vno26=0;
        
        
        $result = mysql_query("SELECT * FROM tblseedrequested where flddaterequested>='$vstartingdate' && flddaterequested<='$vendingdate' && fldstatus='Distributed' && fldlocation='$vcropcategoryx' order by fldindex");
        while($row = mysql_fetch_array($result))
        {
            $vcropcode=$row['fldrequestedseed'];
            //echo $vcropcode;
            $result1 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' order by fldindex");
            while($row1 = mysql_fetch_array($result1))
            {
                $vcategory=$row1['fldcropscategory'];
                
            }
            
            
            $vrequestcode=$row['fldcode'];
            
            $result1 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode' && fldstatus='Seed Planted' order by fldindex");
            while($row1 = mysql_fetch_array($result1))
            {
                $vdistributioncode=$row1['fldcode'];
                
            }
            $vseeddistributed=0;
            $result1 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode' order by fldindex");
            while($row1 = mysql_fetch_array($result1))
            {
                $vseeddistributed=$row1['fldyield'];
                
            }
            //echo "aaa". $vseeddistributed.$vdistributioncode.$vcategory;
            //echo "a".$vseeddistributed;
            //$vbarangay=$row['fldlocation'];
            
            /////////////////////////////////////////////////////////////////
            
            if($vcategory=="Rice")
            {
                $vno1=$vno1+$vseeddistributed;
                echo $vno1;
            }
            if($vcategory=="Corn")
            {
                $vno2=$vno2+$vseeddistributed;
                echo $vno2;
            }
            if($vcategory=="Fruit Vegetables")
            {
                $vno3=$vno3+$vseeddistributed;
            }
            if($vcategory=="Leafy Vegetables")
            {
                $vno4=$vno4+$vseeddistributed;
            }
            if($vcategory=="Root Vegetables")
            {
                $vno5=$vno5+$vseeddistributed;
            }
            if($vcategory=="Fruit Trees")
            {
                $vno6=$vno6+$vseeddistributed;
            }
            if($vcategory=="Root Crops")
            {
                $vno7=$vno7+$vseeddistributed;
            }
            if($vcategory=="Spices")
            {
                $vno8=$vno8+$vseeddistributed;
            }
            if($vcategory=="Legumes")
            {
                $vno9=$vno9+$vseeddistributed;
            }
            if($vcategory=="Industrial Crops")
            {
                $vno10=$vno10+$vseeddistributed;
            }
            //////////////////////////////////////////////////////////////////
            
            
        }

            ?>
                <div>
            <?php
                                        
                                        $dataPoints = array( 
                                            
                                            array("y" => $vno10,"label" => "10" ),
                                            array("y" => $vno9,"label" => "9" ),
                                           array("y" => $vno8,"label" => "8" ),
    	                                   array("y" => $vno7,"label" => "7" ),
    	                                   array("y" => $vno6,"label" => "6" ),
    	                                   array("y" => $vno5,"label" => "5" ),
    	                                   array("y" => $vno4,"label" => "4" ),
    	                                   array("y" => $vno3,"label" => "3" ),
                                            array("y" => $vno2,"label" => "2" ),
                                            array("y" => $vno1,"label" => "1" )
                                        );
                                        
                                        
                                       
        
                                        ?>
                                        
                                        <script>
                                        window.onload = function() {
     
                                        var chart = new CanvasJS.Chart("chartContainer", {
    	                                   animationEnabled: true,
    	                                   title:{
    		                                  //text: "Revenue Chart of Acme Corporation"
    	                                   },
    	                                   axisY: {
    		                              title: "Crop Yields ",
    		                              includeZero: true,
    		                              prefix: "",
    		                              suffix:  ""
    	                                   },
    	                               data: [{
    		                              type: "bar",
    		                              yValueFormatString: "#,##0",
    		                              indexLabel: "{y}",
    		                              indexLabelPlacement: "inside",
    		                              indexLabelFontWeight: "bolder",
    		                              indexLabelFontColor: "white",
    		                              dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	                                   }]
                                        });
                                    chart.render();
     
                                    }
                                    </script>
                                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>        
                                        <?php
                                        /////////////////////////end graph
                                        ?>
                            			</div>
                                        <font size="-3" align=center>Legend: <br>
                                        
                                        <table class="table">
                <body>
              <?php
                                    $vy=0;
                                    
                                    $vi=0;
                                    $result = mysql_query("SELECT * FROM tblcropscategory order by fldindex");
		                              while($row = mysql_fetch_array($result))
		                              {
                                          $arrcode[$vi]=$row['fldindex'];
                                         $arrpicture[$vi]=$row['fldcropscategory'];
			                             
			                             $vi=$vi+1;
                                            
                                      }
                                    //echo $vi;
                                    $vi1=0;
                                    $vi=$vi-1;
                                    $vcount=$vi;
                                    //echo $vcount;
                                    while($vy<=$vi)
                                    {
                                        //echo $vy;
                                    ?>
                                            <!--start row -->
                            		          <tr>
                                                <?php
                                                
                                                $vx=0;
                                                
                                                while($vx<=4)
                                                {
                                                    if($vi1<=$vi)
                                                    {
                                                ?>
                                                    <!--start section -->
                                                    <td align=left>
                                                        
                                                        <?php echo $arrcode[$vi1]." - ".$arrpicture[$vi1]; ?>
                                                        
                                                        <div>
                                                     
                                                        </div>    
                                                  </td>
                                                    <!--end section -->
                                                <?php
                                                       
                                                    }
                                                     $vi1=$vi1+1;
                                                    $vcount=$vcount-1;
                                                    $vx=$vx+1;
                                                    
                                                }
                                                
                                                ?>
                                        </tr>
                                        
                
                                    <?php
                                        $vy=$vy+1;      
                                    }
                                    ?>
                    </tbody>
              </table>
              <!-- End Table with stripped rows -->
                                            
                                        
                <hr/>
                                        <button type="reset" class="btn btn-warning"  onclick="window.location.href='adminreportsyieldsum.php'">Return</button>
            </div>
              <!-- Table with stripped rows -->
              
              <!-- End Table with stripped rows -->

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

