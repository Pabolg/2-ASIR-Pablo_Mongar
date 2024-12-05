<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Divisores de un número</title>
</head>
<body>

<!-- 

9.-) Dado un número mostrar todos sus divisores (aquellos cuyo resto de la división es cero)

-->

<form method="POST">
	
	Introduce un número:
	<br><br>
	<input type="number" name="numero1">
	<br><br>
	<input type="submit" name="boton" value="Calcular Divisores">

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boton'])) {

	$numero = intval($_POST['numero1']); // Convertir el valor a entero

	echo "Los divisores de $numero son: <br>";

	// Bucle para encontrar los divisores
	for ($i = 1; $i <= $numero; $i++) {
		if ($numero % $i == 0) {
			echo $i . "<br>";
		}
	}
}
?>

</body>
</html>
