<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <?php 
        if (!isset($_POST['submit'])) {
    ?>

    <form action="prime.php" method="POST">
        <label for="prime">Write a number of list seperate by comma: </label>
        <input type="text" name="prime" id="prime">

        <br>

        <input type="submit" value="Submit" name="submit">
    </form>

    <?php 
        } else {
           $numArr = explode(",",$_POST['prime']);
           $primeArr = array();
           
           foreach ($numArr as $num) {
                $i = 2;
                while ($i < $num) {
                    $primeFlag = false;
                    if ($num % $i == 0) {
                        break;
                    }
                    $primeFlag = true;
                    $i++;
                }
                if ($primeFlag) {
                    array_push($primeArr, $num);
                }
           }
           if (count($primeArr) > 0) echo "Prime Number are: " . implode(",",$primeArr);
           else echo "No primes are founded!";
        }
    ?>
</body>
</html>