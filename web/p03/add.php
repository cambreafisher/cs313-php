<?php
session_start();

$_SESSION["cart"] = array();

function addItems($item) {
    array_push($item);
}

foreach ($cart as $item) {
    echo "<script>console.log($item)</script>";
}

header('Location: items.php');


?>