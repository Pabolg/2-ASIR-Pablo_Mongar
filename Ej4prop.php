<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

<!-- Crea un array de nombres de personas. 
 Escribe una función que reciba un nombre como parámetro
y devuelva si el nombre existe en el array o no. -->

<form method="POST">
    <input type="text" name="nombre">
    <br><br>
    <input type="submit" name="enviar" value="boton">
</form>

<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_REQUEST['nombre'];

    function Proceso($nombre)  {
        $array = ['Juan', 'Pablo', 'Celeste'];
        
        // Comprobamos si el nombre existe en el array
        if (in_array($nombre, $array)) {
            echo "El nombre ya se encuentra en la base de datos";
        } else {
            echo "El nombre no se encuentra en la base de datos. Se puede agregar.";
            $array[]=$nombre;
            echo "<br> Los nombres en la base de datos incluyendo ahora el suyo son: " . implode(", ", $array) ;
        }

        return($array);

    }

    $array = Proceso($nombre, $array);

    

    
    
}

?>

</body>
</html>
