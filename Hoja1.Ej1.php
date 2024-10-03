<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 1</title>
</head>
<body>

<form>
    
    Introduce el primer número:
    <br>
    <br>
    <input type="text" name="valor1">
    <br>
    <br>
    Introduce el segundo número:
    <br>
    <br>
    <input type="text" name="valor2">
    <br>
    <br>
    <input type="submit" name="boton" value="enviar">

</form>

<?php

$suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];

if ($suma > 0) { 
    echo "La suma es positiva";  
}


if ($suma < 0) { 
    echo "La suma es negativa";  
}

if ($suma == 0) { 
    echo "La suma es cero";  
}


?>

</body>
</html>