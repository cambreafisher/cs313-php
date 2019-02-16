<?php
require 'dbConnect.php';
$db = get_db();

$foodname = htmlspecialchars($_POST['foodname']);
$expires = htmlspecialchars($_POST['expires']);

echo $foodname;
echo $expires;

try {
    $statement = $db->prepare('INSERT INTO FOOD (food_name, expiration_date) 
                            VALUES (:foodname, :expires)');
    $statement->bindValue('food_name', $foodname, PDO::PARAM_STR);
    $statement->bindValue(':expiration_date', $expires, PDO::PARAM_STR);
    $result = $statement->execute();
    
}

/*
try {
    $stmt = $db->prepare('INSERT INTO FOOD (food_name, expiration_date) 
                            VALUES (:foodname, :expires)');
    $stmt->execute(array(':foodname' => $foodname, ':expires' => $expires));
}
*/
catch (exception $e) {
    echo "Fail";
}

//header('Location: pantry.php');
?>

