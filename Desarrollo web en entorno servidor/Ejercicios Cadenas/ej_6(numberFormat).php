<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-6</title>
</head>
<body>
    <?php
    /*Dado un número cualesquiera, por ejemplo, 1123456789, 
    se trata separar en millares 1.123.456.789, usando funciones de cadenas.*/

    $numero = 1123456789;
    //primero vnum a formatear
    //numero de decimales
    //caracter para searar decimales
    //caracter para millares
    $numeroMillares = number_format($numero,0,',','.');
    echo $numeroMillares;


    

    


    ?>
</body>
</html>