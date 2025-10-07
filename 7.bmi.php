<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
        <h1>BMI Calculator</h1>

        <?php

$weight_kg = 57.0; 
$height_m = 1.75; 

$bmi = $weight_kg / ($height_m * $height_m);

echo "Weight: <span>$weight_kg kg</span>, Height: <span>$height_m m</span><br>";
echo "BMI: <span> $bmi";


?>

</div>
</body>
</html>