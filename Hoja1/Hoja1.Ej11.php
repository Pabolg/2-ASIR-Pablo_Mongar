<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Divisores de un número</title>
</head>
<body>

<!-- 

11.-) Con la estructura de control ALTERNATIVA IF.
Dada una nota numérica de 0 a 10, visualizar:
0 y 2 “Muy deficiente”, 3 y 4 “Deficiente”, 5 “Aprobado”, 6 “Bien”, 7 y 8 “Notable”, 9 y 10
“Sobresaliente”. En otro caso “Error”.

-->

<form method="POST">
	
	Introduce un número:
	<br><br>
	<input type="number" name="numero1" max="10">
	<br><br>
	<input type="submit" name="boton" value="Nota">

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boton'])) {

	$numero = $_POST['numero1']; 

	if ($numero >= 0 && $numero <=2) {
		echo "Muy deficiente";
	} elseif ($numero == 3 || $numero == 4) {
		echo "Deficiente";
	} elseif ($numero == 5) {
		echo "aprobado";
	} elseif ($numero == 6) {
		echo "Bien";
	} elseif ($numero == 7 || $numero == 8) {
		echo "Notable";
	} elseif ($numero == 9 || $numero == 10) {
		echo "Sobresaliente";
	} else {
		echo "Error";
	}



}
?>

</body>
</html>
