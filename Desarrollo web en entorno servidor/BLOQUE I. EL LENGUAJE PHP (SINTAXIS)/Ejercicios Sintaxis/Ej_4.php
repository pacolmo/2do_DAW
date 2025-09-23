<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-4</title>
</head>
<body>
    <?php
        /*Escribe un programa en PHP que devuelva la longitud máxima y mínima de los strings que contiene un array.
         array: ("abcd","abc","de","hjjj","g","wer")
         La longitud más corta es 1 y la más larga es 4*/

         $longitud  = array("abcd","abc","de","hjjj","g","wer");
         $valorMaximo = 0; //o tambien PHP_INT_MIN;
         $valorMinimo = PHP_INT_MAX;//Es el numero más grande 
         $palabraMasLarga = "";
         $palabraMasCorta = "";

         foreach ($longitud as $palabra) {
             // strlen() -> función de PHP que devuelve el número de caracteres de un string
            $longitudActual = strlen($palabra);

            //Usamos dos if independientes para evaluar ambas posibilidades en cada iteración
            if ($longitudActual < $valorMinimo) {
                $valorMinimo = $longitudActual;
                $palabraMasCorta = $palabra;
            }
            if ($longitudActual > $valorMaximo) {
                $valorMaximo = $longitudActual;
                $palabraMasLarga = $palabra;
            }
        
         }
             echo "Palabra con más letras: " . $palabraMasLarga . " (" . $valorMaximo . " letras)<br>";
             echo "Palabra con menos letras: " . $palabraMasCorta . " (" . $valorMinimo . " letras)";
    
    ?>
</body>
</html>