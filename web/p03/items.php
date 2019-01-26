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
    <form action="add.php">
        <img src="skivingSnackbox.jpg" alt="SkivingSnackbox" class="pic">
        <h1>Skiving Snackboxes - $20.00</h1>
        <input type="submit" name="snackbox" value="snackbox" onclick="addItem(snackbox)" />
   
        <img src="extendears.jpg" alt="ExtendableEars" class="pic">
        <h1>Extendable Ears - $7.00</h1>
        <input type="submit" name="extendears" value="extendears" onclick="addItem(extendears)" />
</form>
    </div>
</body>
</html>