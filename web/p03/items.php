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
        <h1 name="name" value="skivingsnackbox">Skiving Snackbox</h1>
        <h1 name="price" value="20">20 Galleons</h1>
        <input type="submit" value="Add To Cart"/>
    </form>


</div>
<a href="cart.php">View Cart</a>
     

</body>
</html>