<?php
require 'dbConnect.php';
$db = get_db();

$foodname = htmlspecialchars($_POST['foodname']);
$expires = htmlspecialchars($_POST['expires']);

try {
    $query = $db->prepare('INSERT INTO FOOD (food_name, expiration_date) 
                            VALUES (:foodname, :expires)');
    $statement = $db->prepare($query);
    $statement->bindValue('food_name', $foodname, PDO::PARAM_STR);
    $statement->bindValue(':expiration_date', $expires, PDO::PARAM_STR);
    $result = $statement->execute();
    
}
catch (exception $e) {
    echo "Fail";
}

header('Location: pantry.php');
?>

