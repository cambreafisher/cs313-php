<?php
session_start();
require 'dbConnect.php';
$db = get_db();

$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

try {
    $stmt = $db->prepare('SELECT password FROM TAUSR WHERE username = :username');
    $stmt->execute(array(':username' => $username));
    $row = $stmt->fetch();
    $passwordHash = $row['password'];

    if (password_verify($password, $passwordHash)) {
        $_SESSION
        header('Locations: welcome.php');
    } else {
        header('Locations: signin.php');
    }
}




?>