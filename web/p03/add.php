<?php
session_start();


$name = $_POST['name'];
$price = $_POST['price'];

echo "<h1>$name"."$price</h1>";

//If the cart array hasn't been made, then we need to make it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
//combining the price and name into an array 
$product = array("name"=>"$name", "price"=>"$price");
//pushing that product array onto the cart
array_push($_SESSION['cart'], $product);

//var_dump($_SESSION['cart']);

header('Location: items.php');


?>