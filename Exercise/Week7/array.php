<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
   <?php
        $arr = array(1,2,3,4,5);
        foreach ($arr as &$value) {
            $value = $value * 2;
        }
        print_r($arr);

        $stu = array("Amy", "Bob", "Cathy", "David");
        $mark = array(90, 80, 85, 95);
        
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Student</th>";
                echo "<th>Mark</th>";
            for ($i=0; $i < count($stu); $i++) {
                echo "<tr>";
                echo "<td>", $stu[$i], "</td>";
                echo "<td>", $mark[$i], "</td>";
                echo "</tr>";
            }
            echo "</table>";
    ?> 
</body>
</html>