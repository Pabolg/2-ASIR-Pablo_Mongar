<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

//dados dos numeros, visualizar dentro de una funcion, su suma si son iguales y su producto si son distintos//

//Funciones//



function Operaciones($num1, $num2) {
    if ($num1 == $num2) {
        echo "La suma de los números es: " . ($num1 + $num2);
    } else {
        echo "El producto de los números es: " . ($num1 * $num2);
    }
}




//Programa principal//


Operaciones(3,4); 
?>




</body>
</html>