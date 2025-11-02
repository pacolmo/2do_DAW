<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      div{
        margin-top: 10px;
        padding: 10px;
      }
      .btndel1{
        margin-top:10px;
        background-color: red;
      }
      .btndel2{
        margin-top: 10px;
        border-radius: 15px;
        background-color: orange;
      }
    </style>
</head>
<body>
  <form enctype="multipart/form-data" action="./fichero.php" method="post">
  Envíe este fichero: <input name="fichero" type="file" />
  <input type="submit" value="Enviar el fichero"/>

  <div class="botonesBorrar">
  <input type="button" value="borrar" class="btndel1">
  <br>
  <input type="button" value="borrar" class="btndel2">
  </div>

</body>
</html>