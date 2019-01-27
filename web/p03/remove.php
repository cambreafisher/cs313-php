<?php
session_start();

$name = $_POST['name'];

echo "<h1>removing $name</h1>";


function findID($name) {
    $cart = $_SESSION['cart'];
    foreach ($cart as $key => $value) {
        //echo "<h1>$name "." $key</h1>";
        if ($name === $value["name"]) {
            //echo "<h1>found it</h1>";
            return $key;
        }
    }
}
$key = findID($name);
//echo "<h1>$key</h1>";

unset($_SESSION['cart'][$key]);

//var_dump($_SESSION['cart']);

header('Location: cart.php');

?>