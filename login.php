<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        User Name <input type="text" name="user_name">
        <br>
        Password <input type="password" name="password">
        <br>
        <input type="submit" name="button" value="Login">
<?php
if (isset($_POST["button"])){
    $Username = $_POST["user_name"];
    $Password = $_POST["password"];
    if($Username=="2342010057" && $Password=="DQ90"){
        echo "Login Successful";
    }
    else{ 
        echo "Invalid Credentials";
    }
}
?>
</form>
</body>
</html>