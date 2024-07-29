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
// Definir una constante
define("NOMBRE", "Juan");
define("EDAD", 30);

// Imprimir las constantes
echo "El nombre es: " . NOMBRE . "<br>";
echo "La edad es: " . EDAD . "<br>";

// Intentar cambiar una constante (esto producirá un error)
// define("NOMBRE", "Pedro"); // Esto no se puede hacer
?>
  
</body>
</html>