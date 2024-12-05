<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 

Almacenar en una matriz la información de varios coches en un concesionario mediante
arrays asociativos.

Visualizar la marca y modelo de aquellos coches cuyo precio sea superior a 30k euros.

-->

<?php

$matriz = [
    [
        "marca" => "Renault",
        "modelo" => "Kadjar",
        "puertas" => 5,
        "color" => "plata",
        "precio" => 70000
    ],
    [
        "marca" => "Ford",
        "modelo" => "Focus",
        "puertas" => 5,
        "color" => "azul",
        "precio" => 20000
    ],
    [
        "marca" => "Tesla",
        "modelo" => "Model S",
        "puertas" => 5,
        "color" => "blanco",
        "precio" => 100000
    ]
];


foreach ($matriz as $coche) {
    if ($coche["precio"] > 30000) {
        echo $coche["marca"] . " " . $coche["modelo"] . "<br>";
    }
}

?>

</body>
</html>
