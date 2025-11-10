<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Bienvenido!!</h1>

    <form action="pag1.php" method="post">
        <label>Usuario: </label>
        <input type="text" name="usuario">
        <input type="submit" value="enviar"><br><br>
    </form>

</body>
</html>