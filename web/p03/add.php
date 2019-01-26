<?php
session_start();

$_SESSION["cart"] = array();

$item = $_POST['product'];



header('Location: items.php');


?>