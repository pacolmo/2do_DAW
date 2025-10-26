<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-1</title>
</head>
<style>
    table{
        width: auto;
    }
    th, td { 
        border: 2px solid #000;
        padding: 8px; 
        text-align: center; 
            }

</style>
<body>
    <?php
    /*1. Registro de alumnos y notas
    Descripción: Crea un array bidimensional con 5 alumnos y 3 asignaturas. 
    Cada fila del array tendrá: nombre del alumno, nota1, nota2, nota3.
    Qué mostrar:
    ● Una tabla HTML con: nombre, notas, media, estado (aprobado/suspenso).
    ● Resalta las medias ≥ 8 en verde.
    Ejemplo de tabla esperada:

    Alumno  Nota 1   Nota 2   Nota 3   Media    Estado
    Ana      7          8       9       8      Aprobado
    Luis     5          6       4       5      Aprobado
    Marta    3          4       2       3      Suspenso */

$alumnos = [
        ['nombre'=> 'Paco','nota1'=> 7,'nota2'=> 8,'nota3'=> 9],
        ['nombre'=> 'Ro','nota1'=> 5,'nota2'=> 6,'nota3'=> 4],
        ['nombre'=> 'Jor','nota1'=> 7,'nota2'=> 3,'nota3'=> 9],
        ['nombre'=> 'Ruru','nota1'=> 2,'nota2'=> 10,'nota3'=> 4],
        ['nombre'=> 'Cristian','nota1'=> 6,'nota2'=> 6,'nota3'=> 6],
        ['nombre'=> 'Marta','nota1'=> 3,'nota2'=> 4,'nota3'=> 2] // Añadido para ver un suspenso
    ];
   
        echo "<table>";
        echo "<tr><th>Alumno</th><th>Nota 1</th><th>Nota2</th><th>Nota 3</th><th>Media</th><th>Estado</th></tr>";
    foreach ($alumnos as $alumno) {
        $colorMedia = 0;
        $suma = $alumno['nota1'] + $alumno['nota2'] + $alumno['nota3'];
        $media = $suma / 3;
         
        if ($media >= 5) {
            $estado = "Aprobado";
        }else{
            $estado = "Suspendido";
        }
        //color
               
            if ($media >= 8) {

                $colorMedia = "style ='background-color: lightgreen;'";            
                }
            
                echo "<tr>";
                echo "<td>" . $alumno['nombre'] . "</td>";
                echo "<td>" . $alumno['nota1'] . "</td>";
                echo "<td>" . $alumno['nota2'] . "</td>";
                echo "<td>" . $alumno['nota3'] . "</td>";
                echo "<td $colorMedia>" . $media . "</td>";
                echo "<td>" . $estado . "</td>";
                echo "</tr>";
                
        }

        echo "</table>";
    

    ?>
    
</body>
</html>