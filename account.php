<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Enter <input type="text" name="account">
        <br>
        <input type="submit" name="button" value="check">
<?php
if (isset($_POST["button"])){
    $accounttype = $_POST["account"];
    if($accounttype=="premium"){
        echo "Welcome Premium User!";
    }
    else{ 
        echo "Welcome Basic User!";
    }
}
?>
</form>
</body>
</html>