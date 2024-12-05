<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

<!-- 

Crea un script en PHP que tome una matriz de números enteros 
y calcule la suma de todos sus elementos.

-->

<?php  

//Funciones//

function Proceso($matriz) {

    $acum=0;


    foreach ($matriz as $arrays) {
        
        
        foreach ($arrays as $numeros) {
            
            $acum += $numeros;



        }




    }

    return $acum;
    
}

// Programa principal

$matriz = [

    [1,34,2,6,16,21],
    [5,74,14,3,65,32],
    [2,23,56,45,39,32]

];

$resul = Proceso($matriz);

echo "La suma de los numeros de la matriz es " . $resul;




?>

</body>
</html>
