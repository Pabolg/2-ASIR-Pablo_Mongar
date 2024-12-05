<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 4</title>
</head>
<body>

<!--

Pedir un sueldo, a continuación, visualizar:
a) Si es superior a 600.
b) Si es superior a 1200.
c) Si es superior a 1800.
Por ejemplo, si el sueldo es: 1500. Deberá visualizarse:
Es superior 600
Es superior 1200



 -->

<form method="POST">
    Introduce tu sueldo:
    <br><br>
    <input type="text" name="sueldo">
    <br><br>
    <input type="submit" name="boton" value="enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boton'])) {
    $sueldo = $_POST['sueldo']; 

    if ($sueldo > 1800) {
        echo "Es superior a 600<br>";
        echo "Es superior a 1200<br>";
        echo "Es superior a 1800<br>";
    } elseif ($sueldo > 1200) {
        echo "Es superior a 600<br>";
        echo "Es superior a 1200<br>";
    } elseif ($sueldo > 600) {
        echo "Es superior a 600<br>";
    }
}
?>

</body>
</html>
