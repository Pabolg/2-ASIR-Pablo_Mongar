<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 

Escribe una función que reciba un array como parámetro y devuelva 
el array con sus elementos en orden inverso,
sin usar funciones predefinidas de PHP como array_reverse.

-->

<?php

// Funciones //

function Revertir($numeros, &$numeros2) {

    for ($i = count($numeros) - 1; $i >= count($numeros) - count($numeros); $i--) { 

        $numeros2[] = $numeros[$i]; 
    }

    foreach ($numeros2 as $numeros) {
        
        echo "Los valores del array en orden inverso son : " . $numeros . "<br>"; 
    }

}


// Programa principal //

$numeros = [3, 5, 2, 7, 8, 65, 34, 78, 65, 145];
$numeros2 = [];

Revertir($numeros, $numeros2);

?>

</body>
</html>
