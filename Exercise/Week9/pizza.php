<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Topping Selector</title>
</head>
<body>
   <h1>Here are what you select</h1> 
   <ul>
    <?php 
    if (isset($_POST["submit"])) {
        $topping = $_POST['topping'];
        foreach ($topping as $t) {
            echo "<li>$t</li>";
        }
    }
    ?>
   </ul>
</body>
</html>