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
    <link rel="stylesheet" type="text/css" media="screen" href="additem.css" />

</head>
<body>
<h1>Organize</h1>
<h1>Your</h1>
<h1>Stomach</h1>
<div id="buttons">
        
                 <button class="open-button" onclick="openForm()">Add Food</button>
                 <div class="form-popup" id="myForm">
                     <form action="additem.php" method="POST" class="form-container">
                         <label for="foodname"><b>Food</b></label><br>
                         <input type="text" name="foodname"><br>
                         <label for="expires"><b>Expiration Date</b></label>
                         <input type="text" name="expires"><br>
                         <button type="submit" class="submit-button">Add</button>
                    </form>
</div>
                 <form action="shopping.php" method="GET"><button class="open-button" type="submit">Shopping List</button></form> 
                <form action="pantry.php" method="GET"><button class="open-button" type="submit">View Pantry</button></form>
        
    </div>
    
    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    </script>
</body>
</html>