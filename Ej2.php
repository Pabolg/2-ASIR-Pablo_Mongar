<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>



<?php

// dado dos numeros, si el primero es menor que el segundo, visualizar los numeros comprendidos entre ambos, inclusive, si no, que salte un mensaje de error. //


//Funciones//



function numeros($num1, $num2) {
    if ($num1 < $num2) {
        echo "Los números comprendidos entre $num1 y $num2 son:\n";
        for ($i = $num1; $i <= $num2; $i++) {
            echo $i . "\n";
        }
    } else {
        
        echo "El primer número debe ser menor que el segundo.\n";
    }
}




//Programa principal//


numeros(5,4); 

?>




</body>
</html>