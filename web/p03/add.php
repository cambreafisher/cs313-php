<?php
session_start();


$_SESSION[""]
function addItem($item) {
    array_push($item);
}

foreach ($cart as $item) {
    echo "<script>console.log($item)</script>";
}

header('Location: items.php');


?>