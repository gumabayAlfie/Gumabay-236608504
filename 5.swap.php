<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="card">
        <h1>Swapping Variables</h1>

        <?php

$val1 = "Mango";
$val2 = "Banana";

echo "Before swap: \$val1 = <span class='result'>$val1</span>, \$val2 = <span class='result'>$val2</span><br>";

$temp = $val1;
$val1 = $val2;
$val2 = $temp;

echo "After swap: \$val1 = <span class='result'>$val1</span>, \$val2 = <span class='result'>$val2</span><br>";
?>

</body>
</html>