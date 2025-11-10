<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de la compra</title>
</head>
<body>
    <h1>Su cesta de la compra</h1>

    <form action="pag1.php" method="post">
        <input type="text" name="producto" placeholder="Producto">
        <input type="number" name="cantidad" placeholder="Cantidad">
        <input type="submit" name="add" value="Añadir">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>
