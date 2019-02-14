<?php
require 'dbConnect.php';
$db = get_db();

$query = 'SELECT id, name, course_code FROM course';
//prepare query
$stmt = $db->prepare($query);
//execute it
$stmt->execute();
//binding values
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
<?php
    foreach ($courses as $course) {
        $id = $course['id'];
        $name = $course['name'];
        $course_code = $course['course_code'];

        echo "<li><a href='notes.php?course_id=$id'>$course_code - $name</li>\n";
    }
?>
  
</body>
</html>