<?php
session_start();

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Variables para mensajes
$mensaje = "";

// ----- BORRAR TODO -----
if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: carrito.php");
    exit;
}

// ----- AÑADIR PRODUCTO -----
if (isset($_POST['add'])) {
    $producto = trim($_POST['producto']);
    $precio = trim($_POST['precio']);
    $cantidad = trim($_POST['cantidad']);

    if ($producto == "" || $precio == "" || $cantidad == "") {
        $mensaje = "<p style='color:red;'>⚠️ Debes rellenar todos los campos</p>";
    } else {
        // Si el producto ya existe, aumentar cantidad
        if (isset($_SESSION['carrito'][$producto])) {
            $_SESSION['carrito'][$producto]['cantidad'] += $cantidad;
        } else {
            $_SESSION['carrito'][$producto] = [
                'precio' => $precio,
                'cantidad' => $cantidad
            ];
        }
    }
}

// ----- BORRAR UN PRODUCTO -----
if (isset($_GET['borrar'])) {
    $productoBorrar = $_GET['borrar'];
    unset($_SESSION['carrito'][$productoBorrar]);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de compra</title>
</head>
<body>
    <h1>🛒 Carrito de Compra</h1>

    <!-- Formulario de añadir producto -->
    <form method="post">
        <label>Producto:</label>
        <input type="text" name="producto">
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01">
        <label>Cantidad:</label>
        <input type="number" name="cantidad">
        <input type="submit" name="add" value="Añadir">
        <input type="submit" name="reset" value="Reset">
    </form>

    <?php echo $mensaje; ?>

    <hr>

    <h2>Contenido del carrito:</h2>

    <?php if (empty($_SESSION['carrito'])): ?>
        <p>🕳️ El carrito está vacío.</p>
    <?php else: ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>Producto</th>
                <th>Precio (€)</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Borrar</th>
            </tr>
            <?php
            $totalGeneral = 0;
            foreach ($_SESSION['carrito'] as $nombre => $datos) {
                $total = $datos['precio'] * $datos['cantidad'];
                $totalGeneral += $total;
                echo "<tr>
                        <td>$nombre</td>
                        <td>{$datos['precio']}</td>
                        <td>{$datos['cantidad']}</td>
                        <td>$total</td>
                        <td><a href='?borrar=$nombre'>❌</a></td>
                      </tr>";
            }
            echo "<tr>
                    <td colspan='3'><strong>Total general</strong></td>
                    <td colspan='2'><strong>$totalGeneral €</strong></td>
                  </tr>";
            ?>
        </table>
    <?php endif; ?>

</body>
</html>
