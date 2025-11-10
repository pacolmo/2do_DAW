<?php
session_start();    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pag 2</h1>
    <h1>Hola otra vez <?php echo $_SESSION['usuario'];?></h1>
    <p>Coste acumulado: <?php echo $_SESSION['contador']; ?> €</p>

    <a href="./pag1.php">Volver a página 1</a><br>
    <a href="./login.php">Cerrar sesión</a>
</body>
</html>