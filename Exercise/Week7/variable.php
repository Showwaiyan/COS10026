<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaiable</title>
</head>

<body>
    <?php
    $item = "Hello";
    ${$item} = 1234;
    $test1 = 6.5;
    $test2 = (int) $test1;
    echo $test2;
    ?>
</body>

</html>