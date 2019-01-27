<?php
session_start();
$address = htmlspecialchars($_POST['address']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$zip = htmlspecialchars($_POST['zip']);
$delivery = htmlspecialchars($_POST['delivery']);

foreach ($_SESSION['cart'] as $product) {
    $price = $product['price'];
    $name = $product['name'];
    
    echo "<h1>$name</h1>";
}

echo "<h1>Thank you for your purchase</h1>";
echo "Delivery to: $address <br>$city, $state $zip";
echo "Delivered by: $delivery";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You </title>
</head>
<body>
</body>
</html>

