<?php
require("include/conn.php");
$vseed=10;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple Marker</title>
    <!-- The callback parameter is required, so we use console.debug as a noop -->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2D65_pObn_NrKcEMyXFei92m6luBNxJU&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      gmp-map {
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
  </head>
  <body>
    <gmp-map center="14.126708984375,121.13824462890625" zoom="14" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="14.126708984375,121.13824462890625" title="No of Seeds Distributed: <?php echo $vseed; ?>">
    <gmp-advanced-marker position="14.10573,121.15622" title="No of Seeds Distributed: <?php echo $vseed; ?>">
      </gmp-advanced-marker>
    </gmp-map>
  </body>
</html>
