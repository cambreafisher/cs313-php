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
<ul id="pantryitems" class="pantryitems">
    <li>
</ul>
<script>
    const foodlist = [
    <?php
    foreach ($db->query('SELECT food_name, expiration_date FROM FOOD') as $row) {
        echo '{name:"' . $row['food_name'] . '", expires: "'.$row['expiration_date']. '"},';
    }
    ?>
];

   const listElement = document.getElementById('pantryitems');
   listElement.innerHTML = document.getElementById('pantryitems');

   foodlist.forEach(food => {
       listElement.appendChild(renderfood(food));
   });

   function renderfood(food) {
       const item = document.createElement('li');
       item.innerHTML = `
       ${food.name}`;
   return item;
    }
    </script>
    <form action="main.php" method="GET"><button type="submit">Back to Home</button></form>
</body>
</html>