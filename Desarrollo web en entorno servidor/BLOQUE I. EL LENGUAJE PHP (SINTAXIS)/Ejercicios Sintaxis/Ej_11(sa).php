<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-11</title>
</head>
<body>
    <?php
    /*=PAISES=
    Dado el siguiente array se tratará de mostrar los paises de algunos continentes y sus banderas.*/

$continentes = array(
array("continente"=>"Europa", "paises"=>array(array("pais"=>"España", "capital"=>"Madrid", "bandera"=>"img/espana.png"), array("pais"=>"Reino Unido", "capital"=>"Londres", "bandera"=>"img/reinounido.png"), array("pais"=>"Suecia", "capital"=>"Estocolmo", "bandera"=>"img/suecia.png"))),
array("continente"=>"América", "paises"=>array(array("pais"=>"Perú", "capital"=>"Lima", "bandera"=>"img/peru.png"), array("pais"=>"Canadá", "capital"=>"Ottawa", "bandera"=>"img/canada.png"))),
array("continente"=>"África", "paises"=>array(array("pais"=>"Chad", "capital"=>"Yamena", "bandera"=>"img/chad.png"), array("pais"=>"Uganda", "capital"=>"Kampala", "bandera"=>"img/uganda.png"))),
array("continente"=>"Asia", "paises"=>array(array("pais"=>"China", "capital"=>"Pekín", "bandera"=>"img/china.png"), array("pais"=>"Japón", "capital"=>"Tokio", "bandera"=>"img/japon.png"))),
array("continente"=>"Oceanía", "paises"=>array(array("pais"=>"Australia", "capital"=>"Canberra", "bandera"=>"img/australia.png")))
);

    foreach ($continentes as $continente) {
        echo "<table>";
        echo $continente["continente"];
        echo "<tr><th>Pais</th><th>Capital</th><th>Bandera</th></tr>";
        foreach ($continente["paises"] as $pais) {
            echo "<tr>";
            echo "<td style = 'border:solid black 1.5px;'>". $pais["pais"] . "</td>";
            echo "<td style = 'border:solid black 1.5px;'>". $pais["capital"] . "</td>";
            echo "<td style = 'border:solid black 1.5px;'>" . "<img src= '" . $pais["bandera"]  . "'></td>";
            echo "</tr>";
        }
        echo "</table>";
    }


    ?>
</body>
</html>
</body>
</html>