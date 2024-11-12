<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<!-- 

3.-) Dados 7 valores numéricos en 7 cajas de texto HTML, obtener en un programa PHP: si o no hay entre ellos tres nueves, 
dos números pares y al menos un número primo. Por ejemplo: si los valores son: 22, 34, 17, 9, 9, 9, 15 
el resultado sería SI, ya que hay tres nueves, dos números pares y un número primo.

-->

<form method="POST">
    <input type="number" name="valores[]" required>
	<br><br>
    <input type="number" name="valores[]" required>
	<br><br>
    <input type="number" name="valores[]" required>
	<br><br>
    <input type="number" name="valores[]" required>
	<br><br>
    <input type="number" name="valores[]" required>
	<br><br>
    <input type="number" name="valores[]" required>
	<br><br>
    <input type="number" name="valores[]" required>
	<br><br>
    <button type="submit">Comprobar</button>
</form>

<?php  

// Funciones //

function esPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function Proceso($valores) {
    // Comprobación de tres nueves
    $conteoNueves = 0;
    foreach ($valores as $valor) {
        if ($valor == 9) $conteoNueves++;
    }

    // Comprobación de dos números pares
    $conteoPares = 0;
    foreach ($valores as $valor) {
        if ($valor % 2 == 0) $conteoPares++;
    }

    // Comprobación de al menos un número primo
    $hayPrimo = false;
    foreach ($valores as $valor) {
        if (esPrimo($valor)) {
            $hayPrimo = true;
            break;
        }
    }

    // Verificar condiciones y mostrar el resultado
    if ($conteoNueves >= 3 && $conteoPares >= 2 && $hayPrimo) {
        echo "Resultado: SI";
    } else {
        echo "Resultado: NO";
    }
}

// Programa principal //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valores = $_POST['valores'];
    Proceso($valores);
}

?>

</body>
</html>
