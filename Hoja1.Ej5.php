<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 4</title>
</head>
<body>

<!-- Dado un número visualizar si es par o impar. -->

<form method="POST">
    Introduce un numero
    <br><br>
    <input type="text" name="número">
    <br><br>
    <input type="submit" name="boton" value="enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boton'])) {

    $numero = $_POST['número']; 

    if ($numero % 2 == 0) {

        echo "El número es par";

    } else {

        echo "El número es impar";


    } 
}
?>

</body>
</html>
