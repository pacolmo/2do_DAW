<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Final</title>
</head>
<body>
    <h2>ya estamos en el final</h2>

    <?php
        echo "El usuario : ". $_SESSION['id_usuario'];
        echo "<br>";
        echo "El apellido: ". $_SESSION['id_apellido'];
        ?>
        <br><br>
        <a href="./borrar.php">Vamos a borrar algunas variables sesión</a>
</body>
</html>

          