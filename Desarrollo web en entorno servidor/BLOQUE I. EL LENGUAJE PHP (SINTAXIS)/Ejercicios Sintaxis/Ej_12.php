<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-12</title>
</head>
<style>
 
    </style>
<body>
<?php
/*La idea es que se visualicen las diferentes tonalidad de los distintos colores, 
es decir, todas las combinaciones de colores posibles con un incremento de 50 en cada tonalidad de la paleta ,
 para ello, deberemos ir dando valores a RGB de 0 hasta 255 (incremento 50).
Para visualizar el valor en hexadecimal se usará la función dechex*/

   for ($r = 0; $r <= 255; $r += 50) {
    for ($g = 0; $g <= 255; $g += 50) {
        for ($b = 0; $b <= 255; $b += 50) {

            /*Para poder imprimir los caracteres hexadecimales, necesitamos tener un minimo de dos caracteres
            de ahí a poner la condicion de que si la longitud es menor que 2 se añade un 0 a la izq*/
            $hexR = dechex($r);
            if (strlen($hexR) < 2) {
                $hexR = "0" . $hexR;
            }

            $hexG = dechex($g);
            if (strlen($hexG) < 2) {
                $hexG = "0" . $hexG;
            }

            $hexB = dechex($b);
            if (strlen($hexB) < 2) {
                $hexB = "0" . $hexB;
            }

            $colorHex = "#$hexR$hexG$hexB";

            echo "<div style='background-color:$colorHex; width:100px; height:30px; float:left; border:solid,black,2px'>$colorHex</div>";
        }
    }
}
    
    
    
?>
  

</body>
</html>
 