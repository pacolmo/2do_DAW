<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-4 Tabla de Colores</title>
    <style>
        table {
            border-collapse: collapse; /* Bordes limpios */
        }
        td {
            border: 1px solid #555;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            font-family: monospace; /* Para que los números se vean bien */
        }
    </style>
</head>
<body>

    <h2>4. Tabla de Colores 5x5</h2>

    <table>
        <?php
        /*4.Tabla de colores
        Descripción: Crea una tabla HTML de 5x5 donde cada celda tenga un color diferente 
        (puede ser un degradado simple).
        Qué mostrar:
        ● La celda muestra el código RGB
        ● Filas con degradado de color

        Ejemplo:
        R,G,B       R,G,B         R,G,B        R,G,B        R,G,B
        255,0,0    255,51,0    255,102,0    255,153,0    255,204,0  */
        
        // 1. Bucle exterior para las FILAS (controla el ROJO)
        for ($i = 0; $i < 5; $i++) {
            
            // Empezamos una nueva fila
            echo "<tr>";

            // 2. Bucle interior para las CELDAS (controla el VERDE)
            for ($j = 0; $j < 5; $j++) {
                
                // 3. Calculamos los colores
                // Dividimos 255 entre 4 (los pasos 0, 1, 2, 3, 4)
                $red = round($i * (255 / 4));
                $green = round($j * (255 / 4));
                $blue = 0;

                // 4. Creamos el texto que se mostrará
                $rgb_texto = "$red, $green, $blue";
                
                // 5. Creamos el estilo CSS para el fondo
                $estilo_css = "background-color: rgb($rgb_texto);";

                // 6. (Extra) Cambiamos el color del texto si el fondo es muy oscuro
                if (($red + $green + $blue) < 250) {
                    $estilo_css .= " color: white;";
                }

                // 7. Imprimimos la celda (td) con su estilo y texto
                echo "<td style='$estilo_css'>$rgb_texto</td>";
            }
            
            // Cerramos la fila
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>


