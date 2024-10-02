<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Hello World in unprocessed HTML</h1>
    <?php
        echo "<p>Hello World in HTML created by PHP</p>";
        echo "<img src='/Lab/Lab05/images/image1.png' atl='test'>";
        echo "<br>";
        define ("MAX_ELEMENT",5);
        echo "<ol>";
        for ($i=0; $i < MAX_ELEMENT; $i++)  {
            echo "<li>item ", $i+1, "</item>";
        }
        echo "</ol>";
    ?>
</body>
</html>