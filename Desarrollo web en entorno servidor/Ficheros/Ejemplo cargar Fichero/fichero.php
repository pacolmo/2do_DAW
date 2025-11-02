<?php
$uploaddir = './';
$uploadfile = $uploaddir . basename($_FILES['fichero']['name']);


if (move_uploaded_file($_FILES['fichero']['tmp_name'], $uploadfile)) {
    echo "El fichero es válido, y ha sido cargado con éxito. Aquí hay más información :\n";
} else {
    echo "Ataque potencial por carga de ficheros. Aquí hay más información :\n";
}

echo 'Aquí hay algunas informaciones de depuración :';
print_r($_FILES);

echo '</pre>';

?>