<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
 Enter student score <input type="number" name="score">
 <br>
 <?php
 if (isset($_POST["button"])){
    $score = $_POST["score"];
    if ($score< 60){
    $grade = "F"; }
    else if ($score<=70){
    $grade = "D";}
    else if($score<=80){
    $grade = "C";}
    else if ($score<=90){
    $grade = "B";}
    else if ($score>90){
    $grade = "A";}
    else {
    $grade = "Invalid Input";
    }
     }
    ?>
 Grade <input type="text" name="grade" value="<?php echo $grade; ?>" disabled><br><br>
 <input type="submit" name="button" value="Generate Result">
</form>
</body>
</html>