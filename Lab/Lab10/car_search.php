<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Car</title>
</head>
<body>
    <?php 
        @require_once 'settings.php';
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

        if (!$conn) {
            echo "<p>Database connection failure</p>";
        } else {
            $sql_table = "cars";

            $make = mysqli_escape_string($conn, trim(htmlspecialchars($_POST["carmake"])));
            $model = mysqli_escape_string($conn, trim(htmlspecialchars($_POST["carmodel"])));
            $price = mysqli_escape_string($conn, trim(htmlspecialchars($_POST["price"])));
            $yom = mysqli_escape_string($conn, trim(htmlspecialchars($_POST["yom"])));

            $query = "select * from cars where make like '$make%' and model like '$model%' and price like '$price%' and yom like '$yom%'";
            $result = mysqli_query($conn, $query);
            if (!$result) {
                echo "<p>Something is wrong with ", $query, "</p>";
            } else {
                echo "<table border=\"1\">";
                echo "<tr>\n"
                    . "<th scope=\"col\">Make</th>\n"
                    . "<th scope=\"col\">Model</th>\n"
                    . "<th scope=\"col\">Price</th>\n"
                    ." <th scope=\"col\">YOM</th>\n"
                    . "</tr>\n";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>\n";
                    echo "<td>", $row["make"], "</td>\n";
                    echo "<td>", $row["model"], "</td>\n";
                    echo "<td>", $row["price"], "</td>\n";
                    echo "<td>", $row["yom"], "</td>\n";
                    echo "</tr>\n";
                }
                echo "</table>\n";
                mysqli_free_result($result);
            }
            mysqli_close($conn); 
        }
    ?> 
</body>
</html>