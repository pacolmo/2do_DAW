<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Continentes y Países</title>
    <style>
        table { width: 200px; 
                margin-bottom: 20px; 
            }
        th, td { border: 1px solid #000;
             padding: 8px; 
             text-align: left; 
            }
        th { background-color:white; 
             color: black; 
        }
        
        img { width: 50px; 
              height: auto; 
        }
    </style>
</head>
<body>

<?php
$continentes = array(
    array("continente"=>"Europa", "paises"=>array(
        array("pais"=>"España", "capital"=>"Madrid", "bandera"=>"img/espana.png"),
        array("pais"=>"Reino Unido", "capital"=>"Londres", "bandera"=>"img/reinounido.png"),
        array("pais"=>"Suecia", "capital"=>"Estocolmo", "bandera"=>"img/suecia.png")
    )),
    array("continente"=>"América", "paises"=>array(
        array("pais"=>"Perú", "capital"=>"Lima", "bandera"=>"img/peru.png"),
        array("pais"=>"Canadá", "capital"=>"Ottawa", "bandera"=>"img/canada.png")
    )),
    array("continente"=>"África", "paises"=>array(
        array("pais"=>"Chad", "capital"=>"Yamena", "bandera"=>"img/chad.png"),
        array("pais"=>"Uganda", "capital"=>"Kampala", "bandera"=>"img/uganda.png")
    )),
    array("continente"=>"Asia", "paises"=>array(
        array("pais"=>"China", "capital"=>"Pekín", "bandera"=>"img/china.png"),
        array("pais"=>"Japón", "capital"=>"Tokio", "bandera"=>"img/japon.png")
    )),
    array("continente"=>"Oceanía", "paises"=>array(
        array("pais"=>"Australia", "capital"=>"Canberra", "bandera"=>"img/australia.png")
    ))
);
foreach ($continentes as $continente) {
    echo "<table>";
    echo  $continente["continente"];
    echo "<tr><th>País</th><th>Capital</th><th>Bandera</th></tr>";

    foreach ($continente["paises"] as $pais) {
        echo "<tr>";
        echo "<td>" . $pais["pais"] . "</td>";
        echo "<td>" . $pais["capital"] . "</td>";
        echo "<td><img src='" . $pais["bandera"] . "' alt='" . $pais["pais"] . "'></td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
