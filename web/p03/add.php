<?php
session_start();


$name = $_POST['name'];
$price = $_POST['price'];

echo "<h1>$name"."$price</h1>";

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$product = array("name"=>"$name", "price"=>"$price");
array_push($_SESSION['cart'], $product);

var_dump($_SESSION['cart']);

//header('Location: items.php');


?>