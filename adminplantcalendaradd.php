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
        <a class="nav-link collapsed " href="dashboard.php">
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
        <a class="nav-link" href="adminplantcalendar.php">
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
      <h5><i class="bi bi-calendar4-range"></i>&nbsp;Planting Calendar / Add New Item</h5>
     
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="adminplantcalendar.php">Planting Calendar</a></li>
            <li class="breadcrumb-item">Add New Item</li>
          
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
             
            <hr/>
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
    
    $vctr=0;
        $result = mysql_query("SELECT * FROM tblplantcalendar order by fldindex");
        while($row = mysql_fetch_array($result))
        {
            $vctr=$row['fldindex'];
        }
        $vctr=$vctr+1;
        $vcode="PLCA".$vctr;
        
        $vcropcodex=$_POST['txtcropcode'];
        $result = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcodex' order by fldindex");
        while($row = mysql_fetch_array($result))
        {
            $vcropsx=$row['fldcrops'];
        }
        $vtimeplantingallx=$_POST['txttimeplantingall'];
        $vtimeplantingstartx=$_POST['txttimeplantingstart'];
        $vtimeplantingendx=$_POST['txttimeplantingend'];
        $vplantpopulationx=$_POST['txtplantpopulation'];
        $vmaturitystartx=$_POST['txtmaturitystart'];
        $vmaturityendx=$_POST['txtmaturityend'];
        $vmaturityunitx=$_POST['txtmaturityunit'];
        $vvolumestartx=$_POST['txtvolumestart'];
        $vvolumeendx=$_POST['txtvolumeend'];
        $vvolumeunitx=$_POST['txtvolumeunit'];
        $vdistancestartx=$_POST['txtdistancestart'];
        $vdistanceendx=$_POST['txtdistanceend'];
        
        
        $vtest=0;
		//echo $vcropsx;						
        ///////////////////////////////////
        $vtestx=$_POST['txt1'];
        //
        
        if($vtest==0)
        {
            if($vtestx==1)
            {
                //echo "aa".$vtestx;
                $vcodex=$_POST['txtcode'];
	            $vcropcodex=$_POST['txtcropcode'];
                $vtimeplantingallx=$_POST['txttimeplantingall'];
                if($vtimeplantingallx=="Periodic")
                {
                    $vtimeplantingstartx=$_POST['txttimeplantingstart'];       
                    $vtimeplantingendx=$_POST['txttimeplantingend'];       
                    $vtimeplantingallx="";
                }
                if($vtimeplantingallx=="All Seasons")
                {
                    $vtimeplantingstartx="";       
                    $vtimeplantingendx="";       
                    
                }
                
                
                $vplantpopulationx=$_POST['txtplantpopulation'];
                $vmaturitystartx=$_POST['txtmaturitystart'];
                
                $vmaturityendx=$_POST['txtmaturityend'];
                $vmaturityunitx=$_POST['txtmaturityunit'];
                $vvolumestartx=$_POST['txtvolumestart'];
                $vvolumeendx=$_POST['txtvolumeend'];
                
                $vvolumeunitx=$_POST['txtvolumeunit'];
                $vdistancestartx=$_POST['txtdistancestart'];
                
                $vdistanceendx=$_POST['txtdistanceend'];
                
				    $sql="INSERT INTO tblplantcalendar (fldindex, fldcode, fldcropcode, fldtimeplantingall, fldtimeplantingstart, fldtimeplantingend, fldplantpopulation, fldmaturitystart, fldmaturityend,  fldmaturityunit, fldvolumestart,  fldvolumeend, fldvolumeunit, flddistancestart , flddistanceend) 
                    VALUES ('$vctr','$vcodex','$vcropcodex','$vtimeplantingallx','$vtimeplantingstartx','$vtimeplantingendx','$vplantpopulationx','$vmaturitystartx','$vmaturityendx','$vmaturityunitx','$vvolumestartx','$vvolumeendx', '$vvolumeunitx', '$vdistancestartx','$vdistanceendx')";

				    if (!mysql_query($sql,$con))
				    {
  						die('error: ' . mysql_error());
  		            }
										
										
				    ?>
                    <script>
				    alert("New Item Saved.");	
				    </script>   
    		          <meta  http-equiv="refresh" content=".000001;url=adminplantcalendar.php" />
            	       <?php   
				
            }
        }
    /////////////////////////////////////////////////////////
    ?>
             <!-- Custom Styled Validation -->
            <form action="adminplantcalendaradd.php" name="frm" class="row g-3 needs-validation" id="block-validate" method="post" novalidate>
             <!--  <form class="row g-3 needs-validation" method="post" name="frm" id="block-validate" action="adminadminadd.php" enctype="multipart/form-data"  novalidate>-->
                    <input type="hidden" name="txt1" id="txt1">
                    <input type="hidden" name="txtpost" id="txtpost">
                  <d
                  </div>
                
                <div class="row mb-3">
                  <label for="validationCustom01" class="form-label col-sm-2 col-form-label">Code</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control col-sm-6" id="validationCustom01" readonly name="txtcode" value="<?php echo $vcode; ?>" required>
                    </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                
                <div class="row mb-3">
                  <label for="inputState" class="form-label col-sm-2 col-form-label">Crop</label>
                 <div class="col-sm-6">
                  <select id="inputState" class="form-select" name="txtcropcode">
                    <?php
                    if($vcropsx!="")
                    {
                        ?>
                      
                      <option selected value="<?php echo $vcropcodex; ?>"><?php echo $vcropsx; ?></option>
                      <?php
                    }
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
                  <label for="inputState" class="form-label col-sm-2 col-form-label">Planting Time</label>
                 <div class="col-sm-3">
                  <select id="inputState" class="form-select" name="txttimeplantingall" onchange="form.submit()">
                   <?php
                    if($vtimeplantingallx!="")
                    {
                    ?>
                     <option selected value="<?php echo $vtimeplantingallx; ?>"><?php echo $vtimeplantingallx; ?></option> 
                    <?php
                    }
                    ?>
                    <option value="All Seasons">All Seasons</option>
                    <option value="Periodic">Periodic</option>
                   
                  </select>
                    </div>
                </div>
                
                <?php
                if($vtimeplantingallx=="Periodic")
                {
                ?>
                <div class="row mb-3">
                  <label for="validationCustom01" class="form-label col-sm-2 col-form-label">Period</label>
                  <div class="col-sm-3">
                  <select id="inputState" class="form-select" name="txttimeplantingstart">
                    <?php
                    if($vtimeplantingstartx!="")
                    {
                    ?>
                      <option selected value="<?php echo $vtimeplantingstartx; ?>"><?php echo $vtimeplantingstartx; ?></option> 
                    <?php
                    }
                    ?>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                   
                  </select>
                      
                    </div>
                    
                    <div class="col-sm-3">
                  <select id="inputState" class="form-select" name="txttimeplantingend">
                    <?php
                    if($vtimeplantingendx!="")
                    {
                    ?>
                      <option selected value="<?php echo $vtimeplantingendx; ?>"><?php echo $vtimeplantingendx; ?></option> 
                    <?php
                    }
                    ?>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                   
                  </select>
                    </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <?php
                }
                ?>
                
                <div class="row mb-3">
                  <label for="validationCustom01" class="form-label col-sm-2 col-form-label">Plant Population Per Hectare</label>
                  <div class="col-sm-3">
                  <input type="number" step="0.01" class="form-control col-sm-2" placeholder="0.0" id="validationCustom01" name="txtplantpopulation" value="<?php echo $vplantpopulationx; ?>" required>  
                    </div>
                    
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="validationCustom01" class="form-label col-sm-2 col-form-label">Maturity</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control col-sm-2" placeholder="0.0" id="validationCustom01" name="txtmaturitystart" value="<?php echo $vmaturitystartx; ?>" required>  
                    </div>
                    <div class="col-sm-3">
                  <input type="text" class="form-control col-sm-2" placeholder="0.0" id="validationCustom01" name="txtmaturityend" value="<?php echo $vmaturityendx; ?>">  
                    </div>
                    <div class="col-sm-4">
                  <select id="inputState" class="form-select" name="txtmaturityunit">
                    <?php
                    if($vmaturityunitx!="")
                    {
                    ?>
                      <option selected value="<?php echo $vmaturityunitx; ?>"><?php echo $vmaturityunitx; ?></option> 
                    <?php
                    }
                    ?>
                    <option value="DAYS OF PLANTING">DAYS OF PLANTING</option>
                    <option value="MONTHS AFTER TRANSPLANT">MONTHS AFTER TRANSPLANT</option>
                    <option value="AFTER TRANSPLANT">AFTER TRANSPLANT</option>
                    <option value="DAYS AFTER PLANTING">DAYS AFTER PLANTING</option>
                    <option value="MONTHS AFTER SOWING">MONTHS AFTER SOWING</option>
                    <option value="MONTHS AFTER SOWING">MONTHS AFTER SOWING</option>
                    <option value="DAYS AFTER TRANSPLANT">DAYS AFTER TRANSPLANT</option>
                    
                  </select>
                    </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="validationCustom01" class="form-label col-sm-2 col-form-label">Volume of Production</label>
                  <div class="col-sm-3">
                  <input type="number" step="0.01" class="form-control col-sm-2" placeholder="0.0" id="validationCustom01" name="txtvolumestart" value="<?php echo $vvolumestartx; ?>" required>  
                    </div>
                    <div class="col-sm-3">
                  <input type="number" step="0.01" class="form-control col-sm-2" placeholder="0.0" id="validationCustom01" name="txtvolumeend" value="<?php echo $vvolumeendx; ?>">  
                    </div>
                    <div class="col-sm-3">
                  <select id="inputState" class="form-select" name="txtvolumeunit">
                    <?php
                    if($vvolumeunitx!="")
                    {
                    ?>
                      <option selected value="<?php echo $vvolumeunitx; ?>"><?php echo $vvolumeunitx; ?></option> 
                    <?php
                    }
                    ?>
                    <option value="Tons">Tons</option>
                    <option value="Heads">Heads</option>
                    <option value="Pieces">Pieces</option>
                    
                  </select>
                    </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="validationCustom01" class="form-label col-sm-2 col-form-label">Planting Distance (cm)</label>
                  <div class="col-sm-3">Hill
                  <input type="number" step="0.01" class="form-control col-sm-2" placeholder="0.0" id="validationCustom01" name="txtdistancestart" value="<?php echo $vdistancestartx; ?>" required>  
                    </div>
                    <div class="col-sm-3">Rows
                  <input type="number" step="0.01" class="form-control col-sm-2" placeholder="0.0" id="validationCustom01" name="txtdistanceend" value="<?php echo $vdistanceendx; ?>">  
                    </div>
                    
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                
                <div class="col-12">
                  <button class="btn btn-primary" type="submit" onClick="fSave1()">Submit</button>
                  <button class="btn btn-warning" type="button" onclick="window.location.href='adminplantcalendar.php'">Return</button>
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
    
        <meta  http-equiv="refresh" content=".000001;url=login.php" />
        <?php 	
	}

?>

