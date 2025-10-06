<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="card">
        <h1>Temperature Converter</h1>

        <?php
$celsius = 30; 
$fahrenheit = ($celsius * 9/5) + 32;

echo "Temperature in Celsius: <span class='result'>{$celsius}°C</span><br>";
echo "Temperature in Fahrenheit: <span class='result'>{$fahrenheit}°F</span><br>";
?>

</body>
</html>