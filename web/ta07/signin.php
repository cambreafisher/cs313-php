<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="authenticate.php" method="POST">
                         <h1>Sign In</h1>
                         <label for="username"><b>User Name</b></label>
                         <input type="text" name="username"><br>
                         <label for="password"><b>Password</b></label>
                         <input type="password" name="password">
                         <button type="submit" class="submit-button">Create User</button>
                    </form>
</body>
</html>