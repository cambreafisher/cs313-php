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
    <title>Organize Your Stomach</title>
</head>
<body>
<div id="buttons">
        <div id="top">
                 <button>Add Food</button>
                 <button>Shopping List</button> 
        </div>
        <div id="bottom">
            <button>Remove Food</button>
            <button>View Pantry</button>
        </div>
    </div>
    <h1>Your Pantry:</h1>
    <?php
    foreach ($db->query('SELECT food_name FROM FOOD') as $row) {
        echo '<ul> ' . $row['food_name'] . '</ul>';
    }
    ?>
</body>
</html>