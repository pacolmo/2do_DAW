<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tablero sencillo</title>
  <style>
    td {
        width:30px; 
        height:30px; 
        border:1px solid,black;
    }
    table{
        border: 2.5px solid,black;
        width: 270px;
        height: 270px;
    }
  </style>
</head>
<body>
  <table>
    <?php
      for ($fila = 0; $fila < 9; $fila++) {
        echo "<tr>";
        for ($columna = 0; $columna < 9; $columna++) {
          // si la suma de fila+col es par → claro, si es impar → oscuro
          if ( ($fila + $columna) % 2 == 0 ) {
            $color = "white";
          } else {
            $color = "black";
          }
          // aplicamos el color aquí
          echo "<td style='background:$color;'></td>";
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
