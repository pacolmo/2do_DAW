<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario y Vectores</title>
    <style>
        form { border: 1px solid #ccc;
            padding: 20px;
            width: 500px;
        
        }
    </style>
</head>
<body>

    <h1>Formulario y Vectores</h1>

    <form action="" method="post">
        
        <p>Introduce 10 números:</p>

        <?php
        // 2. Generamos los 10 inputs con un bucle for
        //Todos se llaman "numeros[]" para que PHP los reciba como un array
        for ($i = 0; $i < 10; $i++) {
            echo '<input type="number" name="numeros[]">';
        }
        ?>

        <input type="submit" name="boton" value="Enviar y Sumar">
    </form>

    <hr>

    <?php
    // Comprobamos si el formulario fue enviado
    if (isset($_POST['boton'])) {

        echo "<h2>Resultados</h2>";

        // 4. Recogemos el array de números
        // Comprobamos que realmente 'numeros' existe y es un array
        if (isset($_POST['numeros']) && is_array($_POST['numeros'])) {
            
            $numerosRecibidos = $_POST['numeros'];
            $sumaTotal = 0;

            echo "<p>Datos recibidos:</p>";
            

            // 5. Mostramos cada dato y lo sumamos
            foreach ($numerosRecibidos as $numero) {
                
                // Limpiamos el dato (convertimos a int y usamos htmlspecialchars)
                // (int) convierte "" (vacío) a 0, lo cual es útil para la suma.
                $numLimpio = (int)$numero;
                
                echo "<li>Número: " . htmlspecialchars($numLimpio) . "</li>";
                
                $sumaTotal = $sumaTotal + $numLimpio;
            }

            echo "<h3>Suma Total: $sumaTotal</h3>";

        } else {
            echo "<p>No se recibieron datos.</p>";
        }
    }
    ?>

</body>
</html>