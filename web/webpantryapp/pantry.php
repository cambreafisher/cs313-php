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
    <li><form action="removeitem.php" method="POST">
        <h1 name="foodname">corn</h1>
        <input type="hidden" name="foodname" value="corn" />
        <input type="hidden" name="foodid" value="45"/>
        <input type="hidden" name="expires" value="2019-03-04">
        <input type="submit" value="Remove"/>
    </form></li>
</ul>
<script>
    const foodlist = [
    <?php
    foreach ($db->query('SELECT food_id, food_name, expiration_date FROM FOOD') as $row) {
        $foodid = $row['food_id'];
        $name = $row['food_name'];
        $expires = $row['expiration_date'];
        echo "{id: $foodid, name: $name, expires: $expires}";
        //echo '{name:"' . $row['food_name'] . '", expires: "'.$row['expiration_date']. '"},';
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