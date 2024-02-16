<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Enter your article <input type="text" name="article">
        <br>
        <input type="submit" name="button" value="check">
<?php
if (isset($_POST["button"])){
    $article = $_POST["article"];
    $leng = strlen($article);
    if($leng>50){
        $truncateleng = substr($article , 0 , 50);
        echo "$truncateleng";
    }
    else{
        echo "$article";
    }
}
?>
</form>
</body>
</html>