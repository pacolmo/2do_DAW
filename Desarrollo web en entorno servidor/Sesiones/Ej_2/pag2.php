<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2</title>
</head>
<body>
    <h1>Resumen del carrito</h1>

    <?php
    if (empty($_SESSION['carrito'])) {
        echo "<p>El carrito está vacío.</p>";
    } else {
        echo "<ul>";
        foreach ($_SESSION['carrito'] as $nombre => $cantidad) {
            echo "<li>$nombre → $cantidad unidades</li>";
        }
        echo "</ul>";
    }
    ?>

    <a href="pag1.php">Volver a página 1</a><br>
    <a href="login.php">Página principal (Reset)</a>
</body>
</html>
