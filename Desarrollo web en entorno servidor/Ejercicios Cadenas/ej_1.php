<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     /*Escribe una frase en minúsculas y la devuelva de forma Kani, por ejemplo:
     "escribe una código que transforme esta frase" 
     ->EsCrIbE UnA CódIgO QuE TrAnSfOrMe eStA FrAsE*/

        $cadena = "escribe una código que transforme esta frase";
         $cadenaKani ="";
         $longitudCadena = strlen($cadena);

         for ($i=0; $i < $longitudCadena; $i++) { 
             if ($i % 2 == 0) {
                $cadenaKani = $cadenaKani . strtoupper($cadena[$i]);
             }else{
                $cadenaKani =  $cadenaKani . strtolower($cadena[$i]);
             }
         }
        echo $cadenaKani;
       

    ?>
</body>
</html>