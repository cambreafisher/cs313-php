<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php
    $page = basename($_SERVER['PHP_SELF']);
    echo "<h1>$page"
    ?>
    <div class="header-container">
        <a href="homepage.php" 
        class="<?php if ($page == 'homepage.php') echo 'header'?>">Home</a>
    <a href="contents.php" 
    class="<?php if ($page == 'contents.php') echo 'header'?>">Assignments</a>
    </div>
    
</body>
</html>