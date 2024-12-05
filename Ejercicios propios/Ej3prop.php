<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<!-- Crea un array que contenga las calificaciones de 5 estudiantes. 
 Escribe una función que calcule el promedio de las calificaciones e 
 indique si cada estudiante aprobó o reprobó

-->
    
<?php


$calificaciones = [8, 7, 4, 6, 9];

function calcularPromedio($calificaciones) {
    $suma = 0; 
    $totalEstudiantes = count($calificaciones); 

    foreach ($calificaciones as $calificacion) {
        $suma += $calificacion; 
    }

    return $suma / $totalEstudiantes; 
}

function evaluarEstudiantes($calificaciones) {
    $resultado = []; 

    foreach ($calificaciones as $index => $calificacion) {
       
        if ($calificacion >= 5) {
            $resultado[$index] = "Aprobado";
        } else {
            $resultado[$index] = "Suspenso";
        }
    }

    return $resultado; 
}


$promedio = calcularPromedio($calificaciones);
echo "El promedio de las calificaciones es: " . number_format($promedio, 2) . "<br>";


$resultados = evaluarEstudiantes($calificaciones);
foreach ($resultados as $index => $resultado) {
    echo "Estudiante " . ($index + 1) . ": " . $resultado . "<br>";
}

?>

</body>
</html>
