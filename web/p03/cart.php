<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Items in your cart</h1>
    <?php
    session_start();

    foreach ($cart as $product) {
        echo "<span>$product</span><br>";
    }
    ?>
    
</body>
</html>