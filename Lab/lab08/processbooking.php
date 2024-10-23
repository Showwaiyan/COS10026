<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <!-- Begin Processing -->
    <?php 
        // Sanitise input
        function sanitise_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }  

    // Retrieve the form data
        // First Name
        if (isset($_POST["firstname"]) && !empty($_POST["firstname"])) {
            $firstname = $_POST["firstname"];
            $firstname = sanitise_input($firstname);
        } else {
            header("location: register.html");
        }

        // Last Name
        if (isset($_POST["lastname"]) && !empty($_POST["lastname"])) {
            $lastname = $_POST["lastname"];
            $lastname = sanitise_input($lastname);
        } else {
            header("location: register.html");
        }

        // Age
        if (isset($_POST["age"]) && !empty($_POST["age"])) {
            $age = $_POST["age"];
            $age = sanitise_input($age);
        } else {
            header("location: register.html");
        }

        // Food
        if (isset($_POST["food"])) {
            $food = $_POST["food"];
            $food = sanitise_input($food);
        } else {
            header("location: register.html");
        }

        // Party Size
        if (isset($_POST["partySize"]) && !empty($_POST["partySize"])) {
            $partySize = $_POST["partySize"];
            $partySize = sanitise_input($partySize);
        } else {
            header("location: register.html");
        }

        // Species
        if (isset($_POST["species"])) $species = $_POST["species"];
        else $species = "Unknown species";

        // Tour
        $tour = [];
        if (isset($_POST["1day"])) array_push($tour, $_POST["1day"]);
        if (isset($_POST["4day"])) array_push($tour, $_POST["4day"]);
        if (isset($_POST["10day"])) array_push($tour, $_POST["10day"]);

        // Menu preferences done in above code

        // Tour message
        $tour_message = "";
        if (count($tour) > 0 && count($tour) == 1) $tour_message = $tour[0];
        else {
            for ($i = 0; $i < count($tour); $i++) {
                if ($i == count($tour) - 1) $tour_message .= "and " . $tour[$i];
                else $tour_message .= $tour[$i] . ", ";
            }
        }

        // Checking valid input
        $errmsg = "";

        // First Name
        if (!preg_match("/^[a-zA-Z]*$/", $firstname)) $errmsg .= "Only alpha letters allowed in your first name\n";
        else if (empty($firstname)) $errmsg .= "You must enter your first name\n";

        // Last Name
        if (!preg_match("/^[A-Za-z]+(-[A-Za-z]+)*$/", $lastname)) $errmsg .= "Only alpha letters or a hyphen allowed in your last name\n";
        else if (empty($lastname)) $errmsg .= "You must enter your last name\n";

        // Age
        if (!is_numeric($age)) $errmsg .= "Age must be a number\n";
        else if ($age < 18) $errmsg .= "You must be 18 years or older to book a tour\n";
        else if ($age > 10000) $errmsg .= "You are too old to travel\n";

        if ($errmsg != "") {
            echo "<p>Error: $errmsg</p>";
            echo "<p>Return to the <a href='register.html'>form</a></p>";
            die();
        }
        else {
        // Display final message
            $message = "Welcome $firstname $lastname!\n
                        You are now booked on the $tour_message tours\n
                        Species: $species\n
                        Age: $age\n
                        Meal Preference: $food\n
                        Number of traveller: $partySize\n";

            echo nl2br($message);
        }
    ?>
</body>
</html>