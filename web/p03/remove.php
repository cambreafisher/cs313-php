<?php
session_start();

$name = $_POST['name'];

echo "<h1>removing $name</h1>";


function findID() {
    foreach ($_SESSION['cart'] as $product) {
        $arrayname = $product['name'];
        if ($arrayname === $name) {
            return $product;
        }
    }
}
$key = findID();
echo "<h1>$key</h1>";

//unset($_SESSION['cart'][0]);

var_dump($_SESSION['cart']);

?>