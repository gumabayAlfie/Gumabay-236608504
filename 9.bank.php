<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
        <h1>Bank Account Simulation</h1>

        <?php

$balance = 15000.00;
$deposit = 3500.00;
$withdraw = 1800.00;

echo "Initial Balance: <span>$balance</span><br>";

$balance += $deposit;
echo "After Deposit of $deposit : New Balance = <span>$balance</span><br>";

$balance -= $withdraw;
echo "After Withdrawal of $withdraw: Final Balance = <span>$balance</span><br>";

?>

</div>
</body>
</html>