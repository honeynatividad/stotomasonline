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
<?php
	include("include/conn.php");
	session_start();
	if(isset($_POST['Log-In'])) {
	// Define's Email & Password_Main
	$Email = mysqli_real_escape_string($conn, $_POST['username']);
	$Password_Main = mysqli_real_escape_string($conn, $_POST['password']);
	//To Protect SQL Injection
	$Email = stripslashes($Email);
	$Password_Main = stripslashes($Password_Main);
	$Email = mysqli_real_escape_string($conn, $Email);
	$Password_Main = mysqli_real_escape_string($conn, $Password_Main);
	$sql = mysqli_query($conn, "SELECT * FROM tbluser WHERE fldusername='".$Email."' and fldpassword='".$Password_Main."'") or die($conn->connect_error);
	//If Email and Password field are empty
	if ($Email == "" || $Password_Main == ""){
	echo "<script language='javascript' type='text/javascript'>alert('Email and Password Field must not be empty!')</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('login.php','_self')</script>";
	}
	$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
	$num_row= mysqli_num_rows($sql);
	//If Email and Password_Main is correct
	if($num_row!=0){
	setcookie('Email',$Email,time()+3200);
	session_regenerate_id();
	$_COOKIE=("Email");
	echo "<script language='javascript' type='text/javascript'>alert('Log-In Successful!');
	alert('Hi $Email')
	</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('dashboard.php','_self')</script>";
	//If Email and/or Password did not match to database
	}else{
	echo "<script language='javascript' type='text/javascript'>alert('Oops, Incorrect Email or Password!')</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('login.php','_self')</script>";
	}
}
?>
  <main>
  <form action="" name="frm" class="" id="block-validate" method="post">
  <input type="hidden" name="txtpostx" id="txtpostx">
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <img width="100" height="100" src="assets/img/mainlogo.jpg" alt="">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  
                  <span class="d-none d-lg-block">Sto. Tomas City Agricultural &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapping Web Portal</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                       
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    
                      <div class="col-12">
                      <p class="small mb-0">&nbsp;</p>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="Log-In" type="submit">Login</button>
                    </div>
                    
                  </form>
                  
                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
    </form>
    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
  </main><!-- End #main -->

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