<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Php</title>
</head>
<body>
   <?php
   $marks = [85,85,95];
   $marks[1] = 90;
   $avg = ($marks[0] + $marks[1] + $marks[2]) / 3;
   if ($avg >= 50) {
       $status = "PASSED";
    } else {
        $status = "FAILED";
    }
    echo "<p>The average score is $avg. You $status</p>"
    ?> 
</body>
</html>