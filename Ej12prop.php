<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>

<!-- 

Dado un array multidimensional donde cada sub-array contiene 
el nombre de un estudiante y una lista de sus calificaciones, 
calcula el promedio de cada estudiante y muestra su nombre junto con su promedio.

-->

<?php  

// Funciones //

function Proceso($matriz) {
    foreach ($matriz as $Alumno) {
        $nombre = $Alumno[0]; 
        $calificaciones = array_slice($Alumno, 1); 
        $acum = array_sum($calificaciones); 
        $media = round($acum / count($calificaciones));

        echo "La media de $nombre es $media <br>";
    }
}

// Programa principal //

$matriz = [
    ["Pablo", 7, 5, 9],
    ["Miguel", 5, 7, 9],
    ["Juan", 10, 9, 10]
];

Proceso($matriz);

?>



</body>
</html>
