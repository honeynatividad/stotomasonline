<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<?php
$vbarangay="San Agustin";
$vlat=14.064385;
$vlon=121.208259;
?>
<html>
  <head>
    <title>Info Windows</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script>
      /**
       * @license
       * Copyright 2019 G oogle LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.
      function initMap() {
        const uluru = { lat: <?php echo $vlat; ?>, lng: <?php echo $vlon; ?> };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: uluru,
        });
        const contentString =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b><?php echo $vbarangay; ?></b>, also referred to as <b>Ayers Rock</b>, is a large " +
          "sandstone rock formation in the southern part of the " +
          "Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
          "south west of the nearest large town, Alice Springs; 450&#160;km " +
          "(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
          "features of the Uluru - Kata Tjuta National Park. Uluru is " +
          "sacred to the Pitjantjatjara and Yankunytjatjara, the " +
          "Aboriginal people of the area. It has many springs, waterholes, " +
          "rock caves and ancient paintings. Uluru is listed as a World " +
          "Heritage Site.</p>" +
          '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
          "https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
          "(last visited June 22, 2009).</p>" +
          "</div>" +
          "</div>";
        const infowindow = new google.maps.InfoWindow({
          content: contentString,
          ariaLabel: "Uluru",
        });
        const marker = new google.maps.Marker({
          position: uluru,
          map,
          title: "Uluru (Ayers Rock)",
        });

        marker.addListener("click", () => {
          infowindow.open({
            anchor: marker,
            map,
          });
        });
      }

        var myCity = new google.maps.Circle({
  center:amsterdam,
  radius:20000,
  strokeColor:"#0000FF",
  strokeOpacity:0.8,
  strokeWeight:2,
  fillColor:"#0000FF",
  fillOpacity:0.4
}); 
        
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
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2D65_pObn_NrKcEMyXFei92m6luBNxJU&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>