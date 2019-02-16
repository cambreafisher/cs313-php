<?php
require 'dbConnect.php';
$db = get_db();

$foodname = htmlspecialchars($_POST['foodname']);
$foodid = htmlspecialchars($_POST['foodid']);
$expires = htmlspecialchars($_POST['expires']);

echo $foodname;
echo $foodid;
echo $expires;
?>