<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vilidation</title>
</head>
<body>
    <?php
        function sanitise_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if (isset($_POST["submit"])) {
            $name = sanitise_input($_POST["first_name"]) . " " . sanitise_input($_POST["last_name"]);
            echo "Hello, $name! <br>";
        }

        // first name
        if (trim($_POST["first_name"]) == "") {
            $err_msg = "First name is required. <br>";
        } else {
            $first_name = sanitise_input($_POST["first_name"]);
            // patterm: only letters
            if (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
                $err_msg = "Only letters and white space allowed. <br>";
            }
        }
        echo $err_msg;

        // last name
        if (trim($_POST["last_name"]) == "") {
            $err_msg = "Last name is required. <br>";
        } else {
            $last_name = sanitise_input($_POST["last_name"]);
            // patterm: only letters
            if (!preg_match("/^[a-zA-Z]*$/", $last_name)) {
                $err_msg = "Only letters and white space allowed. <br>";
            }
        }

        // email
        if (trim($_POST["user_mail"]) == "") {
            $err_msg = "Email is required. <br>";
        } else {
            $user_mail = sanitise_input($_POST["user_mail"]);
            // pattern: valid email
            if (!filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
                $err_msg = "Invalid email format. <br>";
            }
        }

        // welcome message only if there is no error, other wise error message
        if ($err_msg == "") {
            echo "Welcome, $name! <br>"; 
        } else {
            echo $err_msg;
        }
    ?>
</body>
</html>