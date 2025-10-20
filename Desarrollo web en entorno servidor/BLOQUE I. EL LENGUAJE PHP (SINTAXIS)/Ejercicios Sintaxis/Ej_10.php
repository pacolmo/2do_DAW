<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-10</title>
</head>
<style>
    
    </style>
<body>
    <?php
        /*Dado el siguiente array se tratará de visualizar todas las provincias (falta algunas), 
        aquellas menores de 500 rayos se mostrará en verde y de color rojo cuando sean mayores,
        también deberá mostrarse el total acumulado.*/

        $comunidades = array(
            array("comunidad" => "Andalucía", "provincias" => array("Córdoba" => 7223, "Huelva" => 1611, "Cádiz" => 480, "Sevilla" => 12990, "Málaga" => 16458, "Granada" => 8622, "Jaén" => 322, "Almería" => 8266)),
            array("comunidad" => "Aragón", "provincias" => array("Huesca" => 251, "Teruel" => 1633, "Zaragoza" => 2512)),
            array("comunidad" => "Asturias", "provincias" => array("Oviedo" => 256)),
            array("comunidad" => "Baleares", "provincias" => array("Baleares" => 503)),
            array("comunidad" => "Canarias", "provincias" => array("Santa Cruz de Tenerife" => 153, "Las Palmas de Gran Canaria" => 2451)),
            array("comunidad" => "Cantabria", "provincias" => array("Santander" => 6511)),
            array("comunidad" => "Castilla La-Mancha", "provincias" => array("Albacete" => 121, "Ciudad Real" => 4241, "Cuenca" => 221, "Guadalajara" => 3211, "Toledo" => 4211)),
            array("comunidad" => "Castilla y León", "provincias" => array("León" => 231, "Zamora" => 5231, "Salamanca" => 2311, "Valladolid" => 231, "Palencia" => 7621, "Ávila" => 321, "Segovia" => 251, "Burgos" => 5321, "Soria" => 1251)),
            array("comunidad" => "Cataluña", "provincias" => array("Barcelona" => 19240, "Gerona" => 11535, "Lérida" => 6052, "Tarragona" => 255)),
            array("comunidad" => "Extremadura", "provincias" => array("Cáceres" => 3405, "Badajoz" => 210)),
            array("comunidad" => "Galicia", "provincias" => array("A Coruña" => 1512, "Ourense" => 1612, "Lugo" => 1930, "Pontevedra" => 124)),
            array("comunidad" => "Madrid", "provincias" => array("Madrid" => 248000)),
            array("comunidad" => "Murcia", "provincias" => array("Murcia" => 2100)),
            array("comunidad" => "Navarra", "provincias" => array("Pamplona" => 19587)),
            array("comunidad" => "Comunidad Valenciana", "provincias" => array("Valencia" => 19587, "Alicante" => 5342, "Castellon" => 466)),
            array("comunidad" => "País Vasco", "provincias" => array("Bilbao" => 124, "San Sebastián" => 8124, "Vitoria" => 259)),
            array("comunidad" => "La Rioja", "provincias" => array("Logroño" => 1081)));

             foreach ($comunidades as  $region) {
                echo "<br>" . $region["comunidad"];
             
                echo "<br>";
            $provincias = $region["provincias"];
                echo "<div style = 'background-color:blue; width= 200px'>$region</div>";
                
                foreach ($region["provincias"] as $ciudad => $rayos) {

                    if($rayos < 500){
                        print_r("<div style ='background-color:red;width=400px'>$ciudad -> $rayos</div>");
                    }else if($rayos > 500){
                        echo "<div style = 'background-color:green;width = 400px'>$ciudad ->$rayos</div>";
                    }

                }
            }
           
            ?>
    
</body>
</html>

