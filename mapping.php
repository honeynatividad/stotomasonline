<!DOCTYPE html>
<?php
require("include/conn.php");
       

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
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
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
        <script>
            /**
             * @license
             * Copyright 2019 G oogle LLC. All Rights Reserved.
             * SPDX-License-Identifier: Apache-2.0
             */
            // This example displays a marker at the center of Australia.
            // When the user clicks the marker, an info window opens.
            function initMap() {
                $.post("newmapdata.php",
                function (data){
                    //console.log('$$data--->', data);
                    let mapData = JSON.parse( data );
                    console.log(mapData);
                    let def = { lat: parseFloat(mapData[0].fldlat), lng: parseFloat(mapData[0].fldlong) };
                    let map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 14,
                        center: def,
                        
                    });
                    for(let i = 0; i < mapData.length; i++) {
                        let obj = mapData[i];

                        let mapAddress = { lat: parseFloat(obj.fldlat), lng: parseFloat(obj.fldlong) };
                        //console.log('$$ mapAddress --> ', mapAddress);
                        let fieldsdata = obj.fldcrops;
                        let fieldcrops = "";
                        if (typeof fieldsdata === 'string') {
                        }else{
                            console.log('$or not');
                            
                                for (var key in fieldsdata) {
                                    console.log(key);
                                    console.log(fieldsdata[key]);
                                    fieldcrops=fieldsdata[key]+' '+fieldcrops;
                                }
                            
                        }

                        let fielddis = obj.dist;
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
                            "<p><b>Seed Distribution:</b><br>" + dis +
                            
                            "<p><b>Yield:</b><br>" +fieldcrops +
                            "<br></p>" +
                            
                            "</div>" +
                            "</div>";
                        let infowindow = new google.maps.InfoWindow({
                            content: contentString,
                            ariaLabel: obj.fldbarangay,
                        });
                        let marker = new google.maps.Marker({
                            position: mapAddress,
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
        <?php
            require("include/conn.php");  
        ?>
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
                        <li class="nav-item"><a class="nav-link" href="aboutUs.php"> About Us </a></li>
	                     <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
            
        <div id="map"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2D65_pObn_NrKcEMyXFei92m6luBNxJU&callback=initMap" defer ></script>
     
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