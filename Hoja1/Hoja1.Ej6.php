<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 6</title>
</head>
<body>

<!-- Dados dos números visualizar si su suma es superior a su producto o al contrario.-->

<form method="POST">
    Introduce el primer número
    <br><br>
    <input type="text" name="número1">
    <br><br>
    Introduce el segundo número
    <br><br>
    <input type="text" name="número2">
    <br><br>
    <input type="submit" name="boton" value="enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boton'])) {

    $numero1 = $_POST['número1']; 
    $numero2 = $_POST['número2'];

    $suma = $numero1 + $numero2;
    $producto = $numero1 * $numero2;

    if ($suma > $producto) {
        echo "La suma es mayor que el producto";
    } else {
        echo "El producto es mayor que la suma";
    }

}
?>

</body>
</html>
