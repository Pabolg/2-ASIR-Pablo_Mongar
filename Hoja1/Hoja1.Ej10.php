<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Divisores de un número</title>
</head>
<body>

<!-- 

Con la estructura de control ALTERNATIVA SWITCH CASE.
Dada una nota numérica de 0 a 10, visualizar:
de 0 a 2 “muy deficiente”., 3 y 4 “deficiente”, 5 “aprobado”, 6 “bien”, 7 y 8 “Notable”, 9 y 10
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

	switch ($numero) {
		case 0:
		case 1:
		case 2:
			echo "Muy deficiente";
			break;

		case 3:
		case 4:
			echo "deficiente";
			break;

		case 5:
			echo "aprobado";
			break;

		case 6:
			echo "bien";
			break;

		case 7:
		case 8:
			echo "Notable";
			break;

		case 9:
		case 10:
			echo "Sobresaliente";
			break;
		
		default:
			echo "Error";
			break;
	}
}
?>

</body>
</html>
