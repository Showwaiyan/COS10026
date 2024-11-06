<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Add</title>
</head>
<body>
    <?php 
        require_once 'settings.php';
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

        
        if (!$conn) {
            echo "<p>Database connection failure</p>";
        } else {
            $make = mysqli_escape_string($conn, trim(htmlspecialchars($_POST["carmake"])));
            $model = mysqli_escape_string($conn, trim(htmlspecialchars($_POST["carmodel"])));
            $price = mysqli_escape_string($conn, trim(htmlspecialchars($_POST["price"])));
            $yom = mysqli_escape_string($conn, trim(htmlspecialchars($_POST["yom"])));
            $sql_table = "cars";
            $query = "insert into cars (make, model, price, yom) values ('$make', '$model', '$price', '$yom')";
            $result = mysqli_query($conn, $query);
            if (!$result) {
                echo "<p>Something is wrong with ", $query, "</p>";
            } else {
                echo "<p>Successfully added New Car record</p>";
            }
            mysqli_close($conn);
        }
    ?>   
</body>
</html>

