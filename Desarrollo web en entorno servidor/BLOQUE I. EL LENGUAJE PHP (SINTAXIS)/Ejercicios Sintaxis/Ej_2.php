<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-2</title>
     <h1>Recorrer un Array</h1>

</head>
<body>
    <?php
    //
    $eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

    /*Este es un array asociativo, para reccorrerlo necesitamos un forEach con un for tradicional no se puede
    porque no tiene posiciones, si no claves(Nombres de los paises).*/

        foreach ($eu as $pais => $capital) {
            echo "La capital de  $pais es : $capital <br />";
        }
    ?>
</body>
</html>