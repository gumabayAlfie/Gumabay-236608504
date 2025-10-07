<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
        <h1>Swapping Variables</h1>

        <?php

$val1 = "Mango";
$val2 = "Banana";

echo "Before swap: <br>value A = <span>$val1</span>, value B = <span>$val2</span><br><br>";

$temp = $val1;
$val1 = $val2;
$val2 = $temp;

echo "After swap: <br>value A = <span>$val1</span>, value B = <span>$val2</span><br>";
?>

</div>
</body>
</html>