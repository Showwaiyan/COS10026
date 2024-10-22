<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
</head>
<body>
   <?php 
    // form does not submitted yet
    if (!isset($_POST["submit"])) {
   ?> 

   <form action="oddeven.php" method="POST">
    <label for="num">Enter a number</label>
    <input type="number" name="num" id="num">
    <input type="submit" name="submit" value="Submit">
   </form>

   <?php 
    } else {
        $num = $_POST["num"];
        if ($num % 2 == 0) echo "<p>$num is even</p>";
        else echo "<p>$num is odd</p>";
    }
   ?>
</body>
</html>