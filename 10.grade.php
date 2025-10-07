<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
    <h1>Simple Grading System</h1>

        <?php

$math_score = 92;
$english_score = 84;
$science_score = 78;

$average = ($math_score + $english_score + $science_score) / 3;
$grade = "NFE";

if ($average >= 90) {
    $grade = "A (Excellent)";
} elseif ($average >= 80) {
    $grade = "B (Good)";
} elseif ($average >= 70) {
    $grade = "C (Fair)";
} else {
    $grade = "D (Needs Improvement)";
}

echo "Scores: Math=<span>$math_score</span>, English=<span>$english_score</span>, Science=<span>$science_score</span><br>";
echo "Average Score: <span>" . number_format($average, 2) . "</span><br><br>";
echo "Final Grade: <span>$grade</span><br>";

?>

</div>
</body>
</html>