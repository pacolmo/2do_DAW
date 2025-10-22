<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Lee una frase y devuelve una nueva con solo los caracteres
         de las posiciones impares en letra mayúsculas.*/

         $frase = "Haciendo El Segundo Ejercio De Cadenas";
         $nuevaFrase = "";
         $longitudFrase = strlen($frase);
          for ($i=0; $i < $longitudFrase; $i++) { 
            
            if ($i % 2 == 1) {
                $nuevaFrase .= strtoupper($frase[$i]);
            }
          }
          echo $nuevaFrase;
    ?>
    
</body>
</html>