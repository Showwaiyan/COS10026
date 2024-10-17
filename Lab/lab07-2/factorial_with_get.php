<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	include ("mathfunctions.php");
	 ?>
	 <h1>Factorial</h1>
	 <?php 
	 	if (isset($_GET["number"])) {
	 		$num = $_GET["number"];
	 		
	 		
	 		 	if (ispositiveinteger($num)) {

	 				echo "<p>", $num, "! is ", factorial ($num) , ".</p>";
	 			}
	 			else{
	 				echo "<p> Please enter a positive integer.</p>";
	 			}
	 		
		}
	 	echo "<p><a href='factorial.html'>Return to the Entry Page</a></p>";
	 
	  ?>

</body>
</html>