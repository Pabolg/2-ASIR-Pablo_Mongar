<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>

<!-- 

Crea un array asociativo donde las claves sean los nombres de productos y 
los valores sus precios. Luego, recorre el array e imprime cada producto con su precio. 
Si el precio es mayor de 50, aplica un descuento del 10% y muestra el nuevo precio.

-->

<?php  

//Funciones//
function Proceso($array) {
    foreach ($array as $Producto => $Precio) {
        if ($Precio > 50) {
            $Precio = $Precio * 0.9; 
        }
        
        echo "$Producto : $Precio<br>";
    }
}

// Programa principal
$array = [
    "Logitech G502 Hero" => 57.70,
    "Razer BlackShark V2 X" => 52.24,
    "Alfombrilla Led Krom knout Rgb" => 18.34
];

$resul = Proceso($array);

$resul;

?>


</body>
</html>
