<?php
try{
    $dbUrl = getenv('DATABASE_URL');

    $db0pts = parse_url($dbUrl);

    $dbHost = $db0pts["host"];
    $dbPort = $db0pts["port"];
    $dbUser = $db0pts["user"];
    $dbPassword = $db0pts["pass"];
    $dbName = ltrim($db0pts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
    echo 'Error!: ' . $ex->getMessage();
    die();
}
return $db;
?>