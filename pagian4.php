<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Definición de variables
    $edad1 = 25;
    $edad2 = 30;
    $nombre1 = "Juan";
    $nombre2 = "Pedro";

    // Operadores de comparación
    if ($edad1 > $edad2) {
        echo "$nombre1 es mayor que $nombre2.<br>";
    } elseif ($edad1 < $edad2) {
        echo "$nombre1 es menor que $nombre2.<br>";
    } else {
        echo "$nombre1 y $nombre2 tienen la misma edad.<br>";
    }

    // Operadores lógicos
    $esEstudiante = true;
    $esEmpleado = false;

    if ($esEstudiante && !$esEmpleado) {
        echo "$nombre1 es estudiante pero no es empleado.<br>";
    }

    if ($esEstudiante || $esEmpleado) {
        echo "$nombre1 es estudiante o empleado.<br>";
    }

    // Unión de cadenas
    $frase = "Hola, " . $nombre1 . ". Tienes " . $edad1 . " años.";
    echo $frase;
    ?>

</body>
</html>