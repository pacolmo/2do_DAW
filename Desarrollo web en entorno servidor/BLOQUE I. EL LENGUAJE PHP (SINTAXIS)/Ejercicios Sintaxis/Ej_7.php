<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-7</title>
</head>
<body>
    <?php

    /*Usando el código del ejercicio anterior, 
    nos interesa conocer el mínimo, máximo y la media. */

    $array10Valores = array();
     
    for ($i=0; $i < 10 ; $i++) { 
        $array10Valores[] = rand(1,100);
    }

    echo "<br>Array original<br>";
     foreach ($array10Valores as $arrOr) {
        echo "<br>" . $arrOr;
     }

     echo "<br><br>Ascendente : <br>";
        
        $ascendente = $array10Valores;
         sort($ascendente);

      foreach ($ascendente as $ascen) {
       
         echo "<br>" . $ascen;
      }

      echo "<br><br>Descendente: <br>";
        $descendente = $array10Valores;
         rsort($descendente);

         foreach ($descendente as $descen) {
            echo "<br>" . $descen;
         }

         echo "<br><br>Mínimo: <br>";

         $valorMin = $array10Valores;

         foreach ($valorMin as $min) {
            
         }
         echo "<br>" . min($valorMin);

         echo "<br><br>Máximo:";
          $valorMax = $array10Valores;
          foreach ($valorMin as $max) {
            
          }
          echo "<br>" . max($valorMax);

          echo "<br><br> La media, es : ";
            $media = array_sum($array10Valores) / count($array10Valores);

          echo "<br>" . $media;
    ?>
</body>
</html>