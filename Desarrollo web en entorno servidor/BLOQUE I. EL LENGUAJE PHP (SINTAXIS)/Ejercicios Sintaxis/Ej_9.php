<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-9</title>
</head>
<style>
    table{
        border: solid black 1.5px;
        height: auto;
        width: auto;
        border-collapse: collapse;
        text-align: center;
    }
    
        th, td {
            border: 1px solid black;
            padding: 10px;
        }

    </style>
<body>
    <table>

    <tr>
        <th>Nombre</th>
        <th>Altura</th>
        <th>Mail</th>
        <th>Num</th>
    </tr>

    <?php
        /*=ARRAY BIDIMENSIONAL PERSONAS=
        Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas.
        Para ello, crea un array de personas, siendo cada persona un array asociativo:
        [ ['nombre'=>'Bruce', 'apellido'=>'Wane', 'ciudad'=>'Gotham'],[…],… ].
         Posteriormente, recorre el array y muéstralo en una tabla HTML, también sería interesante 
         mostrar en cada array persona cuántos campos existen.*/

          $persona1 = ["Nombre" => "Paco ","Altura" => 1.83,"Email" => "fraolmseg@"];
          $persona2 = ["Nombre" => "Jorge ","Altura" => 1.85,"Email" =>"jorgeolmo@"];
          $persona3 = ["Nombre" => "Ruru ","Altura" => 1.88,"Email" => "rualca@"];
          $persona4 = ["Nombre" => "David ","Altura" => 1.64,"Email" =>"dmartimas@"];
          $persona5 = ["Nombre" => "Ro ","Altura" => 1.66,"Email" => "rocioAldaia@"];
            
           $personas = [$persona1,$persona2,$persona3,$persona4,$persona5];
            foreach ($personas as $persona) {
               echo "<tr>";
                foreach ($persona as $datos) {
                    echo "<td>$datos</td>";
                }
                echo "<td>" . count($persona) . "</td>";
                echo "</tr>";
            }  
    ?>

    </table>
</body>
</html>