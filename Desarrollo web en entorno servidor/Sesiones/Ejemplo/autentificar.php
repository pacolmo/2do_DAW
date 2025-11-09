<?php
session_start();

    $_SESSION['id_usuario']=$_POST['usuario'];
    $_SESSION['id_apellido']=$_POST['apellido'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autentificar</title>
</head>
<body>
        <h2>¡Datos guardados!</h2>
        <h2> CONTINUAMOS CON LA PÁGINA WEB </h2>
         <a href="./final.php">Venga que ya estamos en el final del ejemplo</a>
</body>
</html>