<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
</head>
<body>
    <form action="confirmation.php">
        Address: <input type="text" name="address"/>
        City: <input type="text" name="city"/>
        State: <input type="text" name="state"/>
        Zip Code:<input type="text" name="zip"/>
        <select name="delivery">
            <option value="broomstick">Broomstick</option>
            <option value="floopowder">Floo Powder</option>
            <option value="owl">Owl</option>
            <option value="muggle">Muggle Mail</option>
        </select>
        <input type="submit"/>
    </form>

    
</body>
</html>