<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
 Hindi <input type="number" name="hindi">
 <br>
English <input type="number" name="eng">
 <br>
 Maths <input type="number" name="maths">
 <br>
 Science <input type="number" name="sci">
 <br>
 SST <input type="number" name="sst">
 <br>
 <?php
 if (isset($_POST["button"])){
    $hindi = $_POST["hindi"];
    $english = $_POST["eng"];
    $maths = $_POST["maths"];
    $science = $_POST["sci"];
    $sst = $_POST["sst"];
    $total = ($hindi + $english + $maths + $science + $sst);
    $per = ($total / 5);
    if ($per>= 90){
    $grade = "A"; }
    else if ($per>=80){
    $grade = "B";}
    else if($per>=70){
    $grade = "C";}
    else if ($per>=60){
    $grade = "D";}
    else {
    $grade = "Fail";
     }
    }
    ?>
 Total <input type="text" name="total" value="<?php echo $total; ?>" disabled><br>
 Grade <input type="text" name="grade" value="<?php echo $grade; ?>" disabled><br><br>
 <input type="submit" name="button" value="Generate Result">
</form>
</body>
</html>