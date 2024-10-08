<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 5 (Formulario).
    Controles en formularios (2). Con formularios.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 5 (Formulario)</h1>

  <form method="POST">
    <p>Escriba los datos siguientes:</p>

    <table>
      <tr>
        <td>
          <label>
            <strong>Nombre:</strong><br>
            <input type="text" name="nombre" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <label>
            <strong>Apellidos:</strong><br>
            <input type="text" name="apellidos" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <strong>Edad:</strong><br>
          <select name="edad">
            <option>...</option>
            <option value="1">Menos de 20 años</option>
            <option value="2">Entre 20 y 39 años</option>
            <option value="3">Entre 40 y 59 años</option>
            <option value="4">60 años o más</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <strong>Peso:</strong><br>
            <input type="number" name="peso" min="1" max="250"> kg
          </label>
        </td>
        <td>
          <strong>Sexo:</strong><br>
          <label><input type="radio" name="genero" value="hombre">Hombre</label>
          <label><input type="radio" name="genero" value="mujer">Mujer</label>
        </td>
        <td>
          <strong>Estado Civil:</strong><br>
          <label><input type="radio" name="estadoCivil" value="soltero">Soltero</label>
          <label><input type="radio" name="estadoCivil" value="casado">Casado</label>
          <label><input type="radio" name="estadoCivil" value="otro">Otro</label>
        </td>
      </tr>
    </table>

    <table style="border-spacing: 5px;">
      <tr>
        <td rowspan="2" class="borde"><strong>Aficiones:</strong></td>
        <td><label><input type="checkbox" name="cine">Cine</label></td>
        <td><label><input type="checkbox" name="literatura">Literatura</label></td>
        <td><label><input type="checkbox" name="tebeos">Tebeos</label></td>
      </tr>
      <tr>
        <td><label><input type="checkbox" name="deporte">Deporte</label></td>
        <td><label><input type="checkbox" name="musica">Música</label></td>
        <td><label><input type="checkbox" name="television">Televisión</label></td>
      </tr>
    </table>

    <p>
      <input type="submit" value="Enviar" name="boton">
      <input type="reset" value="Borrar" name="boton2">
    </p>
  </form>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2019-10-24">24 de octubre de 2019</time>
    </p>

    <p class="licencia">
      Este programa forma parte del curso <strong><a href="https://www.mclibre.org/consultar/php/">Programación
      web en PHP</a></strong> de <a href="https://www.mclibre.org/" rel="author">Bartolomé Sintes Marco</a>.<br>
      El programa PHP que genera esta página se distribuye bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.
    </p>
  </footer>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boton'])) {
$nombre = $_POST['nombre']; 
$apellidos = $_POST['apellidos']; 
$edad = $_POST['edad']; 
$peso = $_POST['peso']; 
$genero = $_POST['genero'] ?? ''; 
$estadoCivil = $_POST['estadoCivil'] ?? ''; 
$aficiones = []; 

    


    echo "Su nombre es $nombre. <br>";
    echo "Sus apellidos son $apellidos. <br>";

    switch ($edad) {
          case '1':
              echo "Su edad es menor a 20 años.";
              break;
          case '2':
              echo "Su edad está entre 20 y 39 años.";
              break;
          case '3':
              echo "Su edad está entre 40 y 59 años.";
              break;
          case '4':
              echo "Su edad es de 60 años o más.";
              break;
          default:
              echo "Por favor, seleccione una opción de edad válida.";
              break;
      }
      echo "<br>";
      echo "Su peso es de $peso kg.";
      echo "<br>";

      if (isset($_POST['cine'])) {
        $aficiones[] = "Cine";
    }
    if (isset($_POST['literatura'])) {
        $aficiones[] = "Literatura";
    }
    if (isset($_POST['tebeos'])) {
        $aficiones[] = "Tebeos";
    }
    if (isset($_POST['deporte'])) {
        $aficiones[] = "Deporte";
    }
    if (isset($_POST['musica'])) {
        $aficiones[] = "Música";
    }
    if (isset($_POST['television'])) {
        $aficiones[] = "Televisión";
    }

     if ($genero == 'hombre') {
        echo "Su género es Hombre. <br>";
    } elseif ($genero == 'mujer') {
        echo "Su género es Mujer. <br>";
    } else {
        echo "No ha seleccionado un género. <br>";
    }

    // Mostrar el estado civil
    if ($estadoCivil == 'soltero') {
        echo "Su estado civil es Soltero. <br>";
    } elseif ($estadoCivil == 'casado') {
        echo "Su estado civil es Casado. <br>";
    } elseif ($estadoCivil == 'otro') {
        echo "Su estado civil es Otro. <br>";
    } else {
        echo "No ha seleccionado un estado civil. <br>";
    }

    
    if (!empty($aficiones)) {
        echo "Sus aficiones son: " . implode(", ",  $aficiones) . ". <br>";
    } else {
        echo "No ha seleccionado ninguna afición. <br>";
    }

    
    
}



?>

</html>
