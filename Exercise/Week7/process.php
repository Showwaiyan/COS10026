<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
        $name = $_POST["first_name"]." ".$_POST["last_name"];
        echo "Hello, $name! <br>";
        $gender = $_POST["gender"] === "M" ? "Male" : "Female";
        echo "You are ". $gender . "<br>";

        echo $_POST["user_mail"] ."<br>";
    ?> 
</body>
</html>