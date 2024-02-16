<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    Enter total number of steps <input type="number" name="steps">
 <br>
 <input type="submit" name="button" value="Generate Result">
 <br>
 <?php
 if (isset($_POST["button"])){
$steps = $_POST["steps"];
if ($steps < 5000) {
    $fitnessLevel = 'Beginner';
} elseif ($steps <= 10000) {
    $fitnessLevel = 'Intermediate';
} else {
    $fitnessLevel = 'Advanced';
}
 }
echo "Number of steps: $steps ";

echo "Fitness level: $fitnessLevel";
?>

</form>
</body>
</html>