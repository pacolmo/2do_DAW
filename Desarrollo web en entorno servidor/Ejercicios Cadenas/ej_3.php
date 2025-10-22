<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*A partir de una frase con palabras sólo separadas por espacios, devolver
        Letras totales y cantidad de palabras
        Una línea por cada palabra indicando su tamaño
        echad un vistazo a la función str_word_count*/

        $frase = "Haciendo el tercer ejercicio de cadenas";
        
        //cantidad de palabras:
        $numPalabras = str_word_count($frase);
        echo "Número de palabras : $numPalabras";

        //Cantidad de letras
        $contandoLetras = str_replace(" ", "",$frase);
        $numeroLetras = strlen($contandoLetras);
        echo "<br>El numero de letras de la frase, es: $numeroLetras";

        //linea por palabra
        $lineaPorPalabra = str_word_count($frase,1);
         foreach ($lineaPorPalabra as $palabra) {
            $tamanoPalabra = strlen($palabra);
            echo "<br>$palabra : $tamanoPalabra";
         }
         
    ?>
    
</body>
</html>