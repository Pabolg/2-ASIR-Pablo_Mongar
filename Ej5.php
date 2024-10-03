<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ej5</title>
</head>
<body>

<!-- 
Dados 5 números, utilizar dos checkboxes que indiquen suma y resta, de forma que el usuario puede elegir suma, resta, ambas o ninguna.
Si se pulsa suma, se visualiza la suma.
Si se pulsa resta, se visualiza la resta.
Si pulsa ambas opciones, se visualizan ambas.
-->

<form method="POST">
    <input type="number" name="numero1" required>
    <br><br>
    <input type="number" name="numero2" required>
    <br><br>
    <input type="number" name="numero3" required>
    <br><br>
    <input type="number" name="numero4" required>
    <br><br>
    <input type="number" name="numero5" required>
    <br><br>
    
    <input type="checkbox" name="suma"> Suma
    <input type="checkbox" name="resta"> Resta
    <br><br>
    
    <input type="submit" name="enviar" value="Calcular">
</form>

<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acum = 0;

    // Acumular la suma de los números
    for ($i = 1; $i <= 5; $i++) {
        $acum += (float)$_POST["numero".$i]; 
    }

    // Calcular la resta correctamente
    $resta = (float)$_POST["numero1"]; // Inicializar la resta con el primer número
    for ($i = 2; $i <= 5; $i++) {
        $resta -= (float)$_POST["numero".$i]; // Restar cada número del primero
    }

    // Mostrar resultados según las opciones seleccionadas
    if (isset($_POST['suma'])) {
        echo "<p>La suma es: $acum</p>";
    }

    if (isset($_POST['resta'])) {
        echo "<p>La resta es: $resta</p>";
    }
}
?>

</body>
</html>
