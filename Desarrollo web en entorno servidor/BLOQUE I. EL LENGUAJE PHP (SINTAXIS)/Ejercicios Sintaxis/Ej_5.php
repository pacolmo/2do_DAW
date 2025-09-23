<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
      
    </style>
</head>
<body>
        <h1>Tabla de Multiplicar</h1>
        <table>
            <tr>
                <th> </th>
                
            </tr>
            
            <?php
            for ($columna = 1; $columna <= 10; $columna++) {
                    echo "<th>$columna</th>";
                }
            // Crear las filas de la tabla
            for ($fila = 1; $fila <= 10; $fila++) {
                echo "<tr>";
                // Encabezado de fila
                echo "<th>$fila</th>";
                
                // Calcular y mostrar los productos
                for ($columna = 1; $columna <= 10; $columna++) {
                    $producto = $fila * $columna;
                    echo "<td>$producto</td>";
                }
                
                echo "</tr>";
            }
            ?>
        </table>
  
</body>
</html>