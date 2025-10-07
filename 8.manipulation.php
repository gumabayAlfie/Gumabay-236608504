<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
        <h1>String Manipulation</h1>

        <?php

$sentence = "Mosaic of everyone we ever love";

echo "Original Sentence: <span>\"$sentence\"</span><br><br>";
echo "Number of characters: <span>" . strlen($sentence) . "</span><br>";
echo "Number of words: <span>" . str_word_count($sentence) . "</span><br><br>";
echo "In UPPERCASE: <br><span>" . strtoupper($sentence) . "</span><br><br>";
echo "In lowercase: <br><span>" . strtolower($sentence) . "</span><br>";

?>

</div>
</body>
</html>