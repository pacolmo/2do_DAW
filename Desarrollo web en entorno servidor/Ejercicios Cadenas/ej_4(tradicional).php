<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*A partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas.
        Hacedlo de forma tradicional y usando substr_count.t*/

        $frase = "Ejercicio cuarto de cadenas";
        $vocalesToLower = strtolower($frase);
        $longitudVocalesToLower = strlen($vocalesToLower);
        //crear los contadores
        $total_a = 0;
        $total_e = 0;
        $total_i = 0;
        $total_o = 0;
        $total_u = 0;
        //obtenemos la letra recorriendo el bucle
        for ($i=0; $i < $longitudVocalesToLower; $i++) { 
              $letra = $vocalesToLower[$i];

              //incrementamos cada letra y añadimos a la variable
              switch ($letra) {
                case 'a':
                    $total_a++;
                    break;
                case 'e':
                    $total_e++;
                    break;
                case 'i':
                    $total_i++;
                    break;
                case 'o':
                    $total_o++;
                    break;
                case 'u':
                    $total_u++;
                    break;
                
                default:
                    break;
              }
            
        }
        
        $sumaVocales = $total_a + $total_e + $total_i + $total_o + $total_u;
        echo "Cantidad de vocal a : " . $total_a . "<br>";    
        echo "Cantidad de vocal e : " . $total_e . "<br>"; 
        echo "Cantidad de vocal i : " . $total_i . "<br>"; 
        echo "Cantidad de vocal o : " . $total_o . "<br>";
        echo "Cantidad de vocal u : " . $total_u . "<br>"; 
        echo "La suma de las vocales, es: " . $sumaVocales;
    ?>
    
</body>
</html>