<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heatmap on Map</title>
    <!-- Include Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <!-- Include Leaflet.heat JS -->
    <script src="https://unpkg.com/leaflet.heat/dist/leaflet-heat.js"></script>
</head>
<body>
    <div id="map" style="height: 600px;"></div>

    <script>
        // Your JavaScript code will go here
        var map = L.map('map').setView([14.064385, 121.208259], 100);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        
        var heatmapData = [
            [lat1, lon1, intensity1],
            [lat2, lon2, intensity2],
    // Add more data points as needed
];

L.heatLayer(heatmapData).addTo(map);
        
        
    </script>
</body>
</html>
