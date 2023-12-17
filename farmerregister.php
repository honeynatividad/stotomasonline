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
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css\styles.css" rel="stylesheet" type="text/css"/>

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
     <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand " style="font-size: 14px;color: blue;" href="#page-top"><img src="img/mainlogo.jpg" alt="..." style="height:70px; " /><span class="desktop">City Agriculture Office of Sto Tomas, Batangas</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="announcements.php">Announcement</a></li>
                        <li class="nav-item"><a class="nav-link" href="crops.php">Crop</a></li>
                        <li class="nav-item"><a class="nav-link" href="heatmap.php">Mapping</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutUs.php"> About Us</a></li>
	                     <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<?php 
require("include/conn.php"); 
?>
<script>
function fSave(){
    document.frm["txtpostx"].value=1;
}
</script>

<?php 
$vusername=$_POST['username'];
$vpassword=$_POST['password'];

$vtest2=0;
								
require("include/conn.php"); 
$query = "SELECT * FROM tbluser WHERE fldusername = '$vusername'";
$results = mysql_query($query);
$user_data_row = mysql_fetch_array($results);
if(password_verify($vpassword, $user_data_row['fldpassword'])){
 
    $vtest2=1;
}
if($vtest2==0){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['emailaddress'];
    $password = $_POST['password'];
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $username = $_POST['username'];

    $result = mysql_query("SELECT * FROM tbluser order by fldindex");
    while($row = mysql_fetch_array($result)){
        $usercode=$row['fldindex'];
    }

    //CHECK if farmer is already registered
    $validateuser = mysql_query("SELECT * FROM tbluser WHERE fldemail ='$email'");
    $countuser = mysql_num_rows( $validateuser );
    if($countuser<1) {
        //INSERT records to tbluser
        $usercode=$usercode+1;
        $farmercode="USER".$usercode;
        $sql="INSERT INTO tbluser (fldindex, fldcode, fldlastname, fldfirstname, fldmiddlename, fldusertype, fldemail, fldimage,  fldpassword, fldusername,  fldstatus) 
        VALUES ('$usercode','$farmercode','$lastname','$firstname','','Farmer','$email','user.png','$passwordhash','$username','Registered')";

        if (!mysql_query($sql,$con)){
            die('error: ' . mysql_error());
        }else{

        
        ?>
         <script>
            alert("Your data has been saved.");	
        </script>
        <?php
        }
    } else {
    ?>
        <script>
            alert("Your email is already been registered");	
        </script>
    <?php
    }
}

?>
  <main>
    <section>

        <div class="container">
            <div class="row">
                <div class="text-center ">
                    
                    <a href="index.html" class="link-primary link-underline link-underline-opacity-0" >
                        <img class="rounded" width="100" height="100" src="assets/img/mainlogo.jpg" alt="">
                    </a>
                </div>
                <div class="text-center">
                    <p><a class="link-offset-2 link-underline-primary link-underline-opacity-0" style="color:black;font-size: 18px;font-weight: 700;" href="index.php">Sto. Tomas City Agricultural <br>Mapping Web Porta</a></p>
                    
                </div>
                
                <div class="col-12">
                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Create New Account</h5>
                            </div>

                            <form action="farmerregister.php" name="frm" class="" id="block-validate" method="post">
                                <input type="hidden" name="txtpostx" id="txtpostx">
                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Email Address</label>
                                    <div class="input-group has-validation">
                                    
                                        <input type="email" name="emailaddress" class="form-control" id="yourEmailaddres" required>
                                        <div class="invalid-feedback">Please enter your email address.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                    
                                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                                        <div class="invalid-feedback">Please enter your username.</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        
                                        <label for="yourFirstname" class="form-label">First Name</label>
                                        <div class="input-group has-validation">
                                        
                                            <input type="text" name="firstname" class="form-control" id="yourFirstname" required>
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="yourLastname" class="form-label">Last Name</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="lastname" class="form-control" id="yourLastname" required>
                                            <div class="invalid-feedback">Please enter your lastname.</div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <div class="input-group has-validation">
                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                  
                                </div>
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Terms and Conditions</label>
                                    <div class="input-group has-validation">
                                        <?php
                                            $termsdata = mysql_query("SELECT * FROM tblterms WHERE fldstatus='Active' LIMIT 1");
                                            while($rowterms = mysql_fetch_array($termsdata)){
                                        ?>
                                        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="5"><?php echo $rowterms['fldterms'];  ?></textarea>
                                        <?php
                                            }
                                        ?>
                                        
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                  
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" required id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Accept Terms and Conditions</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        

        </div>

    </section>
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
  
          <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Sto Tomas Batangas 2023 </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none me-3" href="#!">Terms of Use</a>
                        <a class="link-dark text-decoration-none" href="#!">FAQ</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>