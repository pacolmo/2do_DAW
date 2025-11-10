<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

$mensaje = "";

// Si se ha enviado un producto
if (isset($_POST['add'])) {
    $producto = trim($_POST['producto']);
    $cantidad = trim($_POST['cantidad']);

    if ($producto == "" || $cantidad == "") {
        $mensaje = "<p style='color:red;'>⚠️ Debes rellenar todos los campos</p>";
    } else {
        // Si el producto ya existe, sumamos la cantidad
        if (isset($_SESSION['carrito'][$producto])) {
            $_SESSION['carrito'][$producto] += $cantidad;
        } else {
            $_SESSION['carrito'][$producto] = $cantidad;
        }
    }
}

// Si se pulsa borrar un producto
if (isset($_GET['borrar'])) {
    $productoBorrar = $_GET['borrar'];
    unset($_SESSION['carrito'][$productoBorrar]);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 1</title>
</head>
<body>
    <h1>Carrito de la compra</h1>

    <?php echo $mensaje; ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Borrar</th>
        </tr>

        <?php
        if (empty($_SESSION['carrito'])) {
            echo "<tr><td colspan='3'>Carrito vacío</td></tr>";
        } else {
            foreach ($_SESSION['carrito'] as $nombre => $cant) {
                echo "<tr>
                        <td>$nombre</td>
                        <td>$cant</td>
                        <td><a href='?borrar=$nombre'>X</a></td>
                      </tr>";
            }
        }
        ?>
    </table>

    <br>
    <a href="login.php">Volver a inicio</a><br>
    <a href="pag2.php">Ir a página 2</a>
</body>
</html>