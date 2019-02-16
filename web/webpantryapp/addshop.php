<?php
require 'dbConnect.php';
$db = get_db();

$foodname = htmlspecialchars($_POST['foodname']);

echo $foodname;
try {
    $stmt = $db->prepare('INSERT INTO SHOPPING (food_name) VALUES (:foodname)');
    $stmt->bindValue(':foodname', $foodname, PDO::PARAM_STR);
    $stmt->execute();
}

catch (exception $e) {
    echo "Fail";
}

//header('Location: shopping.php');
?>