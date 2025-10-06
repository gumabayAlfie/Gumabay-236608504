<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="card">
        <h1>Salary Calculator</h1>

        <?php
    $basic_salary = 25000.00;
    $allowance = 5000.00; 
    $deduction = 3500.00; 
    
    $gross_salary = $basic_salary + $allowance;
    $net_salary = $gross_salary - $deduction;
    
    echo "Basic Salary: <span>$basic_salary</span><br>";
    echo "Allowance: <span>$allowance</span><br><br>";
    echo "Total Deduction: <span>$deduction</span><br>";
    echo "Net Salary: <span>$net_salary</span><br>";

?>

</body>
</html>