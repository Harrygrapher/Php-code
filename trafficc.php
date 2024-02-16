<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<label for="Traffic light"><b> Traffic</b></label><br>
            <input type="radio" name="radio_button" value="green"> Green <br>
            <input type="radio" name="radio_button" value="yellow">Yellow<br>
            <input type="radio" name="radio_button" value="red">Red<br><br>
 <input type="submit" name="button" value="Generate Result">
 <br>
 <?php
 if (isset($_POST["button"])){
    $colour = $_POST["radio_button"];
    if ($colour=="green"){
        echo "go";}
    elseif ($colour=="yellow"){
        echo "Slow Down";}
    elseif ($colour=="red"){
        echo "Stop";}
    else{
        echo "Invalid Input";
    }
}
    ?>

</form>
</body>
</html>