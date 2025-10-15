<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-9</title>
</head>
<body>
    <?php
        /*=ARRAY BIDIMENSIONAL PERSONAS=
        Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas.
        Para ello, crea un array de personas, siendo cada persona un array asociativo.*/

          $persona1 = ["Nombre" => "Paco ","Altura" => 1.83,"Email" => "fraolmseg@"];
          $persona2 = ["Nombre" => "Jorge ","Altura" => 1.85,"Email" =>"jorgeolmo@"];
          $persona3 = ["Nombre" => "Ruru ","Altura" => 1.88,"Email" => "rualca@"];
          $persona4 = ["Nombre" => "David ","Altura" => 1.64,"Email" =>"dmartimas@"];
          $persona5 = ["Nombre" => "Ro ","Altura" => 1.66,"Email" => "rocioAldaia@"];
            
           $personas = [$persona1,$persona2,$persona3,$persona4,$persona5];
            foreach ($personas as $p ) {
               
                foreach ($p as $info => $datos) {
                    echo " $info : $datos<br>";
                }
                echo "<hr>";
            }  
    ?>
    
</body>
</html>