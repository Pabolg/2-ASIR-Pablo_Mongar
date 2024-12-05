<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

<!-- 

Dado un array de números con valores duplicados, escribe una función 
que elimine los duplicados y devuelva un array con los valores únicos.

-->

<?php  

//Funciones//

function Proceso($array1) {
    $resultado = []; 


    $numerosUnicos = array_unique($array1);

    foreach ($numerosUnicos as $numero) {
        $resultado[] = $numero; 
    }

    return $resultado; 
}

// Programa principal

$array1 = [2, 2, 3, 4, 7, 6, 6, 8, 5, 5, 4, 3, 45, 45];
$resul = Proceso($array1);


echo "Array original: " . implode(", ", $array1) . "<br>";
echo "Array sin duplicados: " . implode(", ", $resul) . "<br>";

?>

</body>
</html>
