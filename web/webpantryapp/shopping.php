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
    <title>Let's Go Shopping</title>
</head>
<body>
<h1>Shopping List:</h1>

<button class="open-button" onclick="openForm()">Add Food</button>
                 <div class="form-popup" id="myForm">
                    <form action="addshop.php" method="POST" class="form-container" id="myForm">
                    <label for="foodname"><b>Food</b></label>
                    <input type="text" name="foodname"><br><br>
                    <button type="submit" class="submit-button">Add</button>
            </form>
</div>

<ul id="shopitems" class="list">
    <li>
</ul>
<script>

function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

const shoplist = [
    <?php
    foreach ($db->query('SELECT item_id, food_name FROM SHOPPING') as $row) {
        echo '{foodid:"' . $row['item_id'] .'", name:"'. $row['food_name'] . '"},';
    }
    ?>
];

//sort the list of food alphabetically so they can be displayed
shoplist.sort(function(a, b){
    if(a.name < b.name) {return -1;}
    if(a.name > b.name) {return 1;}
    return 0;
})

   const listElement = document.getElementById('shopitems');
   //listElement.innerHTML = document.getElementById('shopitems');

   shoplist.forEach(food => {
       listElement.appendChild(renderfood(food));
   });

   function renderfood(food) {
       const item = document.createElement('li');
       item.innerHTML = `
       <form action="removeshop.php" method="POST">
        <h1 name="foodname">${food.name}</h1>
        <input type="hidden" name="foodid" value="${food.foodid}"/>
        <input type="submit" value="Remove"/>
    </form>
       `;
   return item;
    }
    </script>
   
   <form action="main.php" method="GET"><button type="submit">Back to Home</button></form>
</body>
</html>