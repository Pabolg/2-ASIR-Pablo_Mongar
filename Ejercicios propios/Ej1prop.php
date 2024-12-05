<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej1prop</title>
</head>
<body>
    
<!--Crea un array con 10 números enteros. Escribe una función en PHP que calcule la suma de todos los elementos del array.-->

    
<?php


//funciones//


function sumar($numeros){

    $suma=0;
    
    foreach ($numeros as $numero ) {
        
        

        $suma += $numero;
       
        
    }

    return $suma;

}

$numeros = [1,3,6,4,5,7,8,8,5,4];


//programa principal//


$resul=sumar($numeros);

echo "La suma de los numeros es " . $resul;



?>




</body>
</html>