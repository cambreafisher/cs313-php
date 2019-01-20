<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <script>
    function pickupLine() {
    document.getElementById("results").innerHTML = "Are you from Tennessee? Because you're the only TEN I SEE!";
    return false;
}
</script>
</head>
<body>
    <h1>Web Engineering II</h1>
    <?php
    include 'header.php';
    ?>
    <p>Feel free to explore! The tabs are the limit.</p>
    <div class="darkmode">
        <p>Click the button for a pickup line!</p>
    <button onclick="pickupLine()">Pickup Line</button>
    <div id="results">

    </div>
</div>

</head>
    </body> 
</html>