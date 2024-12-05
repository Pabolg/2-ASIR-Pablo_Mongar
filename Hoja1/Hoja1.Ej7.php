<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 6</title>
</head>
<body>

<!-- Visualizar los valores numéricos enteros de 50 a 0 en orden descendente, de 2 en 2-->


<?php
for ($i = 50; $i >= 0; $i -= 2) {
    echo $i;
    
    // Si no es el último número, agregar coma
    if ($i > 0) {
        echo " , ";
    }
}
?>

</body>
</html>
