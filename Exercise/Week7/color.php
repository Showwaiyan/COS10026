<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Dispaly</title>
</head>

<body>
    <?php
    $red = $_GET["red"];
    $green = $_GET["green"];
    $blue = $_GET["blue"];

    $rgb = "$red , $green , $blue";
    ?>

    <h2>Here is the color you choose!</h2>
    <h3>RGB(<?php echo $rgb ?>)</h3>
    <div style="background-color: rgb(<?php echo $rgb ?>); width: 400px; height: 400px;"></div>
</body>

</html>