<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par o Impar</title>
</head>
<body>

<h2>Verificar si un número es par o impar</h2>

<form method="post" action="">
    <label for="numero">Introduzca un número:</label>
    <input type="number" id="numero" name="numero" required>
    <input type="submit" value="Verificar">
</form>



<?php


//Dado un numero visualizar si es par o impar con formularios//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    if ($numero % 2 == 0) {
        echo "<p>El número <strong>$numero</strong> es par.</p>";
    } else {
        echo "<p>El número <strong>$numero</strong> es impar.</p>";
    }
}
?>

</body>
</html>
