<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej2prop</title>
</head>
<body>

<!--Dado un array de 20 números enteros, separa los números en dos arrays diferentes: uno para los números pares y otro para los impares.-->

    
<?php


//funciones//


function Proceso($numeros){

    $pares=[];
    $impares=[];
    
    foreach ($numeros as $numero ) {
        
     if ($numero % 2 == 0) {

        array_push($pares, $numero);

     }  else {
        array_push($impares,$numero);
     }

        
       
        
    }

    return [
        'pares' => $pares,
        'impares' => $impares
    ];
    

}

$numeros = [1,3,6,4,5,7,8,8,5,4,3,1,2,4,5,6,3,3,11,13,];


//programa principal//


$resul=Proceso($numeros);

echo "Los números pares son: " . implode(", ", $resul['pares']) . "<br>";
echo "Los números impares son: " . implode(", ", $resul['impares']) . "<br>";



?>




</body>
</html>