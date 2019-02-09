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
    <title>Let's Go Shopping</title>
</head>
<body>
<h1>Your Shopping List:</h1>
    <?php
    foreach ($db->query('SELECT food_name FROM SHOPPING') as $row) {
        echo '<ul> ' . $row['food_name'] . '</ul>';
    }
    ?>
   <form action="main.php" method="GET"><button type="submit">Back to Home</button></form>
</body>
</html>