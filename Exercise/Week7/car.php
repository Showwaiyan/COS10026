<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buying Car</title>
</head>

<body>
    <h2>Car purchase Success!</h2>
    <?php
    $carType = $_POST["carSelect"];
    $carColor = $_POST["color"];

    echo "Your car is $carType and the color is $carColor";
    ?>
</body>

</html>