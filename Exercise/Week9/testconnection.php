<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <?php 
    require_once 'settings.php'; 
    $conn = @mysqli_connect($host, $user, $pwd, $sq_db);
    if ($conn) {
        echo "<p>Database connection successful</p>";
        mysqli_close($conn);
    } else {
        echo "<p>Database connection failure</p>";
    }
    ?> 
</body>
</html>