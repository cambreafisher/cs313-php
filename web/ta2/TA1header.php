<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>The Kelvan: something to do with pictures</h1>
<?php
$page = basename($_SERVER['PHP_SELF']);

if ($page == 'TA1about-us.php') {
    echo "<div>
    <a href= 'TA1about-us.php' style='font-weight:bold;'>About Us</a>
    <a href= 'TA1home.php'>Home</a>
    <a href= 'TA1login.php'>Login</a>
    </div>";
}
else if ($page == 'TA1home.php') {
    echo "<div>
    <a href= 'TA1about-us.php'>About Us</a>
    <a href= 'TA1home.php' style='font-weight:bold;'>Home</a>
    <a href= 'TA1login.php'>Login</a>
    </div>";
}
else if ($page == 'TA1login.php') {
    echo "<div>
    <a href= 'TA1about-us.php'>About Us</a>
    <a href= 'TA1home.php'>Home</a>
    <a href= 'TA1login.php' style='font-weight:bold;'>Login</a>
    </div>";
}

?> 
</body>
</html>
