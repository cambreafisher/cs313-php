<?php
    session_start();
   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="items.css" />
    <title>Weasley's Wizard Wheezes</title>
</head>
<body>
    
    <div>
     <img src="WWW.png" alt="logo" class="logo"/>
</div>
<div>
    <img src="mainPage.png" alt="mainPage">
</div>
<div class="pranksnjokes">
    <form action="add.php" method="POST">
        <img src="skivingSnackbox.jpg" alt="SkivingSnackbox" class="pic">
        <h1 name="name" value="Skiving Snackbox">Skiving Snackbox</h1>
        <input type="hidden" name="name" value="skivingsnackbox"/>
        <input type="hidden" name="price" value="20"/>
        <h1 name="price" value="20">$20.00</h1>
        <input type="submit" value="Add To Cart"/>
    </form>
    <form action="add.php" method="POST">
        <img src="extendears.jpg" alt="extendears" class="pic">
        <h1 name="name" value="Extendable Ears">Extendable Ears</h1>
        <input type="hidden" name="name" value="Extendable Ears"/>
        <input type="hidden" name="price" value="7"/>
        <h1 name="price" value="7">$7.00</h1>
        <input type="submit" value="Add To Cart"/>
    </form>
</div>
<a href="cart.php">View Cart</a>
     

</body>
</html>