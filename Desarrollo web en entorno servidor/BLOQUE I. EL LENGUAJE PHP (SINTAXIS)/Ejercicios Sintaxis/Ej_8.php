<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-8</title>
</head>
<body>
    <?php
        /* =MUJERES Y HOMBRES=
            Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo ["M", "M", "F", "M", ...]).
            Una vez completado, vuelve a recorrerlo y calcula cuántos elementos hay de cada uno de los valores almacenando
            el resultado en un array asociativo ['M' => 44, 'F' => 66] (no utilices variables para contar las M o las F).
            Finalmente, muestra el resultado por pantalla.
            Interesante usar array_count_values.
         */

            $personas = array();
             for ($i=0; $i < 100 ; $i++) { 
                $personas [] = (rand(0,1)== 0) ? 'M' : 'H';
                
             }
             foreach ($personas as $p) {
                echo  $p . " "; 
             }

             $resultado = array_count_values($personas);
             echo "<br>";
             echo "<br> Mujeres: " . $resultado ['M'] . "<br>";
             echo "<br> Hombres: " . $resultado ['H'] . "<br>";
              

    ?>
</body>
</html>