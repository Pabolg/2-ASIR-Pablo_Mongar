<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 2</title>
</head>
<body>

<!-- 

Se piden: dos números: nota, edad y un carácter (por ejemplo, de forma: $car = “V”)
A continuación: mostrar el mensaje “ACEPTADO” si la nota es aprobada, la edad es mayor o igual a 18 y el sexo sea “V” o “v”.

Mostrar “ACEPTADA” en el mismo caso anterior pero el sexo sea “M“ o “m“.

Si es menor de edad, se visualiza “NO ES POSIBLE, es menor de edad”.

Si la nota es menor de 5 se visualiza “NO ES POSIBLE, nota suspensa”.

 -->

<form>
    
    Introduce la nota
    <br>
    <br>
    <input type="text" name="nota">
    <br>
    <br>
    Introduce la edad
    <br>
    <br>
    <input type="text" name="edad">
    <br>
    <br>
    Sexo (H - M)
    <br>
    <br>
    <input type="text" name="sexo">
    <br>
    <br>
    <input type="submit" name="boton" value="enviar">

</form>

<?php

$nota = $_REQUEST['nota'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];

if ($nota >= 5 && $edad >= 18 && ($sexo == "H" || $sexo == "h")) {
    echo("ACEPTADO");
} else if ($nota >= 5 && $edad >= 18 && ($sexo == "M" || $sexo == "m")) {
    echo("ACEPTADA");
} else if ($edad < 18) {
    echo("NO ES POSIBLE, es menor de Edad");
} elseif ($nota < 5) {
    echo("NO ES POSIBLE, nota suspensa");
}

?>

</body>
</html>