<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My BMI</title>


</head>

<body>
    <?php
    function sanitise_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function validation($data, $type)
    {
        if ($type == "name") {
            return preg_match("/^[a-zA-Z' -]+$/", $data);
        } else if ($type == "age") {
            return preg_match('/^[0-9]{1,3}$/', $data);
        } else if ($type == "weight") {
            return preg_match('/^[0-9]{1,3}(\.[0-9])?$/', $data);
        } else if ($type == "height") {
            return preg_match('/^[0-9]{1,3}(\.[0-9])?$/', $data);
        }
    }

    if (isset($_POST["name"])) $name = sanitise_input($_POST["name"]);
    if (isset($_POST["age"])) $age = sanitise_input($_POST["age"]);
    if (isset($_POST["weight"])) $weight = sanitise_input($_POST["weight"]);
    if (isset($_POST["height"])) $height = sanitise_input($_POST["height"]);

    // validation
    $validate = true;
    if (!validation($name, "name")) {
        echo "Please enter the valid name again <br>";
        $validate = false;
    }
    if (!validation($age, "age")) {
        echo "Please enter the valid age again <br>";
        $validate = false;
    }
    if (!validation($weight, "weight")) {
        echo "Please enter the valid weight again <br>";
        $validate = false;
    }
    if (!validation($height, "height")) {
        echo "Please enter the valid height again <br>";
        $validate = false;
    }

    if ($validate) {
        echo '<sectoin class="output">';
        echo "<h1>Hi! My name is $name My BMI info is here</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Weight: $weight</p>";
        echo "<p>Height $height</p>";
        echo "<p>BMI: $bmi</p>";
        echo "</section>";
    }
    ?>
</body>

</html>