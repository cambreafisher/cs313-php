<?php
session_start();
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Items in your cart</h1>
    <?php

    foreach ($_SESSION['cart'] as $product) {
        $price = $product['price'];
        $name = $product['name'];

        echo "<h1>$price</h1>";
        echo "<h1>$name</h1>";
        //remove button
        echo "<form action='remove.php' method='POST'>
        <input type='hidden' name='name' value='$name'/>
        <input type='submit' value='Remove'/>
        </form>";
    }

    //remove button

    //total
    $_SESSION['total'];
    //checkout button
    ?>
    <a href="checkout.php">Checkout</a>
</body>
</html>