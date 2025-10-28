<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        form{
            border: solid, 3px black;
            height: auto;
            width: 300px;
            padding: 10px;
            margin-top: 15px;
        }
        #btn{
            margin-left: 15px;
            border-color: red 1.5px;
            background-color: red;
        }
    </style>
</head>
<body>

<form action="ej_2_post.php" method="post">
<input type="number" name="n1">
<input type="number" name="n2">
<input type="submit" name="boton" value="Enviar" id="btn">
    
</form>
</body>
</html>