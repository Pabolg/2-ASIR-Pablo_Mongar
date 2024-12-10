<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 

Declarar un array bidimensional con valores numéricos. 
Modificar el array de forma que los valores de cada fila 
sean modificados por el valor correspondiente de la fila. 
(Fila 0 = 0, Fila 1 = 1). Visualizar el array antes y despues de ser actualizado

-->

<?php

// Funciones //

function Modificar(&$matriz) {
    for ($i = 0; $i < count($matriz); $i++) { 
        for ($j = 0; $j < count($matriz[$i]); $j++) { 
            $matriz[$i][$j] = $i; 
        }
    }
}

function MostrarMatriz($matriz) {
    $resultado = "";
    foreach ($matriz as $fila) {
        $resultado .= "[" . implode(", ", $fila) . "]<br>";
    }
    return $resultado;
}

// Programa principal //

$matriz = [
    [4, 5, 2, 3],
    [6, 3, 2, 6],
    [7, 8, 6, 2],
    [2, 6, 8, 5]
];

echo "Matriz antes de ser modificada:<br>" . MostrarMatriz($matriz) . "<br>";

Modificar($matriz);

echo "Matriz después de ser modificada:<br>" . MostrarMatriz($matriz);

?>

</body>
</html>

