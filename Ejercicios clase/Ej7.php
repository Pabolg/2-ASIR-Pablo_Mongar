<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 
En un array tenemos 4 nombres de localidades y en otro array tenemos la cantidad de litros que llovieron el sabado.
Obtener un mensaje "en x ayer llovieron x litros"
-->

<?php

// Funciones //
function Proceso($ciudades, $litros) {
    foreach ($ciudades as $index => $ciudad) {
        echo "En " . $ciudad . " llovieron " . $litros[$index] . " litros.<br>";
    }
}

// Programa principal //
$ciudades = ["Chiclana", "Cadiz", "San Fernando", "Conil"];
$litros = [10, 40, 30, 50];

Proceso($ciudades, $litros);

?>

</body>
</html>
