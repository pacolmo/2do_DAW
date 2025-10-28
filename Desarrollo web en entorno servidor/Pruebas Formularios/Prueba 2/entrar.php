    <?php

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    echo "El usuario $usuario" . " con su clave $clave";

    /*Nivel 2: El Formulario POST (El Mini-Login)
        Objetivo: Crear un formulario que envíe dos datos de forma oculta (como un login).

        Tu Tarea:
        Crea login.html (puedes hacer uno nuevo o modificar el index.html):
        Crea un formulario con method="post".
        Debe enviar los datos a entrar.php.
        Debe tener dos campos de texto:
        Uno para el usuario: name="usuario".
        Uno para la contraseña: name="clave" (Bonus: usa type="password").
        Debe tener un botón de enviar.
        Crea entrar.php:
        Este archivo debe coger los dos datos que vienen ocultos. 
        Debe mostrar en pantalla un mensaje como: "Hola [usuario], tu clave es [clave]". (¡Obviamente, nunca hagas esto en un sitio real!).
        Prueba y Fíjate:
        Cuando le des a "Enviar", mira la barra de direcciones. ¿Ves el usuario o la clave ahí? (No deberías). */
    ?>