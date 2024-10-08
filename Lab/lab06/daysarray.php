<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "The days of the week in English are: <br>";
    for ($i = 0; $i < count($days); $i++) {
        echo $days[$i] . "<br>";
    }
    echo "<br>";
    echo "The days of the week in French are: <br>";
    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    for ($i = 0; $i < count($days); $i++) {
        echo $days[$i] . "<br>";
    }
   ?>
</body>
</html>