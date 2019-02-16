<?php
require 'dbConnect.php';
$db = get_db();

$foodname = htmlspecialchars($_POST['foodname']);
$foodid = htmlspecialchars($_POST['foodid']);
$expires = htmlspecialchars($_POST['expires']);

echo $foodname;
echo $foodid;
echo $expires;

try {
    $stmt = $db->prepare('DELETE FROM FOOD WHERE food_id = :foodid');
    $stmt->execute(array(':foodid' => $foodid));
}

catch (exception $e) {
    echo "Fail";
}

header('Location: pantry.php');
?>