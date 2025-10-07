<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
        <h1>Currency Converter</h1>

        <?php

    $php_amount = 5000.00;


$rate_php_to_usd = 0.017; 
$rate_php_to_eur = 0.016;
$rate_php_to_jpy = 2.50;

$usd_amount = $php_amount * $rate_php_to_usd;
$eur_amount = $php_amount * $rate_php_to_eur;
$jpy_amount = $php_amount * $rate_php_to_jpy;

echo "Original Amount in PHP: <span>$php_amount</span><br><br>";
echo "Converted to USD: <span>\$" . number_format($usd_amount, 2) . "</span> (Rate: 1 PHP = {$rate_php_to_usd} USD)<br>";
echo "Converted to EUR: <span>€" . number_format($eur_amount, 2) . "</span> (Rate: 1 PHP = {$rate_php_to_eur} EUR)<br>";
echo "Converted to JPY: <span>¥" . number_format($jpy_amount, 2) . "</span> (Rate: 1 PHP = {$rate_php_to_jpy} JPY)<br>";
?>

</div>
</body>
</html>