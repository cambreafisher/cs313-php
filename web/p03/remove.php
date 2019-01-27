<?php
session_start();

$name = $_POST['name'];

echo "<h1>removing $name</h1>";

unset($_SESSION['cart'][0]);

var_dump($_SESSION['cart']);


?>