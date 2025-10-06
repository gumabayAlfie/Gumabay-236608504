<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="card">
        <h1>Area and Perimeter of a Rectangle</h1>

<?php
$length = 8;
$width = 4;
echo "Lenght: <span>{$lenght}</span><br>";
echo "Witdth: <span>{$width}</span><br>";

$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area: $area, Perimeter: $perimeter";
?>

</body>
</html>