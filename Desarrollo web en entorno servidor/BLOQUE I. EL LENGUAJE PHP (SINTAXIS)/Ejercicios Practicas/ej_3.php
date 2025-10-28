<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-3</title>
    <style>
        table{
            width: auto;
        }
       td,th{
        border: 2px solid #000;
        padding: 8px; 
        text-align: center; 
       }

    </style>
</head>
<body>
    <table>

    
    <?php
        /*3. Productos y precios
        Descripción: Crea un array asociativo con productos: nombre, categoría, precio.
        Qué mostrar:
        ● Tabla HTML con todos los productos
        ● Resalta productos con precio > 50€
        Ejemplo:
        Producto         Categoría           Precio
        Teclado          Electrónica          45
        Monitor          Electrónica         120
        Lápiz            Papelería            2 */

        $productos =[
            ['Nombre'=>'Teclado','Categoria'=>'Electrónica','Precio'=> 45],
            ['Nombre'=>'Monitor','Categoria'=>'Electrónica','Precio'=>120],
            ['Nombre'=>'Lapiz','Categoria'=>'Papeleria','Precio'=> 2],
            ['Nombre'=>'Taladro','Categoria'=>'Herramienta','Precio'=>90],
            ['Nombre'=>'Gauntes Boxeo','Categoria'=>'Deportes','Precio'=> 72]

        ];
       
        echo "<table>";
        echo "<tr><th>Producto</th><th>Categoria</th><th>Precio</th></tr>";

        foreach($productos as $producto) { 
        $precio = $producto['Precio'];
        $color= "";
        

            if ($precio > 50 ) {
                $color="style =' background-color: yellow;'";
            }
            
            echo "<tr $color>";
            echo "<td>" . $producto['Nombre']. "</td>";
            echo "<td>" . $producto['Categoria'] . "</td>";
            echo "<td>" . $producto['Precio'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>
    

</body>
</html>