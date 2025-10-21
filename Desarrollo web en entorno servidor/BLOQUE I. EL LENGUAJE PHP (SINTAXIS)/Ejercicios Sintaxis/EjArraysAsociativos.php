<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Uso de arrays Asociativos</title>
    <style>
       
    </style>
</head>
<body>

<?php
//Array de una sola persona: 
$persona = [
    "nombre" => "Paco","edad" => 30,"email" => "paco@example.com"];

    foreach ($persona as $datos => $resultados) {
        echo "$datos :  $resultados <br>";
    }
    echo "<br>------------------------<br>";

/*-----------------------------------------------------------*/
//Array de varias personas: 
$personas = [
    ["nombre" => "Paco", "edad" => 30, "email" => "paco@example.com"],
    ["nombre" => "Jorge", "edad" => 25, "email" => "jorge@example.com"],
    ["nombre" => "Rocío", "edad" => 28, "email" => "rocio@example.com"]
];

foreach ($personas as $persona) {

 foreach ($persona as $dato => $resultado) {
    echo  "$dato: $resultado  <br>";
    
  }
  echo  "<hr>";
  
 }
     echo "<br>------------------------<br>";


 /*-----------------------------------------------------------*/
 //Array tridimensional
$personasPorCiudad = [
    "Madrid" => [
        ["nombre" => "Paco", "edad" => 30, "email" => "paco@example.com"],
        ["nombre" => "Rocío", "edad" => 28, "email" => "rocio@example.com"]
    ],
    "Valencia" => [
        ["nombre" => "Jorge", "edad" => 25, "email" => "jorge@example.com"],
        ["nombre" => "Laura", "edad" => 32, "email" => "laura@example.com"]
    ],
    "Sevilla" => [
        ["nombre" => "María", "edad" => 29, "email" => "maria@example.com"]
    ]
];

    foreach ($personasPorCiudad as $ciudad => $personas) {
        
        echo "Ciudad : $ciudad <br>";
        foreach ($personas as $persona) {
            
            foreach ($persona as $datos => $value) {
                echo " $datos :  $value <br>";
            }
            echo "<hr>";
        }
           
    } 
    echo "<br>------------------------<br>";

?>

</body>
</html>
