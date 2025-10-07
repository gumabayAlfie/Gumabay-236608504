<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
        <h1>Travel Cost Estimator</h1>

        <?php

$distance = 300; 
$fuel_consumption = 30; 
$fuel_price = 68; 
$cost = ($distance / $fuel_consumption) * $fuel_price;
echo "Distance = <span> $distance</span> km<br>";
echo "Fuel Consumption = <span> $fuel_consumption</span> liters<br>";
echo "Fuel Price = <span>$fuel_price</span><br><br>";
echo "Estimated Travel Cost: $cost PHP<br>";

?>
</div>
</body>
</html>