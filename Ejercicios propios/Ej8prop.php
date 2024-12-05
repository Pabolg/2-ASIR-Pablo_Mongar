<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

<!-- 

Crea un array asociativo que contenga el nombre de 5 productos como clave 
y su precio como valor. 
Escribe una función que calcule el precio total de todos los productos.

-->

<?php  

//Funciones//

function Proceso($array) {

    $total = 0;

    foreach ($array as $Producto => $Precio) {
        
        $total += $Precio;



    }

    return $total;
    
}

// Programa principal

$array = [

    "Nintendo switch" => 299,
    "Play station 5" => 500,
    "Iphone 15" => 1000,
    "Ipad air 2022" => 548,
    " Portatil asus gaming" => 1500


];

$resul = Proceso($array);

echo "El precio total de los productos es " . $resul;



?>

</body>
</html>
