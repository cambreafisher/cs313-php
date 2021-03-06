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
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <title>Your Pantry</title>
</head>
<body>
<h1>Your Pantry:</h1>
<ul id="pantryitems" class="list">
    <li>
</ul>
<script>
    const foodlist = [
    <?php
    foreach ($db->query('SELECT food_id, food_name, expiration_date FROM FOOD') as $row) {
        $foodid = $row['food_id'];
        $name = $row['food_name'];
        $expires = $row['expiration_date'];
        //echo "{id: $foodid, name: $name, expires: $expires}";
        echo '{foodid:"' . $foodid .'", name:"' . $name . '", expires: "'.$expires . '"},';
    }
    ?>
];

//sort the list of food alphabetically so they can be displayed
foodlist.sort(function(a, b){
    if(a.name < b.name) {return -1;}
    if(a.name > b.name) {return 1;}
    return 0;
})

   const listElement = document.getElementById('pantryitems');
   //listElement.innerHTML = document.getElementById('pantryitems');

   foodlist.forEach(food => {
       listElement.appendChild(renderfood(food));
   });

   function renderfood(food) {
       const item = document.createElement('li');
       item.innerHTML = `
       <form action="removeitem.php" method="POST">
        <h1 name="foodname">${food.name}</h1>
        <input type="hidden" name="foodname" value="${food.name}" />
        <input type="hidden" name="foodid" value="${food.foodid}"/>
        <input type="hidden" name="expires" value="${food.expires}">
        <input type="submit" value="Remove"/>
    </form>
       `;
   return item;
    }
    </script>
    <form action="main.php" method="GET"><button type="submit">Back to Home</button></form>
</body>
</html>