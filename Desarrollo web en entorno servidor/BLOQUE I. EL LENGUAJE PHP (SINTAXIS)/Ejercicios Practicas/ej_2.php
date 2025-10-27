<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-2</title>
</head>
<style>
    table{
        width: auto;
    }
    th,td{
        border: solid 2px black;
        padding: 15px;
        text-align: center;
    }
    th {
        background-color: #333; /* Encabezados más oscuros */
        color: white;
    }

</style>
<body>
    <?php
        /*2. Tabla de ciudades, comunidades y capitales
        Descripción: Crea un array asociativo con algunas comunidades de España, sus provincias y capitales.
        Qué mostrar:
        ● Una tabla HTML: Comunidad | Provincia | Capital
        ● Filas alternas con colores diferentes para mejor visualización
        Ejemplo:
        Comunidad    Provincia     Capital
        Andalucía     Sevilla      Sevilla */

        

        $comunidades = [
            ['Comunidad' =>'C. Valenciana','Provincia' => 'Valencia','Capital'=> 'Valencia'],
            ['Comunidad' => 'Cantabria', 'Provincia' => 'Cantabria' ,'Capital'=> 'Santander'],
            ['Comunidad' => 'Castilla y León', 'Provincia' => 'Valladolid' ,'Capital'=> 'Valladolid'],
            ['Comunidad' => 'Andalucía', 'Provincia' => 'Sevilla', 'Capital' => 'Sevilla'],
            ['Comunidad' => 'Madrid', 'Provincia' => 'Madrid', 'Capital' => 'Madrid']
        ];

        echo "<table>";
        echo "<tr><th>Comunidad</th><th>Provincia</th><th>Capital</th></tr>";

        foreach ($comunidades as $key=> $comunidad) {
            $colorAlterno = "";
            if ($key % 2 == 0) {
                 $colorAlterno = "style = 'background-color : lightgreen;'";
            }
            echo "<tr $colorAlterno>";
            echo "<td>" . $comunidad['Comunidad'] . "</td>";
            echo "<td>" . $comunidad['Provincia'] . "</td>";
            echo "<td>" . $comunidad['Capital'] . "</td>";
        }


        echo "</table>";

    ?>
    
</body>
</html>