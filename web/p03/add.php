<?php
session_start();


echo $_POST['name'];

header('Location: items.php');


?>