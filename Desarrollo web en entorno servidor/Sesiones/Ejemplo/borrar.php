<?php
session_start();
    unset($_SESSION['id_usuario']);
        ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrando Sesión</title>
</head>
<body>
        <h2>BORRANDO VARIABLES </h2>
            <?php
                echo "El usuario es: ";
                
                if (isset($_SESSION['id_usuario'])) {
                    echo htmlspecialchars($_SESSION['id_usuario']);
                } else {
                    echo "[BORRADO]"; // Como la borramos arriba, mostrará esto
                }
                
                echo "<br>";
                echo "El apellido es : " . htmlspecialchars($_SESSION['id_apellido']);
            ?>
</body>
</html>