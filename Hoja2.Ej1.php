<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>

<!-- 

Dados 7 nombres de empleados y siete sueldos, visualizar:
a)  el nombre del que tiene mayor sueldo, suponiendo que al primero le corresponde el primer sueldo y así sucesivamente.
b) Aquellos nombres de empleados cuyo sueldo está por encima de  la media total de sueldos.

-->

<?php  

// Funciones //

function Proceso($Nombres, $Sueldos) {
    // Encontrar el índice del sueldo mayor
    $indexMax = array_search(max($Sueldos), $Sueldos);

    // Calcular la media de los sueldos
    $mediaSueldo = array_sum($Sueldos) / count($Sueldos);

    // Lista de empleados con sueldo por encima de la media
    $empleadosSobreMedia = [];
    foreach ($Sueldos as $index => $sueldo) {
        if ($sueldo > $mediaSueldo) {
            $empleadosSobreMedia[] = $Nombres[$index];
        }
    }

    // Mostrar resultados de forma simplificada
    echo "Empleado con el mayor sueldo: {$Nombres[$indexMax]}<br>";
    echo "Empleados con sueldos por encima de la media: " . implode(", ", $empleadosSobreMedia);
}

// Programa principal //

$Nombres = ["Pablo", "Miguel", "Juan", "Diego", "Fran", "Estela", "Zaira"];
$Sueldos = [2500, 2000, 3500, 1200, 3200, 4300, 1200];

Proceso($Nombres, $Sueldos);

?>

</body>
</html>
