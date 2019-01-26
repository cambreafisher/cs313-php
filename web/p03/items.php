<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="items.css" />
    <script src=“https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js“>
    function addToCart(item) {
        $.post("add.php", {action: "addToCart", })
    }
    $.post("add.php", {action: "addToCart", addItemID: addItemID}).done(function(data) {
        var response = JSON.parse(data);
        var itemID = response.itemID;
    });
    </script>
    <title>Weasley's Wizard Wheezes</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION["product"];
   
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
    <a href="items.php?action=addtocart&itemid=01">Add To Cart</a>

    </div>


</div>
<a href="cart.php">View Cart</a>
     

</body>
</html>