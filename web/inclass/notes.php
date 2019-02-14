<?php
require 'dbConnect.php';
$db = get_db();

$course_id = $_GET["course_id"];

$query = 'SELECT id, name, course_code FROM course WHERE id=:id';
//prepare query
$stmt = $db->prepare($query);
//binding the value to save from SQL injection
$stmt->bindValue(':id', $course_id, PDO::PARAM_INT);
//execute it
$stmt->execute();
//binding values
$course = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
    $course_name = $course['course_name'];
    $course_code = $course['course_code'];
    echo "<h1>Notes for $course_name - $course_code";
    ?>
</body>
</html>