<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-1</title>
    <h1>Mostrar datos de una tabla</h1>

   <style>
    table{
       width:auto;

    }
    th,td{
        border: 1.5px solid #0f0c0cff;
        padding : 10px;
        text-align: left;
    }

   </style>
   
<body> 
     <?php 
    /*Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido, email, año de nacimiento y teléfono.
    Luego muéstralos por pantalla dentro de una tabla.*/
    
    $nombre = "Paco";
    $apellido = "Olmo";
    $email = "@fraolmseg";
    $añoNacimiento = 1989;
    $numTelefono = 650062059;
    ?>

  <table>
        <tr>
        <td>Nombre</td>
        <td><?php echo $nombre; ?></td>
    </tr>
    <tr>
        <td>Apellido</td>
        <td><?php echo $apellido; ?></td>
    </tr>
    <tr>
       <td>Email</td> 
       <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td>Año de nacimiento</td>
        <td><?php echo $añoNacimiento; ?></td>
    </tr>
    <tr>
        <td>Número de teléfono</td>
        <td><?php echo $numTelefono; ?></td>
    </tr>
    
    </table>
            
</head>

</body>
</html>