<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tent</title>
</head>
<body>
    <?php 
        // form does not submitted yet
        if (!isset($_POST["submit"])) {
    ?>
    
    <form action="tent.php" method="POST">
        <label for="age">Enter your age</label>
        <input type="number" name="age" id="age">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php 
        } else {
            $age = $_POST["age"];
            if ($age <= 9) echo "You are in Red tent";
            else if ($age > 9 && $age <= 11 ) echo "You are in Blue tent";
            else if ($age > 11 && $age <= 14) echo "You are in Green tent";
            else if ($age > 14 && $age <= 17) echo "You are in Black tent";
            else echo "Call Your scoutmaster";
        }
    ?>
</body>
</html>