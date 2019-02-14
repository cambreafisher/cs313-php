<?php
require 'dbConnect.php';
$db = get_db();

$food_name = htmlspecialchars($_POST['foodname']);

try {
    $stmt = $db->prepare('INSERT INTO FOOD (food_name) 
                            VALUES (:food_name)');
    $stmt->execute(array(':food_name => $food_name'));
}
catch (exception $e) {
    echo "Fail";
}

header('Location: pantry.php');
?>

