<?php
require 'dbConnect.php';
$db = get_db();

$itemname = htmlspecialchars($_POST['itemname']);
$expires = htmlspecialchars($_POST['expires']);

echo $foodname;
echo $expires;
try {
    $stmt = $db->prepare('INSERT INTO FOOD (food_name, expiration_date) 
                            VALUES (:itemname, :expires)');
    $stmt->execute(array(':itemname' => $itemname, ':expires' => $expires));
}
catch (exception $e) {
    echo "Fail";
}

//header('Location: pantry.php');
?>

