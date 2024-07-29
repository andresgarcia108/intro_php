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
    // Definición de una variable
    $edad = 18;

    // Instrucción if
    if ($edad < 18) {
        echo "Eres menor de edad.<br>";
    }

    // Instrucción if-else
    if ($edad >= 18) {
        echo "Eres mayor de edad.<br>";
    } else {
        echo "Eres menor de edad.<br>";
    }

    // Instrucción if-elseif-else
    $nota = 85;

    if ($nota >= 90) {
        echo "Obtuviste una A.<br>";
    } elseif ($nota >= 80) {
        echo "Obtuviste una B.<br>";
    } elseif ($nota >= 70) {
        echo "Obtuviste una C.<br>";
    } elseif ($nota >= 60) {
        echo "Obtuviste una D.<br>";
    } else {
        echo "Obtuviste una F.<br>";
    }
    ?>

</body>
</html>