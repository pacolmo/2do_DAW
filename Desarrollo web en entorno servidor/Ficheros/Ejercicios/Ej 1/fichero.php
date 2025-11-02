<?php
    $uploaddir = './';
    $uploadfile = $uploaddir . basename($_FILES['fichero']['name']);


if (move_uploaded_file($_FILES['fichero']['tmp_name'], $uploadfile)) {
    echo "El fichero es válido, y ha sido cargado con éxito. Aquí hay más información :<br>";
} else {
    echo "Ataque potencial por carga de ficheros. Aquí hay más información :\n";
}
    $dir = '/tmp';
    $files1 = scandir($dir);
    $files2 = scandir($dir,SCANDIR_SORT_DESCENDING);
    print_r($files1);
    print_r($files2);

    unlink('POO.png');
    unlink('ProgFuncional.png')
?>