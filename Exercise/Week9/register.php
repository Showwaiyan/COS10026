<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memeber Registeration</title>
</head>
<body>
    <?php 
        $fields = ["name","address","nrc"];
        if(isset($_POST["submit"])) {
            for ($i = 0; $i < 3; $i++) {
                ${$fields[$i]} = $_POST[$fields[$i]];
            }
        }
        $to = "showwaiyan9@gmail.com";
        $from = "damianzort@gmail.com";
        $subject = "testing";
        $message = "Name: $name\r\nAddress: $address\r\nResidential status: $nrc\r\n"; 
        if (mail($to, $subject, $message, "From: $from")) echo "Successful Register";
        else echo "Request mail failure";
    ?>
</body>
</html>