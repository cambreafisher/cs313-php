<?php
require 'dbConnect.php';
$db = get_db();

$query = 'SELECT id, name, course_code FROM course';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Notes!</title>
</head>
<body>

<h1>Notes App</h1>

<ul>
    <li>CS xx - text</li>
    <li>CS yy - text again</li>
    <li>CIT</li>
</ul>
    
</body>
</html>