<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<!-- 

8.-) Con la estructura de control REPETITIVA FOR.
Mostrar una figura similar a la siguiente:
(no utilizar la instrucción echo de la forma echo “***....”)

*
* *
* * *
* * * *
* * * * *
* * * * * *

-->


<?php


for ($i = 1; $i <= 6; $i++) { 
	
	for ($j=1; $j <= $i; $j++) { 
		echo "* ";
	}
	echo "<br>";
	}

?>





</body>
</html>