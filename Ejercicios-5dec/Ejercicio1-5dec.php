<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 

Crea un array con 10 números enteros aleatorios. 
Filtra los números pares y almacénalos en otro array. 
Finalmente, muestra los dos arrays: el original y el filtrado.

-->

<?php

// Funciones //

function Filtrar($numeros, &$numeros2) {
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $numeros2[] = $numero; 
        }
    
    }

    foreach ($numeros2 as $numero) {
        
        echo "Los numeros pares del array son " . $numero . "<br>";
    }


}



// Programa principal //

$numeros = [3, 5, 2, 7, 8, 65, 34, 78, 65, 145];
$numeros2 = [];

// Filtrar números pares
Filtrar($numeros, $numeros2);



?>

</body>
</html>
