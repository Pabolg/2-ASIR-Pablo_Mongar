<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 

EN una empresa se guardan los datos de los empreados en un array bidimensional
 que contiene un array asociativo por cada empleado con los datos, nombre, 
 sueldo y ciudad y tambien cada empleado un array que contenga sus ventas (en dinero). 
Visualizar la media de ventas de cada empleado

-->

<?php

// Funciones //

function Proceso($matriz) {
    
    for ($i=0; $i < count($matriz) ; $i++) { 
    
        $media= array_sum($matriz[$i]["ventas"]) / count(($matriz[$i]["ventas"]));

        echo "La media de las ventas es: " . $media . "<br>";



    }


}



// Programa principal //

$matriz = [
    [
        "nombre" => "Juan",
        "sueldo" => 1500,
        "ciudad" => "Chiclana",
        "ventas" => [300,500,200,400]
    ],
    [
        "nombre" => "Miguel",
        "sueldo" => 3000,
        "ciudad" => "Cadiz",
        "ventas" => [800,2000,1000,400]
    ],
    [
        "nombre" => "Sara",
        "sueldo" => 2300,
        "ciudad" => "Chiclana",
        "ventas" => [700,400,200,300]
    ],
    [
        "nombre" => "Chema",
        "sueldo" => 1700,
        "ciudad" => "Chiclana",
        "ventas" => [300,500,200,400]
    ]
];

Proceso($matriz);



?>

</body>
</html>

