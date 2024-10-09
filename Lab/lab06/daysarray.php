<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP Variables, Array and Operators</h1>
    <?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are: </p>";
    for ($i = 0; $i < count($days); $i++) {
        echo $days[$i] . ($i + 1 == count($days) ? "." : ", ");
    }
    echo "<br>";
    echo "<p>The days of the week in French are: </p>";
    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    for ($i = 0; $i < count($days); $i++) {
        echo $days[$i] . ($i + 1 == count($days) ? "." : ", ");
    }
    ?>


</body>

</html>