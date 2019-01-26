<?php
session_start();


$name = $_POST['name'];
$price = $_POST['price'];

echo "<script>console.log($name)</script>";
echo "<script>console.log($price)</script>";

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$product = array("name"=>"$name", "price"=>"$price");
array_push($_SESSION['cart'], $product);

var_dump($_SESSION['cart']);

//header('Location: items.php');


?>