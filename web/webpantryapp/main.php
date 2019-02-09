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
                 <form action="shopping.php" method="GET"><button type="submit">Shopping List</button></form> 
        </div>
        <div id="bottom">
            <button>Remove Food</button>
            <form action="pantry.php" method="GET"><button type="submit">View Pantry</button></form>
        </div>
    </div>
    
</body>
</html>