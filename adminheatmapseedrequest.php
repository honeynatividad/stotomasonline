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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   
</head>
<script>
/**
 * @license
 * Copyright 2019 G oogle LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
function initMap() {
    $.post("newmapfarmerdataseedrequest.php",
    function (data){
        //console.log('$$data--->', data);
        let mapData = JSON.parse( data );
        console.log(mapData);
        const iconBase ="https://developers.google.com/maps/documentation/javascript/examples/full/images/";
        
        let def = { lat: parseFloat(mapData[0].fldlat), lng: parseFloat(mapData[0].fldlong) };
        let map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: def,
        });
        for(let i = 0; i < mapData.length; i++) {
            let obj = mapData[i];

            let mapAddress = { lat: parseFloat(obj.fldlat), lng: parseFloat(obj.fldlong) };
           
            let fielddis = obj.requested;
            let dis = "";
            if (typeof fielddis === 'string') {
            }else{
                
                for (var key in fielddis) {
                dis=fielddis[key]+' '+dis;
                }
            }
            
            let contentString =
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">'+ obj.fldbarangay +'</h1>' +
                '<div id="bodyContent">' +
                "<p><b>Requested:</b><br>" +dis +
                "<br></p>" +
                
                "</div>" +
                "</div>";
            let infowindow = new google.maps.InfoWindow({
                content: contentString,
                ariaLabel: obj.fldbarangay,
            });
            let marker = new google.maps.Marker({
                position: mapAddress,
                icon: "https://stotomaswebsite.online/img/seed.png",
                map,
                title: obj.fldbarangay + ", Sto. Tomas, Batangas",
            });

            marker.addListener("click", () => {
                infowindow.open({
                    anchor: marker,
                    map,
                });
            });

            
        }
    });
    
    

    
}
window.initMap = initMap;
</script>
<style>
/**
* @license
* Copyright 2019 Google LLC. All Rights Reserved.
* SPDX-License-Identifier: Apache-2.0
*/
/* 
* Always set the map height explicitly to define the size of the div element
* that contains the map. 
*/
#map {
    height: 100%;
}

/* Optional: Makes the sample page fill the window. */
    html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
}
</style>
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
  <div id="map"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2D65_pObn_NrKcEMyXFei92m6luBNxJU&callback=initMap&v=weekly" defer ></script>
        <script async defer src="bin/oms.min.js?spiderfier_callback=mapLibReadyHandler"></script>
  <!-- ======= Sidebar ======= -->
  <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h5><i class="bi bi-globe2"></i>&nbsp;Mapping</h5> 
    
        </div><!-- End Page Title -->
        
    </main><!-- End #main -->

    <div id="container">

    </div> 
    <div align=right>
        <button class="btn btn-warning" type="button" onclick="window.location.href='adminheatmapfarmer.php'">Farmer</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div align=right>
        <button class="btn btn-warning" type="button" onclick="window.location.href='adminheatmapyields2.php'">Yields</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div align=right>
        <button class="btn btn-warning" type="button" onclick="window.location.href='adminheatmapseedrequest.php'">Seed Request</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div align=right>
        <button class="btn btn-warning" type="button" onclick="window.location.href='adminheatmapseeddistribution.php'">Seed Distribution</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
 
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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

