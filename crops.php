<?php
require("include1/conn.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>City of Sto. Tomas Agricultural Office</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css\styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page-top">
        <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "142351602297581");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php
        require("include/conn.php");  
    ?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand" style="font-size: 14px;color: blue;" href="#page-top"><img src="img/mainlogo.jpg" alt="..." style="height:70px; " />City Agriculture Office of Sto Tomas, Batangas</a>
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
        
        
        
         <!-- Masthead-->
           <header class="masthead" style="background-color: lightblue;">
            <div class="container overflow-hidden text-center">
                <div class="row gx-5">
                    
                    <?php 
                        require("include/conn.php");
                        $result = mysql_query("SELECT * FROM tblvideo where fldstatus='Published' order by fldindex");
                        while($row = mysql_fetch_array($result))
                        {
                            $arrcode =$row['fldcode'];
                            $arrpicture=$row['fldvideo'];
                            $arrdescription = $row['fldcrops'];			
                            $arrimage=$row['fldimage'];	
                            $title = $row ['videoTitle'];
                        ?>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <iframe class="card-img-top" src="<?php echo $arrpicture; ?>" title="<?php echo $title; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['fldcrops']?></h5>
                                    <p class="card-text" STYLE="color:#000000"k><?php echo $row ['videoTitle'] ?></p>
                                    <a href="<?php echo $row['fldvideo'] ?>" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    
                </div>
        
        </div>
    </header>
         
     
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Sto Tomas Batangas 2023 </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Product Name Here</h2>
                                    <p class="item-intro text-muted">Product code here</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Describe the product here</p>
                        
                                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                 <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Product Name Here</h2>
                                    <p class="item-intro text-muted">Product code here</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Describe the product here</p>
                        
                                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                 <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Product Name Here</h2>
                                    <p class="item-intro text-muted">Product code here</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Describe the product here</p>
                        
                                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                 <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Product Name Here</h2>
                                    <p class="item-intro text-muted">Product code here</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Describe the product here</p>
                        
                                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                 <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Product Name Here</h2>
                                    <p class="item-intro text-muted">Product code here</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Describe the product here</p>
                        
                                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                 <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Product Name Here</h2>
                                    <p class="item-intro text-muted">Product code here</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Describe the product here</p>
                        
                                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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