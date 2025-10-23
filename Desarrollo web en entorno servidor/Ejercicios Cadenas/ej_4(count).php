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
        
        $total_a = substr_count($frase,'a');
        $total_e = substr_count($frase,'e');
        $total_i = substr_count($frase,'i');
        $total_o = substr_count($frase,'o');
        $total_u = substr_count($frase,'u');

        $sumaVocales = $total_a + $total_e + $total_i + $total_o + $total_u;
        
    
        echo "Cantidad de vocal a : " . $total_a . "<br>";    
        echo "Cantidad de vocal e : " . $total_e . "<br>"; 
        echo "Cantidad de vocal i : " . $total_i . "<br>"; 
        echo "Cantidad de vocal o : " . $total_o . "<br>";
        echo "Cantidad de vocal u : " . $total_u . "<br>";  
        echo "Cantidad total de vocales" . $vocalesToLower;
    ?>
    
</body>
</html>