<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 

Validar una direccion de correo electrónico con una serie de condiciones, 
que contenga el caracter @ y que el dominio sea o .com, .es o .org

-->

<?php

$email = "informatica@iespicasso.com";


$partes = explode("@", $email);


$dominio = explode(".", $partes[1]);


$tld = end($dominio);


echo "Dirección de correo: " . $email . "<br>";
echo "Usuario: " . $partes[0] . "<br>";
echo "Caracter: @" . "<br>";
echo "Dominio: " . $partes[1] . "<br>";
echo "TLD: " . $tld . "<br>";

?>

</body>
</html>
