<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
</head>
<body>
   
    <form action="ej_1_recibir.php" method="post">

        Nombre:   <input type="text" name ="nombre" id=""><br>
        Apellido: <input type="text" name ="apellido" id=""><br>
        Pass:     <input type ="password" name ="contraseña" id =""><br>
        <br><br>

        <select name="Persona">
                <option value="alumno">Alumno</option>
                <option value="profesor">Profesor</option>
                <option value="alumno" selected></option>
        </select>

        <br><br>
        <input type ="checkbox" name = "actividad[]" value="Grappling"/>Grappling<br>
        <input type ="checkbox" name = "actividad[]" value="Boxeo"/>Boxeo<br>
        <input type ="checkbox" name = "actividad[]" value="Padel"/>Padel<br>
        <input type ="checkbox" name = "actividad[]" value="Ciclismo"/>Ciclismo<br>
        <br><br>
        <input type = "radio" name ="genero" value= "M"/>M<br> 
        <input type = "radio" name ="genero" value= "F"/>F<br>
        <br><br>
        <label for = "cantidad"> Edad (entre 18 y 99): </label>
        <input type = "number" id="cantidad" min= "18" max = "99" name ="Edad"/><br> 
        <br><br>
        <input type = "color" name= "color"/><br>
        <br><br>
        <textarea name="comentarios" id="">Comentarios...</textarea>
        <br><br>
        <input type="hidden" name="oculto" value="prueba">
        
        <input type="submit" name ="boton" value = "enviar">

    </form>

</body>
</html>