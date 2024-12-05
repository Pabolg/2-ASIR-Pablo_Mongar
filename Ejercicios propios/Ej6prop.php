<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

<!-- 

Crea dos arrays de 5 cadenas de texto cada uno. 
Escribe un script que concatene ambos arrays en uno solo.

-->



<?php  


//funciones//








//programa principal//

$array1=["Hola","buenas","tardes"];
$array2=["bienvenidos", "al curso", "de php"];
$array3= array_merge($array1,$array2);

echo implode(" ", $array3);


?>

</body>
</html>
