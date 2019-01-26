<?php
session_start();

$_SESSION['cart'] = array();
$action = $_POST['action'];
$itemid = $_POST['itemid'];


switch($action) {

    case "addtocart":
    array_push($cart, $itemid);
    break;
    case "delete":
    break;
    default:
    break;
}

header('Location: items.php');


?>