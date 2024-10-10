<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dollor to Euro Converter</title>
</head>

<body>
    <?php
    define('EXCHANGE', 0.7);

    $dollor = 150;
    echo "$dollor is " . $dollor * EXCHANGE . " in Euro";
    ?>
</body>

</html>