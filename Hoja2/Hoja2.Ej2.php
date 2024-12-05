<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<!-- 

Dados dos números obtener su división mediante restas sucesivas. Si el segundo es cero, visualizar el mensaje correspondiente.

-->

<?php  

// Funciones //

function Proceso($dividendo, $divisor) {
    // Comprobar si el divisor es cero
    if ($divisor == 0) {
        echo "Error: No se puede dividir entre cero.";
        return;
    }

    // Inicializar variables
    $cociente = 0;
    $resto = $dividendo;

    // Realizar restas sucesivas
    while ($resto >= $divisor) {
        $resto -= $divisor;
        $cociente++;
    }

    // Mostrar el resultado
    echo "División de $dividendo entre $divisor:<br>";
    echo "Cociente: $cociente<br>";
    echo "Resto: $resto";
}

// Programa principal //

$dividendo = 15;
$divisor = 4;

Proceso($dividendo, $divisor);

?>

</body>
</html>
