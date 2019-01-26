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
    <?php
    session_start();
   
    ?>
    <div>
     <img src="WWW.png" alt="logo" class="logo"/>
</div>
<div>
    <img src="mainPage.png" alt="mainPage">
</div>
<div class="pranksnjokes">
<div class="snackbox">
    <img src="skivingSnackbox.jpg" alt="SkivingSnackbox" class="pic">
    <h1>Skiving Snackboxes - $20.00</h1>
    <a href="add.php?action=addtocart&itemid=01">Add To Cart</a>

    </div>


</div>
<a href="cart.php">View Cart</a>
     

</body>
</html>