    <?php

 if (isset($_POST["usuario"])) {

        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        echo "El usuario $usuario" . " con su clave $clave";
    }else{
        echo "Error, formulario no enviado";
    }

    /*Nivel 3: Validar formulario (Usando isset)
        ¿Qué pasa si un usuario entra a entrar.php directamente, sin rellenar el formulario? 
        Tu script actual dará un error porque $_POST['usuario'] no existirá.
        Objetivo: Modificar entrar.php para que primero compruebe si los datos fueron enviados antes de intentar usarlos.
        Tu Tarea:
        Modifica tu entrar.php.
        Usa la función isset() para comprobar si $_POST['usuario'] "existe". isset() devuelve true (verdadero) 
        si la variable ha sido enviada.
        Usa una estructura if... else... (Si... si no...):
        Si los datos fueron enviados (si isset es verdadero), muestra el mensaje de bienvenida como antes.
        Si no (bloque else), muestra un mensaje de error como: "Error: No has enviado el formulario".*/
    ?>