<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: solid, 2.5px, black;
        width: 270px;
        height: 270px;
    }
    td{
        width: 30px;
        height: 30px;
        border : 1.5px solid black;
        
    }
</style>
<body>
    <table>

    
    <?php 
    for ($fila = 0; $fila < 9 ; $fila++) { 

        for ($columna=0; $columna < 9 ; $columna++) { 
            
           if (($fila + $columna) % 2 == 0 ) {
            $color ="white";
        }else{
            $color = "black";
        }
        echo "<td style = 'background: $color;'></td>";
        }
        echo "</tr>";
    }

?>
</table>
</body>
</html>
