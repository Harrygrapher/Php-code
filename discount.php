<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    Enter 1st product price <input type="number" name="num1">
    <br>
    Enter 2nd product price <input type="number" name="num2">
    <br>
    Enter 3rd product price <input type="number" name="num3">
    <br>
    <input type="submit" name="button" value="check">
    <br>
    <?php
    if (isset($_POST["button"])){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $total_price = ($num1 + $num2 + $num3);
        if ($total_price>5000){
            $Discountprice = $total_price * 0.9;
            echo "Your Total price is: ". $Discountprice;
        } 
        else {
        echo "Your total price is: " . $total_price;
    }
}
    ?>
</body>
</html>