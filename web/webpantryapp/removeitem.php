<?php
require 'dbConnect.php';
$db = get_db();

$foodid = htmlspecialchars($_POST['foodid']);

try {
    $stmt = $db->prepare('DELETE FROM FOOD WHERE food_id = :foodid');
    $stmt->execute(array(':foodid' => $foodid));
}

catch (exception $e) {
    echo "Fail";
}

header('Location: pantry.php');
?>