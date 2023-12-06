<?php

function generateColorMap($minValue, $maxValue, $numSteps) {
    $colorMap = [];

    // Define the start and end colors (RGB format)
    $startColor = [255, 0, 0]; // Red
    $endColor = [0, 0, 255];   // Blue

    // Calculate the color step for each component (R, G, B)
    $step = [];
    for ($i = 0; $i < 3; $i++) {
        $step[$i] = ($endColor[$i] - $startColor[$i]) / ($numSteps - 1);
    }

    // Generate the color map
    for ($i = 0; $i < $numSteps; $i++) {
        $color = [
            round($startColor[0] + $step[0] * $i),
            round($startColor[1] + $step[1] * $i),
            round($startColor[2] + $step[2] * $i)
        ];

        $value = $minValue + ($maxValue - $minValue) / ($numSteps - 1) * $i;

        // Store the color along with its corresponding value
        $colorMap[$value] = $color;
    }

    return $colorMap;
}

// Example usage:
$minValue = 0;
$maxValue = 100;
$numSteps = 10;

$colormap = generateColorMap($minValue, $maxValue, $numSteps);

// Display the generated color map
foreach ($colormap as $value => $color) {
    printf("Value: %5.2f | Color: #%02x%02x%02x\n", $value, $color[0], $color[1], $color[2]);
}
?>
Write to Nelia C. Rocamora


