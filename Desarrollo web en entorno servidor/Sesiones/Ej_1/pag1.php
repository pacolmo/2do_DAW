<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contador'] = 0;   

}else{
    $_SESSION['contador'] += 10;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P1</title>
</head>
<body>
    <h1>Pag 1</h1>
    <h2>Hola <?php echo $_SESSION['usuario'];?>!</h2>
        <p>Coste acumulado: <?php echo $_SESSION['contador']; ?> €</p>

    <a href="./pag2.php">Go to page 2</a>
    <a href="./login.php">Cerrar sesión</a>
</body>
</html>