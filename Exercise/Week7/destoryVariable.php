<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destory Variable</title>
</head>

<body>
    <?php
    $name = "Show";
    echo "Before unset, my variable name is " . $name;

    unset($name);
    echo "After unset, my variable name is " . $name;
    ?>
</body>

</html>