<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <?php 
        if (!isset($_POST['submit'])) {
    ?>
    <form action="agecalc.php" method="POST">
        <label for="dob">Enter Date of Birth in mm/dd/yyyy Format</label>
        <input type="text" name="dob">

        <br>

        <input type="submit" value="Submit" name="submit">
    </form>
    <?php 
        } else {
            $dateArr = explode("/",$_POST["dob"]);
            $stoDate = strtotime($_POST["dob"]);
            $now = strtotime('today');


            if (count($dateArr) != 3) die("Please enter the valid format of date");
            if ($stoDate >= $now) die("You cannot choose current date as dob");
            if (!checkdate($dateArr[0], $dateArr[1], $dateArr[2])) die("Please enter the valid date");

            $ageDays = floor(($now - $stoDate) / 86400);
            $ageYears = floor($ageDays / 365);
            $ageMonths = floor(($ageDays - ($ageYears * 365)) / 30);

            echo "You are currently $ageYears Years, and $ageMonths Months";
        }
    ?>
</body>
</html>