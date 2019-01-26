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
    $_SESSION["cart"] = array();
    $_SESSION['name']=$_POST['user_name'];
    ?>
    <div>
     <img src="WWW.png" alt="logo" class="logo"/>
</div>
<div>
    <img src="mainPage.png" alt="mainPage">
</div>
<div class="pranksnjokes">
<div class="snackbox">
    <form method="post" action="add.php">
        <img src="skivingSnackbox.jpg" alt="SkivingSnackbox" class="pic">
        <h1>Skiving Snackboxes - $20.00</h1>
        <input type="text" name="user_name">
        <input type="submit" value="Add To Cart" >
</form>

</body>
</html>