<?php

    $termino = $_GET["termino"];
     echo "Estas buscando la palabra : $termino";

     /*Nivel 1: El Formulario GET (La Búsqueda)
        Objetivo: Crear un formulario que envíe un término de búsqueda y ver cómo ese término aparece en la URL.

        Tu Tarea:

        Crea index.html:
        Debe tener un formulario 
        El método debe ser method="get".
        Debe enviar los datos a un archivo llamado buscar.php (action="buscar.php").
        Debe tener un campo de texto (<input type="text">).
        Ese campo debe tener la etiqueta name="termino".
        Debe tener un botón de enviar (<input type="submit">).
        Crea buscar.php:
        Este archivo debe "coger" el dato que viene por la URL. 
        Luego, debe mostrar en pantalla un mensaje simple, como: "Estás buscando la palabra: [aquí la palabra que el usuario escribió]".
        Prueba y Fíjate:
        Cuando le des a "Enviar", mira la barra de direcciones de tu navegador. ¿Ves tu palabra de búsqueda ahí?*/
?>