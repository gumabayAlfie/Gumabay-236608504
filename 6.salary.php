<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
        <h1>Salary Calculator</h1>

        <?php

$basic_salary = 15000;
$allowance = 14000;
$deduction = 6000;
$net_salary = $basic_salary + $allowance - $deduction;
echo "Salary = <span> $basic_salary</span><br>";
echo "Allowance = <span> $allowance</span><br>";
echo "Total Calculated deduction = <span>$deduction</span><br><br>";
echo "Net Salary: $net_salary";


?>

</div>
</body>
</html>