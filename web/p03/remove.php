<?php
session_start();

$name = $_POST['name'];

echo "<h1>removing $name</h1>";


function findID() {
    $cart = $_SESSION['cart'];
    foreach ($cart as $key => $value) {
        if ($name === $value["name"]) {
            return $key;
        }
    }
}
$key = findID();
echo "<h1>$key</h1>";

//unset($_SESSION['cart'][0]);

var_dump($_SESSION['cart']);

?>