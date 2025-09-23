<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-6</title>
</head>
<body>
    <?php
        /*=ARRAY=
            Rellena un array de 30 valores de forma aleatoria, mostrándolos por pantalla.
            Por cosas de la vida, nos interesa ver esos ordenados de  forma ascendiente y también descendiente.
             */

            $valores = array();
            for ($i = 0 ; $i < 30  ; $i++ ) { 
                $valores[] = rand(1,100);
            }
            
            echo "Array original:<br>";
             foreach ($valores as $valor) {
                echo $valor . " ";
             }

             echo "<br><br>Ordenar ascendente:<br>";

             $ascendente = $valores;
             sort($ascendente);

             foreach ($ascendente as $valor) {
                echo $valor . " ";
             }

             echo "<br><br>Orenar Descendente: <br>";
              
             $descendente = $valores;
              rsort($descendente);

              foreach ($descendente as $valor) {
                echo $valor . " ";
              }

    ?>
</body>
</html>