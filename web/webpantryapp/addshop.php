<?php
require 'dbConnect.php';
$db = get_db();

$foodname = htmlspecialchars($_POST['foodname']);


try {
    $stmt = $db->prepare('INSERT INTO SHOPPING (food_name) 
                            VALUES (:foodname');
    $stmt->execute(array(':foodname' => $foodname));
}

catch (exception $e) {
    echo "Fail";
}

header('Location: shopping.php');
?>