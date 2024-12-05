<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

<!-- 

Dado un array de 10 números desordenados, utiliza una función 
de PHP para ordenar el array de menor a mayor y luego muestra el array ordenado.

-->

<?php  

//Funciones//

function Proceso($array) {

    sort($array);

    return $array;
    
}

// Programa principal

$array = [6,5,10,3,4,67,65,100,12,33];

$resul = Proceso($array);

echo "Array ordenado: " . implode(", ", $resul);


?>

</body>
</html>
