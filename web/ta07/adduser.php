<?php
session_start();
require 'dbConnect.php';
$db = get_db();

$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

try {
    $stmt = $db->prepare('INSERT INTO TAUSR (username, password) 
                            VALUES (:username, :passwordHash)');
    $stmt->execute(array(':username' => $username, ':passwordHash' => $passwordHash));
}
catch (exception $e) {
    echo "Fail";
}

header('Location: signin.php');

?>