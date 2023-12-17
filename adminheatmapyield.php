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
    
<script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-heatmap.min.js"></script>
    
    <style>
      html, body, #container {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a class="navbar-brand " style="font-size: 14px;color: blue;" href="#page-top"><img height="60" height="60" src="img/mainlogo.jpg" alt="..."  /><span class="desktop">City Agriculture Office of Sto Tomas, Batangas</span></a>
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
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h5><i class="bi bi-globe2"></i>&nbsp;Mapping</h5> 
      
      <!--<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item bi bi-people">&nbsp;Users / System Administrators</li>
          
        </ol>
      </nav>-->
    
    </div><!-- End Page Title -->
      
</main><!-- End #main -->
   <div id="container"></div> 
<?php
  $vampreq1=0;      
$vampreq2=0;              
$vampreq3=0;      
$vampreq4=0;      
$vampreq5=0;      
$vampreq6=0;      
$vampreq7=0;      
$vampreq8=0;      
$vampreq9=0;      
$vampreq10=0;      
$vampreq11=0;      
$vampreq12=0;      
$vampreq13=0;      
$vampreq14=0;      
$vampreq15=0;      
$vampreq16=0;      
$vampreq17=0;      
$vampreq18=0;      
$vampreq19=0;      
$vampreq20=0;      
$vampreq21=0;      
$vampreq22=0;      
$vampreq23=0;      
$vampreq24=0;      
$vampreq25=0;      
        
$vampreq101=0;      
$vampreq102=0;      
$vampreq103=0;
$vampreq104=0;
$vampreq105=0;
$vampreq106=0;
$vampreq107=0;
$vampreq108=0;
$vampreq109=0;
$vampreq110=0;
$vampreq111=0;
$vampreq112=0;
$vampreq113=0;
$vampreq114=0;
$vampreq115=0;
$vampreq116=0;
$vampreq117=0;
$vampreq118=0;
$vampreq119=0;
$vampreq120=0;
$vampreq121=0;
$vampreq122=0;
$vampreq123=0;
$vampreq124=0;
$vampreq125=0;

$vampreq201=0;      
$vampreq202=0;      
$vampreq203=0;
$vampreq204=0;
$vampreq205=0;
$vampreq206=0;
$vampreq207=0;
$vampreq208=0;
$vampreq209=0;
$vampreq210=0;
$vampreq211=0;
$vampreq212=0;
$vampreq213=0;
$vampreq214=0;
$vampreq215=0;
$vampreq216=0;
$vampreq217=0;
$vampreq218=0;
$vampreq219=0;
$vampreq220=0;
$vampreq221=0;
$vampreq222=0;
$vampreq223=0;
$vampreq224=0;
$vampreq225=0;

$vampreq301=0;      
$vampreq302=0;      
$vampreq303=0;
$vampreq304=0;
$vampreq305=0;
$vampreq306=0;
$vampreq307=0;
$vampreq308=0;
$vampreq309=0;
$vampreq310=0;
$vampreq311=0;
$vampreq312=0;
$vampreq313=0;
$vampreq314=0;
$vampreq315=0;
$vampreq316=0;
$vampreq317=0;
$vampreq318=0;
$vampreq319=0;
$vampreq320=0;
$vampreq321=0;
$vampreq322=0;
$vampreq323=0;
$vampreq324=0;
$vampreq325=0;

$vampreq401=0;      
$vampreq402=0;      
$vampreq403=0;
$vampreq404=0;
$vampreq405=0;
$vampreq406=0;
$vampreq407=0;
$vampreq408=0;
$vampreq409=0;
$vampreq410=0;
$vampreq411=0;
$vampreq412=0;
$vampreq413=0;
$vampreq414=0;
$vampreq415=0;
$vampreq416=0;
$vampreq417=0;
$vampreq418=0;
$vampreq419=0;
$vampreq420=0;
$vampreq421=0;
$vampreq422=0;
$vampreq423=0;
$vampreq424=0;
$vampreq425=0;

$vampreq501=0;      
$vampreq502=0;      
$vampreq503=0;
$vampreq504=0;
$vampreq505=0;
$vampreq506=0;
$vampreq507=0;
$vampreq508=0;
$vampreq509=0;
$vampreq510=0;
$vampreq511=0;
$vampreq512=0;
$vampreq513=0;
$vampreq514=0;
$vampreq515=0;
$vampreq516=0;
$vampreq517=0;
$vampreq518=0;
$vampreq519=0;
$vampreq520=0;
$vampreq521=0;
$vampreq522=0;
$vampreq523=0;
$vampreq524=0;
$vampreq525=0;

$vampreq601=0;      
$vampreq602=0;      
$vampreq603=0;
$vampreq604=0;
$vampreq605=0;
$vampreq606=0;
$vampreq607=0;
$vampreq608=0;
$vampreq609=0;
$vampreq610=0;
$vampreq611=0;
$vampreq612=0;
$vampreq613=0;
$vampreq614=0;
$vampreq615=0;
$vampreq616=0;
$vampreq617=0;
$vampreq618=0;
$vampreq619=0;
$vampreq620=0;
$vampreq621=0;
$vampreq622=0;
$vampreq623=0;
$vampreq624=0;
$vampreq625=0;

$vampreq701=0;      
$vampreq702=0;      
$vampreq703=0;
$vampreq704=0;
$vampreq705=0;
$vampreq706=0;
$vampreq707=0;
$vampreq708=0;
$vampreq709=0;
$vampreq710=0;
$vampreq711=0;
$vampreq712=0;
$vampreq713=0;
$vampreq714=0;
$vampreq715=0;
$vampreq716=0;
$vampreq717=0;
$vampreq718=0;
$vampreq719=0;
$vampreq720=0;
$vampreq721=0;
$vampreq722=0;
$vampreq723=0;
$vampreq724=0;
$vampreq725=0;

$result = mysql_query("SELECT * FROM tblseedrequested where  fldstatus!='Retired' order by fldindex");
				        while($row = mysql_fetch_array($result))
				        {
                            
                            $vbarangay=$row['fldlocation'];
                            $vcropcode=$row['fldrequestedseed'];
                            $result1 = mysql_query("SELECT * FROM tblcrops where  fldcode='$vcropcode' order by fldindex");
                            while($row1 = mysql_fetch_array($result1))
				            {
                                $vcrops=$row1['fldcrops'];
                            }
                            
                            $vrequestcode=$row['fldcode'];
                            $result1 = mysql_query("SELECT * FROM tblseeddistribution where  fldrequestcode='$vrequestcode' order by fldindex");
                            while($row1 = mysql_fetch_array($result1))
				            {
                                $vdistributioncode=$row1['fldcode'];
                            }
                            $vyield=0;
                            $result1 = mysql_query("SELECT * FROM tblseedplanted where  flddistributioncode='$vdistributioncode' order by fldindex");
                            while($row1 = mysql_fetch_array($result1))
				            {
                                $vyield=$row1['fldyield'];
                            }
                            //echo "aaa".$vyield;
                            /////////////////////////////////San Agustin
                            if($vbarangay=="San Agustin" && $vcrops=="Ampalaya")
                            {
                                $vampreq1=$vampreq1+$vyield;
                            }
                            if($vbarangay=="San Agustin" && $vcrops=="Eggplant")
                            {
                                $vampreq101=$vampreq101+$vyield;
                            }
                            if($vbarangay=="San Agustin" && $vcrops=="Squash")
                            {
                                $vampreq201=$vampreq201+$vyield;
                            }
                            if($vbarangay=="San Agustin" && $vcrops=="Cucumber")
                            {
                                $vampreq301=$vampreq301+$vyield;
                            }
                            if($vbarangay=="San Agustin" && $vcrops=="Okra")
                            {
                                $vampreq401=$vampreq401+$vyield;
                            }
                            if($vbarangay=="San Agustin" && $vcrops=="Pole Sitao")
                            {
                                $vampreq501=$vampreq501+$vyield;
                            }
                            if($vbarangay=="San Agustin" && $vcrops=="Tomato")
                            {
                                $vampreq601=$vampreq601+$vyield;
                            }
                            if($vbarangay=="San Agustin" && $vcrops=="Patola")
                            {
                                $vampreq701=$vampreq701+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Antonio
                            if($vbarangay=="San Antonio" && $vcrops=="Ampalaya")
                            {
                                $vampreq2=$vampreq2+$vyield;
                            }
                            if($vbarangay=="San Antonio" && $vcrops=="Eggplant")
                            {
                                $vampreq102=$vampreq102+$vyield;
                            }
                            if($vbarangay=="San Antonio" && $vcrops=="Squash")
                            {
                                $vampreq202=$vampreq202+$vyield;
                            }
                            if($vbarangay=="San Antonio" && $vcrops=="Cucumber")
                            {
                                $vampreq302=$vampreq302+$vyield;
                            }
                            if($vbarangay=="San Antonio" && $vcrops=="Okra")
                            {
                                $vampreq402=$vampreq402+$vyield;
                            }
                            if($vbarangay=="San Antonio" && $vcrops=="Pole Sitao")
                            {
                                $vampreq502=$vampreq502+$vyield;
                            }
                            if($vbarangay=="San Antonio" && $vcrops=="Tomato")
                            {
                                $vampreq602=$vampreq602+$vyield;
                            }
                            if($vbarangay=="San Antonio" && $vcrops=="Patola")
                            {
                                $vampreq702=$vampreq702+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Rafael
                            if($vbarangay=="San Rafael" && $vcrops=="Ampalaya")
                            {
                                $vampreq3=$vampreq3+$vyield;
                            }
                            if($vbarangay=="San Rafael" && $vcrops=="Eggplant")
                            {
                                $vampreq103=$vampreq103+$vyield;
                            }
                            if($vbarangay=="San Rafael" && $vcrops=="Squash")
                            {
                                $vampreq203=$vampreq203+$vyield;
                            }
                            if($vbarangay=="San Rafael" && $vcrops=="Cucumber")
                            {
                                $vampreq303=$vampreq303+$vyield;
                            }
                            if($vbarangay=="San Rafael" && $vcrops=="Okra")
                            {
                                $vampreq403=$vampreq403+$vyield;
                            }
                            if($vbarangay=="San Rafael" && $vcrops=="Pole Sitao")
                            {
                                $vampreq503=$vampreq503+$vyield;
                            }
                            if($vbarangay=="San Rafael" && $vcrops=="Tomato")
                            {
                                $vampreq603=$vampreq603+$vyield;
                            }
                            if($vbarangay=="San Rafael" && $vcrops=="Patola")
                            {
                                $vampreq703=$vampreq703+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santiago
                            if($vbarangay=="Santiago" && $vcrops=="Ampalaya")
                            {
                                $vampreq4=$vampreq4+$vyield;
                            }
                            if($vbarangay=="Santiago" && $vcrops=="Eggplant")
                            {
                                $vampreq104=$vampreq104+$vyield;
                            }
                            if($vbarangay=="Santiago" && $vcrops=="Squash")
                            {
                                $vampreq204=$vampreq204+$vyield;
                            }
                            if($vbarangay=="Santiago" && $vcrops=="Cucumber")
                            {
                                $vampreq304=$vampreq304+$vyield;
                            }
                            if($vbarangay=="Santiago" && $vcrops=="Okra")
                            {
                                $vampreq404=$vampreq404+$vyield;
                            }
                            if($vbarangay=="Santiago" && $vcrops=="Pole Sitao")
                            {
                                $vampreq504=$vampreq504+$vyield;
                            }
                            if($vbarangay=="Santiago" && $vcrops=="Tomato")
                            {
                                $vampreq604=$vampreq604+$vyield;
                            }
                            if($vbarangay=="Santiago" && $vcrops=="Patola")
                            {
                                $vampreq704=$vampreq704+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Bartolome
                            if($vbarangay=="San Bartolome" && $vcrops=="Ampalaya")
                            {
                                $vampreq5=$vampreq5+$vyield;
                            }
                            if($vbarangay=="San Bartolome" && $vcrops=="Eggplant")
                            {
                                $vampreq105=$vampreq105+$vyield;
                            }
                            if($vbarangay=="San Bartolome" && $vcrops=="Squash")
                            {
                                $vampreq205=$vampreq205+$vyield;
                            }
                            if($vbarangay=="San Bartolome" && $vcrops=="Cucumber")
                            {
                                $vampreq305=$vampreq305+$vyield;
                            }
                            if($vbarangay=="San Bartolome" && $vcrops=="Okra")
                            {
                                $vampreq405=$vampreq405+$vyield;
                            }
                            if($vbarangay=="San Bartolome" && $vcrops=="Pole Sitao")
                            {
                                $vampreq505=$vampreq505+$vyield;
                            }
                            if($vbarangay=="San Bartolome" && $vcrops=="Tomato")
                            {
                                $vampreq605=$vampreq605+$vyield;
                            }
                            if($vbarangay=="San Bartolome" && $vcrops=="Patola")
                            {
                                $vampreq705=$vampreq705+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Miguel
                            if($vbarangay=="San Miguel" && $vcrops=="Ampalaya")
                            {
                                $vampreq6=$vampreq6+$vyield;
                            }
                            if($vbarangay=="San Miguel" && $vcrops=="Eggplant")
                            {
                                $vampreq106=$vampreq106+$vyield;
                            }
                            if($vbarangay=="San Miguel" && $vcrops=="Squash")
                            {
                                $vampreq206=$vampreq206+$vyield;
                            }
                            if($vbarangay=="San Miguel" && $vcrops=="Cucumber")
                            {
                                $vampreq306=$vampreq306+$vyield;
                            }
                            if($vbarangay=="San Miguel" && $vcrops=="Okra")
                            {
                                $vampreq406=$vampreq406+$vyield;
                            }
                            if($vbarangay=="San Miguel" && $vcrops=="Pole Sitao")
                            {
                                $vampreq506=$vampreq506+$vyield;
                            }
                            if($vbarangay=="San Miguel" && $vcrops=="Tomato")
                            {
                                $vampreq606=$vampreq606+$vyield;
                            }
                            if($vbarangay=="San Miguel" && $vcrops=="Patola")
                            {
                                $vampreq706=$vampreq706+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Felix
                            if($vbarangay=="San Felix" && $vcrops=="Ampalaya")
                            {
                                $vampreq7=$vampreq7+$vyield;
                            }
                            if($vbarangay=="San Felix" && $vcrops=="Eggplant")
                            {
                                $vampreq107=$vampreq107+$vyield;
                            }
                            if($vbarangay=="San Felix" && $vcrops=="Squash")
                            {
                                $vampreq207=$vampreq207+$vyield;
                            }
                            if($vbarangay=="San Felix" && $vcrops=="Cucumber")
                            {
                                $vampreq307=$vampreq307+$vyield;
                            }
                            if($vbarangay=="San Felix" && $vcrops=="Okra")
                            {
                                $vampreq407=$vampreq407+$vyield;
                            }
                            if($vbarangay=="San Felix" && $vcrops=="Pole Sitao")
                            {
                                $vampreq507=$vampreq507+$vyield;
                            }
                            if($vbarangay=="San Felix" && $vcrops=="Tomato")
                            {
                                $vampreq607=$vampreq607+$vyield;
                            }
                            if($vbarangay=="San Felix" && $vcrops=="Patola")
                            {
                                $vampreq707=$vampreq707+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Fernando
                            if($vbarangay=="San Fernando" && $vcrops=="Ampalaya")
                            {
                                $vampreq8=$vampreq8+$vyield;
                            }
                            if($vbarangay=="San Fernando" && $vcrops=="Eggplant")
                            {
                                $vampreq108=$vampreq108+$vyield;
                            }
                            if($vbarangay=="San Fernando" && $vcrops=="Squash")
                            {
                                $vampreq208=$vampreq208+$vyield;
                            }
                            if($vbarangay=="San Fernando" && $vcrops=="Cucumber")
                            {
                                $vampreq308=$vampreq308+$vyield;
                            }
                            if($vbarangay=="San Fernando" && $vcrops=="Okra")
                            {
                                $vampreq408=$vampreq408+$vyield;
                            }
                            if($vbarangay=="San Fernando" && $vcrops=="Pole Sitao")
                            {
                                $vampreq508=$vampreq508+$vyield;
                            }
                            if($vbarangay=="San Fernando" && $vcrops=="Tomato")
                            {
                                $vampreq608=$vampreq608+$vyield;
                            }
                            if($vbarangay=="San Fernando" && $vcrops=="Patola")
                            {
                                $vampreq708=$vampreq708+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Francisco
                            if($vbarangay=="San Francisco" && $vcrops=="Ampalaya")
                            {
                                $vampreq9=$vampreq9+$vyield;
                            }
                            if($vbarangay=="San Francisco" && $vcrops=="Eggplant")
                            {
                                $vampreq109=$vampreq109+$vyield;
                            }
                            if($vbarangay=="San Francisco" && $vcrops=="Squash")
                            {
                                $vampreq209=$vampreq209+$vyield;
                            }
                            if($vbarangay=="San Francisco" && $vcrops=="Cucumber")
                            {
                                $vampreq309=$vampreq309+$vyield;
                            }
                            if($vbarangay=="San Francisco" && $vcrops=="Okra")
                            {
                                $vampreq409=$vampreq409+$vyield;
                            }
                            if($vbarangay=="San Francisco" && $vcrops=="Pole Sitao")
                            {
                                $vampreq509=$vampreq509+$vyield;
                            }
                            if($vbarangay=="San Francisco" && $vcrops=="Tomato")
                            {
                                $vampreq609=$vampreq609+$vyield;
                            }
                            if($vbarangay=="San Francisco" && $vcrops=="Patola")
                            {
                                $vampreq709=$vampreq709+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Isidro Norte
                            if($vbarangay=="San Isidro Norte" && $vcrops=="Ampalaya")
                            {
                                $vampreq10=$vampreq10+$vyield;
                            }
                            if($vbarangay=="San Isidro Norte" && $vcrops=="Eggplant")
                            {
                                $vampreq110=$vampreq110+$vyield;
                            }
                            if($vbarangay=="San Isidro Norte" && $vcrops=="Squash")
                            {
                                $vampreq210=$vampreq210+$vyield;
                            }
                            if($vbarangay=="San Isidro Norte" && $vcrops=="Cucumber")
                            {
                                $vampreq310=$vampreq310+$vyield;
                            }
                            if($vbarangay=="San Isidro Norte" && $vcrops=="Okra")
                            {
                                $vampreq410=$vampreq410+$vyield;
                            }
                            if($vbarangay=="San Isidro Norte" && $vcrops=="Pole Sitao")
                            {
                                $vampreq510=$vampreq510+$vyield;
                            }
                            if($vbarangay=="San Isidro Norte" && $vcrops=="Tomato")
                            {
                                $vampreq610=$vampreq610+$vyield;
                            }
                            if($vbarangay=="San Isidro Norte" && $vcrops=="Patola")
                            {
                                $vampreq710=$vampreq710+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Isidro Sur
                            if($vbarangay=="San Isidro Sur" && $vcrops=="Ampalaya")
                            {
                                $vampreq11=$vampreq11+$vyield;
                            }
                            if($vbarangay=="San Isidro Sur" && $vcrops=="Eggplant")
                            {
                                $vampreq111=$vampreq111+$vyield;
                            }
                            if($vbarangay=="San Isidro Sur" && $vcrops=="Squash")
                            {
                                $vampreq211=$vampreq211+$vyield;
                            }
                            if($vbarangay=="San Isidro Sur" && $vcrops=="Cucumber")
                            {
                                $vampreq311=$vampreq311+$vyield;
                            }
                            if($vbarangay=="San Isidro Sur" && $vcrops=="Okra")
                            {
                                $vampreq411=$vampreq411+$vyield;
                            }
                            if($vbarangay=="San Isidro Sur" && $vcrops=="Pole Sitao")
                            {
                                $vampreq511=$vampreq511+$vyield;
                            }
                            if($vbarangay=="San Isidro Sur" && $vcrops=="Tomato")
                            {
                                $vampreq611=$vampreq611+$vyield;
                            }
                            if($vbarangay=="San Isidro Sur" && $vcrops=="Patola")
                            {
                                $vampreq711=$vampreq711+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Joaquin
                            if($vbarangay=="San Joaquin" && $vcrops=="Ampalaya")
                            {
                                $vampreq12=$vampreq12+$vyield;
                            }
                            if($vbarangay=="San Joaquin" && $vcrops=="Eggplant")
                            {
                                $vampreq112=$vampreq112+$vyield;
                            }
                            if($vbarangay=="San Joaquin" && $vcrops=="Squash")
                            {
                                $vampreq212=$vampreq212+$vyield;
                            }
                            if($vbarangay=="San Joaquin" && $vcrops=="Cucumber")
                            {
                                $vampreq312=$vampreq312+$vyield;
                            }
                            if($vbarangay=="San Joaquin" && $vcrops=="Okra")
                            {
                                $vampreq412=$vampreq412+$vyield;
                            }
                            if($vbarangay=="San Joaquin" && $vcrops=="Pole Sitao")
                            {
                                $vampreq512=$vampreq512+$vyield;
                            }
                            if($vbarangay=="San Joaquin" && $vcrops=="Tomato")
                            {
                                $vampreq612=$vampreq612+$vyield;
                            }
                            if($vbarangay=="San Joaquin" && $vcrops=="Patola")
                            {
                                $vampreq712=$vampreq712+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Jose
                            if($vbarangay=="San Jose" && $vcrops=="Ampalaya")
                            {
                                $vampreq13=$vampreq13+$vyield;
                            }
                            if($vbarangay=="San Jose" && $vcrops=="Eggplant")
                            {
                                $vampreq113=$vampreq113+$vyield;
                            }
                            if($vbarangay=="San Jose" && $vcrops=="Squash")
                            {
                                $vampreq213=$vampreq213+$vyield;
                            }
                            if($vbarangay=="San Jose" && $vcrops=="Cucumber")
                            {
                                $vampreq313=$vampreq313+$vyield;
                            }
                            if($vbarangay=="San Jose" && $vcrops=="Okra")
                            {
                                $vampreq413=$vampreq413+$vyield;
                            }
                            if($vbarangay=="San Jose" && $vcrops=="Pole Sitao")
                            {
                                $vampreq513=$vampreq513+$vyield;
                            }
                            if($vbarangay=="San Jose" && $vcrops=="Tomato")
                            {
                                $vampreq613=$vampreq613+$vyield;
                            }
                            if($vbarangay=="San Jose" && $vcrops=="Patola")
                            {
                                $vampreq713=$vampreq713+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Juan
                            if($vbarangay=="San Juan" && $vcrops=="Ampalaya")
                            {
                                $vampreq14=$vampreq14+$vyield;
                            }
                            if($vbarangay=="San Juan" && $vcrops=="Eggplant")
                            {
                                $vampreq114=$vampreq114+$vyield;
                            }
                            if($vbarangay=="San Juan" && $vcrops=="Squash")
                            {
                                $vampreq214=$vampreq214+$vyield;
                            }
                            if($vbarangay=="San Juan" && $vcrops=="Cucumber")
                            {
                                $vampreq314=$vampreq314+$vyield;
                            }
                            if($vbarangay=="San Juan" && $vcrops=="Okra")
                            {
                                $vampreq414=$vampreq414+$vyield;
                            }
                            if($vbarangay=="San Juan" && $vcrops=="Pole Sitao")
                            {
                                $vampreq514=$vampreq514+$vyield;
                            }
                            if($vbarangay=="San Juan" && $vcrops=="Tomato")
                            {
                                $vampreq614=$vampreq614+$vyield;
                            }
                            if($vbarangay=="San Juan" && $vcrops=="Patola")
                            {
                                $vampreq714=$vampreq714+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Luis
                            if($vbarangay=="San Luis" && $vcrops=="Ampalaya")
                            {
                                $vampreq15=$vampreq15+$vyield;
                            }
                            if($vbarangay=="San Luis" && $vcrops=="Eggplant")
                            {
                                $vampreq115=$vampreq115+$vyield;
                            }
                            if($vbarangay=="San Luis" && $vcrops=="Squash")
                            {
                                $vampreq215=$vampreq215+$vyield;
                            }
                            if($vbarangay=="San Luis" && $vcrops=="Cucumber")
                            {
                                $vampreq315=$vampreq315+$vyield;
                            }
                            if($vbarangay=="San Luis" && $vcrops=="Okra")
                            {
                                $vampreq415=$vampreq415+$vyield;
                            }
                            if($vbarangay=="San Luis" && $vcrops=="Pole Sitao")
                            {
                                $vampreq515=$vampreq515+$vyield;
                            }
                            if($vbarangay=="San Luis" && $vcrops=="Tomato")
                            {
                                $vampreq615=$vampreq615+$vyield;
                            }
                            if($vbarangay=="San Luis" && $vcrops=="Patola")
                            {
                                $vampreq715=$vampreq715+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Pablo
                            if($vbarangay=="San Pablo" && $vcrops=="Ampalaya")
                            {
                                $vampreq16=$vampreq16+$vyield;
                            }
                            if($vbarangay=="San Pablo" && $vcrops=="Eggplant")
                            {
                                $vampreq116=$vampreq116+$vyield;
                            }
                            if($vbarangay=="San Pablo" && $vcrops=="Squash")
                            {
                                $vampreq216=$vampreq216+$vyield;
                            }
                            if($vbarangay=="San Pablo" && $vcrops=="Cucumber")
                            {
                                $vampreq316=$vampreq316+$vyield;
                            }
                            if($vbarangay=="San Pablo" && $vcrops=="Okra")
                            {
                                $vampreq416=$vampreq416+$vyield;
                            }
                            if($vbarangay=="San Pablo" && $vcrops=="Pole Sitao")
                            {
                                $vampreq516=$vampreq516+$vyield;
                            }
                            if($vbarangay=="San Pablo" && $vcrops=="Tomato")
                            {
                                $vampreq616=$vampreq616+$vyield;
                            }
                            if($vbarangay=="San Pablo" && $vcrops=="Patola")
                            {
                                $vampreq716=$vampreq716+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////San Pedro
                            if($vbarangay=="San Pedro" && $vcrops=="Ampalaya")
                            {
                                $vampreq17=$vampreq17+$vyield;
                            }
                            if($vbarangay=="San Pedro" && $vcrops=="Eggplant")
                            {
                                $vampreq117=$vampreq117+$vyield;
                            }
                            if($vbarangay=="San Pedro" && $vcrops=="Squash")
                            {
                                $vampreq217=$vampreq217+$vyield;
                            }
                            if($vbarangay=="San Pedro" && $vcrops=="Cucumber")
                            {
                                $vampreq317=$vampreq317+$vyield;
                            }
                            if($vbarangay=="San Pedro" && $vcrops=="Okra")
                            {
                                $vampreq417=$vampreq417+$vyield;
                            }
                            if($vbarangay=="San Pedro" && $vcrops=="Pole Sitao")
                            {
                                $vampreq517=$vampreq517+$vyield;
                            }
                            if($vbarangay=="San Pedro" && $vcrops=="Tomato")
                            {
                                $vampreq617=$vampreq617+$vyield;
                            }
                            if($vbarangay=="San Pedro" && $vcrops=="Patola")
                            {
                                $vampreq717=$vampreq717+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santa Teresita
                            if($vbarangay=="Santa Teresita" && $vcrops=="Ampalaya")
                            {
                                $vampreq18=$vampreq18+$vyield;
                            }
                            if($vbarangay=="Santa Teresita" && $vcrops=="Eggplant")
                            {
                                $vampreq118=$vampreq118+$vyield;
                            }
                            if($vbarangay=="Santa Teresita" && $vcrops=="Squash")
                            {
                                $vampreq218=$vampreq218+$vyield;
                            }
                            if($vbarangay=="Santa Teresita" && $vcrops=="Cucumber")
                            {
                                $vampreq318=$vampreq318+$vyield;
                            }
                            if($vbarangay=="Santa Teresita" && $vcrops=="Okra")
                            {
                                $vampreq418=$vampreq418+$vyield;
                            }
                            if($vbarangay=="Santa Teresita" && $vcrops=="Pole Sitao")
                            {
                                $vampreq518=$vampreq518+$vyield;
                            }
                            if($vbarangay=="Santa Teresita" && $vcrops=="Tomato")
                            {
                                $vampreq618=$vampreq618+$vyield;
                            }
                            if($vbarangay=="Santa Teresita" && $vcrops=="Patola")
                            {
                                $vampreq718=$vampreq718+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santa Maria
                            if($vbarangay=="Santa Maria" && $vcrops=="Ampalaya")
                            {
                                $vampreq19=$vampreq19+$vyield;
                            }
                            if($vbarangay=="Santa Maria" && $vcrops=="Eggplant")
                            {
                                $vampreq119=$vampreq119+$vyield;
                            }
                            if($vbarangay=="Santa Maria" && $vcrops=="Squash")
                            {
                                $vampreq219=$vampreq219+$vyield;
                            }
                            if($vbarangay=="Santa Maria" && $vcrops=="Cucumber")
                            {
                                $vampreq319=$vampreq319+$vyield;
                            }
                            if($vbarangay=="Santa Maria" && $vcrops=="Okra")
                            {
                                $vampreq419=$vampreq419+$vyield;
                            }
                            if($vbarangay=="Santa Maria" && $vcrops=="Pole Sitao")
                            {
                                $vampreq519=$vampreq519+$vyield;
                            }
                            if($vbarangay=="Santa Maria" && $vcrops=="Tomato")
                            {
                                $vampreq619=$vampreq619+$vyield;
                            }
                            if($vbarangay=="Santa Maria" && $vcrops=="Patola")
                            {
                                $vampreq719=$vampreq719+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santa Elena
                            if($vbarangay=="Santa Elena" && $vcrops=="Ampalaya")
                            {
                                $vampreq20=$vampreq20+$vyield;
                            }
                            if($vbarangay=="Santa Elena" && $vcrops=="Eggplant")
                            {
                                $vampreq120=$vampreq120+$vyield;
                            }
                            if($vbarangay=="Santa Elena" && $vcrops=="Squash")
                            {
                                $vampreq220=$vampreq220+$vyield;
                            }
                            if($vbarangay=="Santa Elena" && $vcrops=="Cucumber")
                            {
                                $vampreq320=$vampreq320+$vyield;
                            }
                            if($vbarangay=="Santa Elena" && $vcrops=="Okra")
                            {
                                $vampreq420=$vampreq420+$vyield;
                            }
                            if($vbarangay=="Santa Elena" && $vcrops=="Pole Sitao")
                            {
                                $vampreq520=$vampreq520+$vyield;
                            }
                            if($vbarangay=="Santa Elena" && $vcrops=="Tomato")
                            {
                                $vampreq620=$vampreq620+$vyield;
                            }
                            if($vbarangay=="Santa Elena" && $vcrops=="Patola")
                            {
                                $vampreq720=$vampreq720+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santa Clara
                            if($vbarangay=="Santa Clara" && $vcrops=="Ampalaya")
                            {
                                $vampreq21=$vampreq21+$vyield;
                            }
                            if($vbarangay=="Santa Clara" && $vcrops=="Eggplant")
                            {
                                $vampreq121=$vampreq121+$vyield;
                            }
                            if($vbarangay=="Santa Clara" && $vcrops=="Squash")
                            {
                                $vampreq221=$vampreq221+$vyield;
                            }
                            if($vbarangay=="Santa Clara" && $vcrops=="Cucumber")
                            {
                                $vampreq321=$vampreq321+$vyield;
                            }
                            if($vbarangay=="Santa Clara" && $vcrops=="Okra")
                            {
                                $vampreq421=$vampreq421+$vyield;
                            }
                            if($vbarangay=="Santa Clara" && $vcrops=="Pole Sitao")
                            {
                                $vampreq521=$vampreq521+$vyield;
                            }
                            if($vbarangay=="Santa Clara" && $vcrops=="Tomato")
                            {
                                $vampreq621=$vampreq621+$vyield;
                            }
                            if($vbarangay=="Santa Clara" && $vcrops=="Patola")
                            {
                                $vampreq721=$vampreq721+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santa Anastacia
                            if($vbarangay=="Santa Anastacia" && $vcrops=="Ampalaya")
                            {
                                $vampreq22=$vampreq22+$vyield;
                            }
                            if($vbarangay=="Santa Anastacia" && $vcrops=="Eggplant")
                            {
                                $vampreq122=$vampreq122+$vyield;
                            }
                            if($vbarangay=="Santa Anastacia" && $vcrops=="Squash")
                            {
                                $vampreq222=$vampreq222+$vyield;
                            }
                            if($vbarangay=="Santa Anastacia" && $vcrops=="Cucumber")
                            {
                                $vampreq322=$vampreq322+$vyield;
                            }
                            if($vbarangay=="Santa Anastacia" && $vcrops=="Okra")
                            {
                                $vampreq422=$vampreq422+$vyield;
                            }
                            if($vbarangay=="Santa Anastacia" && $vcrops=="Pole Sitao")
                            {
                                $vampreq522=$vampreq522+$vyield;
                            }
                            if($vbarangay=="Santa Anastacia" && $vcrops=="Tomato")
                            {
                                $vampreq622=$vampreq622+$vyield;
                            }
                            if($vbarangay=="Santa Anastacia" && $vcrops=="Patola")
                            {
                                $vampreq722=$vampreq722+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santa Ana
                            if($vbarangay=="Santa Ana" && $vcrops=="Ampalaya")
                            {
                                $vampreq23=$vampreq23+$vyield;
                            }
                            if($vbarangay=="Santa Ana" && $vcrops=="Eggplant")
                            {
                                $vampreq123=$vampreq123+$vyield;
                            }
                            if($vbarangay=="Santa Ana" && $vcrops=="Squash")
                            {
                                $vampreq223=$vampreq223+$vyield;
                            }
                            if($vbarangay=="Santa Ana" && $vcrops=="Cucumber")
                            {
                                $vampreq323=$vampreq323+$vyield;
                            }
                            if($vbarangay=="Santa Ana" && $vcrops=="Okra")
                            {
                                $vampreq423=$vampreq423+$vyield;
                            }
                            if($vbarangay=="Santa Ana" && $vcrops=="Pole Sitao")
                            {
                                $vampreq523=$vampreq523+$vyield;
                            }
                            if($vbarangay=="Santa Ana" && $vcrops=="Tomato")
                            {
                                $vampreq623=$vampreq623+$vyield;
                            }
                            if($vbarangay=="Santa Ana" && $vcrops=="Patola")
                            {
                                $vampreq723=$vampreq723+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santa Cruz
                            if($vbarangay=="Santa Cruz" && $vcrops=="Ampalaya")
                            {
                                $vampreq24=$vampreq24+$vyield;
                            }
                            if($vbarangay=="Santa Cruz" && $vcrops=="Eggplant")
                            {
                                $vampreq124=$vampreq124+$vyield;
                            }
                            if($vbarangay=="Santa Cruz" && $vcrops=="Squash")
                            {
                                $vampreq224=$vampreq224+$vyield;
                            }
                            if($vbarangay=="Santa Cruz" && $vcrops=="Cucumber")
                            {
                                $vampreq324=$vampreq324+$vyield;
                            }
                            if($vbarangay=="Santa Cruz" && $vcrops=="Okra")
                            {
                                $vampreq424=$vampreq424+$vyield;
                            }
                            if($vbarangay=="Santa Cruz" && $vcrops=="Pole Sitao")
                            {
                                $vampreq524=$vampreq524+$vyield;
                            }
                            if($vbarangay=="Santa Cruz" && $vcrops=="Tomato")
                            {
                                $vampreq624=$vampreq624+$vyield;
                            }
                            if($vbarangay=="Santa Cruz" && $vcrops=="Patola")
                            {
                                $vampreq724=$vampreq724+$vyield;
                            }
                            /////////////////////////////////
                            
                            /////////////////////////////////Santa Vicente
                            if($vbarangay=="Santa Vicente" && $vcrops=="Ampalaya")
                            {
                                $vampreq25=$vampreq25+$vyield;
                            }
                            if($vbarangay=="Santa Vicente" && $vcrops=="Eggplant")
                            {
                                $vampreq125=$vampreq125+$vyield;
                            }
                            if($vbarangay=="Santa Vicente" && $vcrops=="Squash")
                            {
                                $vampreq225=$vampreq225+$vyield;
                            }
                            if($vbarangay=="Santa Vicente" && $vcrops=="Cucumber")
                            {
                                $vampreq325=$vampreq325+$vyield;
                            }
                            if($vbarangay=="Santa Vicente" && $vcrops=="Okra")
                            {
                                $vampreq425=$vampreq425+$vyield;
                            }
                            if($vbarangay=="Santa Vicente" && $vcrops=="Pole Sitao")
                            {
                                $vampreq525=$vampreq525+$vyield;
                            }
                            if($vbarangay=="Santa Vicente" && $vcrops=="Tomato")
                            {
                                $vampreq625=$vampreq625+$vyield;
                            }
                            if($vbarangay=="Santa Vicente" && $vcrops=="Patola")
                            {
                                $vampreq725=$vampreq725+$vyield;
                            }
                            /////////////////////////////////
                        }

//$vampreq2=300;      
//$vampreq3=432;      
//$vampreq4=234;      
//$vampreq5=332;      
//$vampreq6=33;      
//$vampreq7=233;      
?>
    
<script>
        
      anychart.onDocumentReady(function () {

  // create the data 
  var data = [
    { x: "Ampalaya", y: "San Agustin", heat: <?php echo $vampreq1; ?> },
    { x: "Ampalaya", y: "San Antonio", heat: <?php echo $vampreq2; ?> },
    { x: "Ampalaya", y: "San Rafael", heat: <?php echo $vampreq3; ?> },
    { x: "Ampalaya", y: "Santiago", heat: <?php echo $vampreq4; ?> },
    { x: "Ampalaya", y: "San Bartolome", heat: <?php echo $vampreq5; ?> },
    { x: "Ampalaya", y: "San Miguel", heat: <?php echo $vampreq6; ?> },
    { x: "Ampalaya", y: "San Felix", heat: <?php echo $vampreq7; ?> },
    { x: "Ampalaya", y: "San Fernando", heat: <?php echo $vampreq8; ?> },
    { x: "Ampalaya", y: "San Francisco", heat: <?php echo $vampreq9; ?> },
    { x: "Ampalaya", y: "San Isidro Norte", heat: <?php echo $vampreq10; ?> },
    { x: "Ampalaya", y: "San Isidro Sur", heat: <?php echo $vampreq11; ?> },
    { x: "Ampalaya", y: "San Joaquin", heat: <?php echo $vampreq12; ?> },
    { x: "Ampalaya", y: "San Jose", heat: <?php echo $vampreq13; ?> },
    { x: "Ampalaya", y: "San Juan", heat: <?php echo $vampreq14; ?> },
    { x: "Ampalaya", y: "San Luis", heat: <?php echo $vampreq15; ?> },
    { x: "Ampalaya", y: "San Pablo", heat: <?php echo $vampreq16; ?> },
    { x: "Ampalaya", y: "San Pedro", heat: <?php echo $vampreq17; ?> },
    { x: "Ampalaya", y: "Santa Teresita", heat: <?php echo $vampreq18; ?> },
    { x: "Ampalaya", y: "Santa Maria", heat: <?php echo $vampreq19; ?> },
    { x: "Ampalaya", y: "Santa Elena", heat: <?php echo $vampreq20; ?> },
    { x: "Ampalaya", y: "Santa Clara", heat: <?php echo $vampreq21; ?> },
    { x: "Ampalaya", y: "Santa Anastacia", heat: <?php echo $vampreq22; ?> },
    { x: "Ampalaya", y: "Santa Ana", heat: <?php echo $vampreq23; ?> },
    { x: "Ampalaya", y: "Santa Cruz", heat: <?php echo $vampreq24; ?> },
    { x: "Ampalaya", y: "San Vicente", heat: <?php echo $vampreq25; ?> },
     
    { x: "Eggplant", y: "San Agustin", heat: <?php echo $vampreq101; ?> },
    { x: "Eggplant", y: "San Antonio", heat: <?php echo $vampreq102; ?> },
    { x: "Eggplant", y: "San Rafael", heat: <?php echo $vampreq103; ?> },
    { x: "Eggplant", y: "Santiago", heat: <?php echo $vampreq104; ?> },
    { x: "Eggplant", y: "San Bartolome", heat: <?php echo $vampreq105; ?> },
    { x: "Eggplant", y: "San Miguel", heat: <?php echo $vampreq106; ?> },
    { x: "Eggplant", y: "San Felix", heat: <?php echo $vampreq107; ?> },
    { x: "Eggplant", y: "San Fernando", heat: <?php echo $vampreq108; ?> },
    { x: "Eggplant", y: "San Francisco", heat: <?php echo $vampreq109; ?> },
    { x: "Eggplant", y: "San Isidro Norte", heat: <?php echo $vampreq110; ?> },
    { x: "Eggplant", y: "San Isidro Sur", heat: <?php echo $vampreq111; ?> },
    { x: "Eggplant", y: "San Joaquin", heat: <?php echo $vampreq112; ?> },
    { x: "Eggplant", y: "San Jose", heat: <?php echo $vampreq113; ?> },
    { x: "Eggplant", y: "San Juan", heat: <?php echo $vampreq114; ?> },
    { x: "Eggplant", y: "San Luis", heat: <?php echo $vampreq115; ?> },
    { x: "Eggplant", y: "San Pablo", heat: <?php echo $vampreq116; ?> },
    { x: "Eggplant", y: "San Pedro", heat: <?php echo $vampreq117; ?> },
    { x: "Eggplant", y: "Santa Teresita", heat: <?php echo $vampreq118; ?> },
    { x: "Eggplant", y: "Santa Maria", heat: <?php echo $vampreq119; ?> },
    { x: "Eggplant", y: "Santa Elena", heat: <?php echo $vampreq120; ?> },
    { x: "Eggplant", y: "Santa Clara", heat: <?php echo $vampreq121; ?> },
    { x: "Eggplant", y: "Santa Anastacia", heat: <?php echo $vampreq122; ?> },
    { x: "Eggplant", y: "Santa Ana", heat: <?php echo $vampreq123; ?> },
    { x: "Eggplant", y: "Santa Cruz", heat: <?php echo $vampreq124; ?> },
    { x: "Eggplant", y: "San Vicente", heat: <?php echo $vampreq125; ?> },
      
    { x: "Squash", y: "San Agustin", heat: <?php echo $vampreq201; ?> },
    { x: "Squash", y: "San Antonio", heat: <?php echo $vampreq202; ?> },
    { x: "Squash", y: "San Rafael", heat: <?php echo $vampreq203; ?> },
    { x: "Squash", y: "Santiago", heat: <?php echo $vampreq204; ?> },
    { x: "Squash", y: "San Bartolome", heat: <?php echo $vampreq205; ?> },
    { x: "Squash", y: "San Miguel", heat: <?php echo $vampreq206; ?> },
    { x: "Squash", y: "San Felix", heat: <?php echo $vampreq207; ?> },
    { x: "Squash", y: "San Fernando", heat: <?php echo $vampreq208; ?> },
    { x: "Squash", y: "San Francisco", heat: <?php echo $vampreq209; ?> },
    { x: "Squash", y: "San Isidro Norte", heat: <?php echo $vampreq210; ?> },
    { x: "Squash", y: "San Isidro Sur", heat: <?php echo $vampreq211; ?> },
    { x: "Squash", y: "San Joaquin", heat: <?php echo $vampreq212; ?> },
    { x: "Squash", y: "San Jose", heat: <?php echo $vampreq213; ?> },
    { x: "Squash", y: "San Juan", heat: <?php echo $vampreq214; ?> },
    { x: "Squash", y: "San Luis", heat: <?php echo $vampreq215; ?> },
    { x: "Squash", y: "San Pablo", heat: <?php echo $vampreq216; ?> },
    { x: "Squash", y: "San Pedro", heat: <?php echo $vampreq217; ?> },
    { x: "Squash", y: "Santa Teresita", heat: <?php echo $vampreq218; ?> },
    { x: "Squash", y: "Santa Maria", heat: <?php echo $vampreq219; ?> },
    { x: "Squash", y: "Santa Elena", heat: <?php echo $vampreq220; ?> },
    { x: "Squash", y: "Santa Clara", heat: <?php echo $vampreq221; ?> },
    { x: "Squash", y: "Santa Anastacia", heat: <?php echo $vampreq222; ?> },
    { x: "Squash", y: "Santa Ana", heat: <?php echo $vampreq223; ?> },
    { x: "Squash", y: "Santa Cruz", heat: <?php echo $vampreq224; ?> },
    { x: "Squash", y: "San Vicente", heat: <?php echo $vampreq225; ?> },
     
    { x: "Cucumber", y: "San Agustin", heat: <?php echo $vampreq301; ?> },
    { x: "Cucumber", y: "San Antonio", heat: <?php echo $vampreq302; ?> },
    { x: "Cucumber", y: "San Rafael", heat: <?php echo $vampreq303; ?> },
    { x: "Cucumber", y: "Santiago", heat: <?php echo $vampreq304; ?> },
    { x: "Cucumber", y: "San Bartolome", heat: <?php echo $vampreq305; ?> },
    { x: "Cucumber", y: "San Miguel", heat: <?php echo $vampreq306; ?> },
    { x: "Cucumber", y: "San Felix", heat: <?php echo $vampreq307; ?> },
    { x: "Cucumber", y: "San Fernando", heat: <?php echo $vampreq308; ?> },
    { x: "Cucumber", y: "San Francisco", heat: <?php echo $vampreq309; ?> },
    { x: "Cucumber", y: "San Isidro Norte", heat: <?php echo $vampreq310; ?> },
    { x: "Cucumber", y: "San Isidro Sur", heat: <?php echo $vampreq311; ?> },
    { x: "Cucumber", y: "San Joaquin", heat: <?php echo $vampreq312; ?> },
    { x: "Cucumber", y: "San Jose", heat: <?php echo $vampreq313; ?> },
    { x: "Cucumber", y: "San Juan", heat: <?php echo $vampreq314; ?> },
    { x: "Cucumber", y: "San Luis", heat: <?php echo $vampreq315; ?> },
    { x: "Cucumber", y: "San Pablo", heat: <?php echo $vampreq316; ?> },
    { x: "Cucumber", y: "San Pedro", heat: <?php echo $vampreq317; ?> },
    { x: "Cucumber", y: "Santa Teresita", heat: <?php echo $vampreq318; ?> },
    { x: "Cucumber", y: "Santa Maria", heat: <?php echo $vampreq319; ?> },
    { x: "Cucumber", y: "Santa Elena", heat: <?php echo $vampreq320; ?> },
    { x: "Cucumber", y: "Santa Clara", heat: <?php echo $vampreq321; ?> },
    { x: "Cucumber", y: "Santa Anastacia", heat: <?php echo $vampreq322; ?> },
    { x: "Cucumber", y: "Santa Ana", heat: <?php echo $vampreq323; ?> },
    { x: "Cucumber", y: "Santa Cruz", heat: <?php echo $vampreq324; ?> },
    { x: "Cucumber", y: "San Vicente", heat: <?php echo $vampreq325; ?> },
      
    { x: "Okra", y: "San Agustin", heat: <?php echo $vampreq401; ?> },
    { x: "Okra", y: "San Antonio", heat: <?php echo $vampreq402; ?> },
    { x: "Okra", y: "San Rafael", heat: <?php echo $vampreq403; ?> },
    { x: "Okra", y: "Santiago", heat: <?php echo $vampreq404; ?> },
    { x: "Okra", y: "San Bartolome", heat: <?php echo $vampreq405; ?> },
    { x: "Okra", y: "San Miguel", heat: <?php echo $vampreq406; ?> },
    { x: "Okra", y: "San Felix", heat: <?php echo $vampreq407; ?> },
    { x: "Okra", y: "San Fernando", heat: <?php echo $vampreq408; ?> },
    { x: "Okra", y: "San Francisco", heat: <?php echo $vampreq409; ?> },
    { x: "Okra", y: "San Isidro Norte", heat: <?php echo $vampreq410; ?> },
    { x: "Okra", y: "San Isidro Sur", heat: <?php echo $vampreq411; ?> },
    { x: "Okra", y: "San Joaquin", heat: <?php echo $vampreq412; ?> },
    { x: "Okra", y: "San Jose", heat: <?php echo $vampreq413; ?> },
    { x: "Okra", y: "San Juan", heat: <?php echo $vampreq414; ?> },
    { x: "Okra", y: "San Luis", heat: <?php echo $vampreq415; ?> },
    { x: "Okra", y: "San Pablo", heat: <?php echo $vampreq416; ?> },
    { x: "Okra", y: "San Pedro", heat: <?php echo $vampreq417; ?> },
    { x: "Okra", y: "Santa Teresita", heat: <?php echo $vampreq418; ?> },
    { x: "Okra", y: "Santa Maria", heat: <?php echo $vampreq419; ?> },
    { x: "Okra", y: "Santa Elena", heat: <?php echo $vampreq420; ?> },
    { x: "Okra", y: "Santa Clara", heat: <?php echo $vampreq421; ?> },
    { x: "Okra", y: "Santa Anastacia", heat: <?php echo $vampreq422; ?> },
    { x: "Okra", y: "Santa Ana", heat: <?php echo $vampreq423; ?> },
    { x: "Okra", y: "Santa Cruz", heat: <?php echo $vampreq424; ?> },
    { x: "Okra", y: "San Vicente", heat: <?php echo $vampreq425; ?> },
    
    { x: "Pole Sitao", y: "San Agustin", heat: <?php echo $vampreq501; ?> },
    { x: "Pole Sitao", y: "San Antonio", heat: <?php echo $vampreq502; ?> },
    { x: "Pole Sitao", y: "San Rafael", heat: <?php echo $vampreq503; ?> },
    { x: "Pole Sitao", y: "Santiago", heat: <?php echo $vampreq504; ?> },
    { x: "Pole Sitao", y: "San Bartolome", heat: <?php echo $vampreq505; ?> },
    { x: "Pole Sitao", y: "San Miguel", heat: <?php echo $vampreq506; ?> },
    { x: "Pole Sitao", y: "San Felix", heat: <?php echo $vampreq507; ?> },
    { x: "Pole Sitao", y: "San Fernando", heat: <?php echo $vampreq508; ?> },
    { x: "Pole Sitao", y: "San Francisco", heat: <?php echo $vampreq509; ?> },
    { x: "Pole Sitao", y: "San Isidro Norte", heat: <?php echo $vampreq510; ?> },
    { x: "Pole Sitao", y: "San Isidro Sur", heat: <?php echo $vampreq511; ?> },
    { x: "Pole Sitao", y: "San Joaquin", heat: <?php echo $vampreq512; ?> },
    { x: "Pole Sitao", y: "San Jose", heat: <?php echo $vampreq513; ?> },
    { x: "Pole Sitao", y: "San Juan", heat: <?php echo $vampreq514; ?> },
    { x: "Pole Sitao", y: "San Luis", heat: <?php echo $vampreq515; ?> },
    { x: "Pole Sitao", y: "San Pablo", heat: <?php echo $vampreq516; ?> },
    { x: "Pole Sitao", y: "San Pedro", heat: <?php echo $vampreq517; ?> },
    { x: "Pole Sitao", y: "Santa Teresita", heat: <?php echo $vampreq518; ?> },
    { x: "Pole Sitao", y: "Santa Maria", heat: <?php echo $vampreq519; ?> },
    { x: "Pole Sitao", y: "Santa Elena", heat: <?php echo $vampreq520; ?> },
    { x: "Pole Sitao", y: "Santa Clara", heat: <?php echo $vampreq521; ?> },
    { x: "Pole Sitao", y: "Santa Anastacia", heat: <?php echo $vampreq522; ?> },
    { x: "Pole Sitao", y: "Santa Ana", heat: <?php echo $vampreq523; ?> },
    { x: "Pole Sitao", y: "Santa Cruz", heat: <?php echo $vampreq524; ?> },
    { x: "Pole Sitao", y: "San Vicente", heat: <?php echo $vampreq525; ?> },
      
    { x: "Tomato", y: "San Agustin", heat: <?php echo $vampreq601; ?> },
    { x: "Tomato", y: "San Antonio", heat: <?php echo $vampreq602; ?> },
    { x: "Tomato", y: "San Rafael", heat: <?php echo $vampreq603; ?> },
    { x: "Tomato", y: "Santiago", heat: <?php echo $vampreq604; ?> },
    { x: "Tomato", y: "San Bartolome", heat: <?php echo $vampreq605; ?> },
    { x: "Tomato", y: "San Miguel", heat: <?php echo $vampreq606; ?> },
    { x: "Tomato", y: "San Felix", heat: <?php echo $vampreq607; ?> },
    { x: "Tomato", y: "San Fernando", heat: <?php echo $vampreq608; ?> },
    { x: "Tomato", y: "San Francisco", heat: <?php echo $vampreq609; ?> },
    { x: "Tomato", y: "San Isidro Norte", heat: <?php echo $vampreq610; ?> },
    { x: "Tomato", y: "San Isidro Sur", heat: <?php echo $vampreq611; ?> },
    { x: "Tomato", y: "San Joaquin", heat: <?php echo $vampreq612; ?> },
    { x: "Tomato", y: "San Jose", heat: <?php echo $vampreq613; ?> },
    { x: "Tomato", y: "San Juan", heat: <?php echo $vampreq614; ?> },
    { x: "Tomato", y: "San Luis", heat: <?php echo $vampreq615; ?> },
    { x: "Tomato", y: "San Pablo", heat: <?php echo $vampreq616; ?> },
    { x: "Tomato", y: "San Pedro", heat: <?php echo $vampreq617; ?> },
    { x: "Tomato", y: "Santa Teresita", heat: <?php echo $vampreq618; ?> },
    { x: "Tomato", y: "Santa Maria", heat: <?php echo $vampreq619; ?> },
    { x: "Tomato", y: "Santa Elena", heat: <?php echo $vampreq620; ?> },
    { x: "Tomato", y: "Santa Clara", heat: <?php echo $vampreq621; ?> },
    { x: "Tomato", y: "Santa Anastacia", heat: <?php echo $vampreq622; ?> },
    { x: "Tomato", y: "Santa Ana", heat: <?php echo $vampreq623; ?> },
    { x: "Tomato", y: "Santa Cruz", heat: <?php echo $vampreq624; ?> },
    { x: "Tomato", y: "San Vicente", heat: <?php echo $vampreq625; ?> },
    
    { x: "Patola", y: "San Agustin", heat: <?php echo $vampreq701; ?> },
    { x: "Patola", y: "San Antonio", heat: <?php echo $vampreq702; ?> },
    { x: "Patola", y: "San Rafael", heat: <?php echo $vampreq703; ?> },
    { x: "Patola", y: "Santiago", heat: <?php echo $vampreq704; ?> },
    { x: "Patola", y: "San Bartolome", heat: <?php echo $vampreq705; ?> },
    { x: "Patola", y: "San Miguel", heat: <?php echo $vampreq706; ?> },
    { x: "Patola", y: "San Felix", heat: <?php echo $vampreq707; ?> },
    { x: "Patola", y: "San Fernando", heat: <?php echo $vampreq708; ?> },
    { x: "Patola", y: "San Francisco", heat: <?php echo $vampreq709; ?> },
    { x: "Patola", y: "San Isidro Norte", heat: <?php echo $vampreq710; ?> },
    { x: "Patola", y: "San Isidro Sur", heat: <?php echo $vampreq711; ?> },
    { x: "Patola", y: "San Joaquin", heat: <?php echo $vampreq712; ?> },
    { x: "Patola", y: "San Jose", heat: <?php echo $vampreq713; ?> },
    { x: "Patola", y: "San Juan", heat: <?php echo $vampreq714; ?> },
    { x: "Patola", y: "San Luis", heat: <?php echo $vampreq715; ?> },
    { x: "Patola", y: "San Pablo", heat: <?php echo $vampreq716; ?> },
    { x: "Patola", y: "San Pedro", heat: <?php echo $vampreq717; ?> },
    { x: "Patola", y: "Santa Teresita", heat: <?php echo $vampreq718; ?> },
    { x: "Patola", y: "Santa Maria", heat: <?php echo $vampreq719; ?> },
    { x: "Patola", y: "Santa Elena", heat: <?php echo $vampreq720; ?> },
    { x: "Patola", y: "Santa Clara", heat: <?php echo $vampreq721; ?> },
    { x: "Patola", y: "Santa Anastacia", heat: <?php echo $vampreq722; ?> },
    { x: "Patola", y: "Santa Ana", heat: <?php echo $vampreq723; ?> },
    { x: "Patola", y: "Santa Cruz", heat: <?php echo $vampreq724; ?> },
    { x: "Patola", y: "San Vicente", heat: <?php echo $vampreq725; ?> },
  ];        
        
  // create the chart and set the data
  chart = anychart.heatMap(data);
        
  // set the chart title
  chart.title("Yields Per Barangay");
        
  // create and configure the color scale
  var customColorScale = anychart.scales.ordinalColor();
  customColorScale.ranges([
    //{ less: 0.549 },
    //{ from: 0.550, to: 0.699 },
    //{ from: 0.700, to: 0.799 },
    //{ greater: 0.800 }
      
    { less: 10000 },
    { from: 10001, to: 20000 },
    { from: 20001, to: 30000 },
    { greater: 30000 }
  ]);
  
  // set the colors for each range, from smaller to bigger
  customColorScale.colors(["#CF7A78", "#E69645", "#69A231", "#4D7623"]);
        
  // set the color scale as the color scale of the chart
  chart.colorScale(customColorScale);
  
  // enable the legend
  chart.legend(true);

// create categories
  var categoryNames = ["Low", "Medium", "High", "Very High"]
  
  // configure the tooltip
  var tooltip = chart.tooltip();
  tooltip.fontWeight(600);
  tooltip.positionMode("point");
  tooltip.format(function () {
    if (this.heat <= 10000) {
      return ("Value: " + this.heat + "\n Category: " + categoryNames[0]);
    }
    if (this.heat >= 10001 && this.heat <= 20000) {
      return ("Value: " + this.heat + "\n Category: " + categoryNames[1]);
    }
    if (this.heat >= 20001 && this.heat <= 30000) {
      return ("Value: " + this.heat + "\n Category: " + categoryNames[2]);
    }
    if (this.heat > 30000) {
      return ("Value: " + this.heat + "\n Category: " + categoryNames[3]);
    }
  });
          
  // set the container id
  chart.container("container");
        
  // initiate drawing the chart
  chart.draw();
        
});
    </script>
    <div align=left>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-warning" type="button" onclick="window.location.href='adminheatmap.php'">Seed Requests</button>
    </div>
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

