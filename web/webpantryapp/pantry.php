<?php
require 'dbConnect.php';
$db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Pantry</title>
</head>
<body>
<h1>Your Pantry:</h1>
<script>
    const foodlist = [
    <?php
    foreach ($db->query('SELECT food_name FROM FOOD') as $row) {
        echo '"' . $row['food_name'] . '",';
    }
    ?>
];
    </script>
    <form action="main.php" method="GET"><button type="submit">Back to Home</button></form>
</body>
</html>