    <?php
    if (isset($_POST["boton"])) {
        
        echo "Resultados del formulario: <br> ";

    if (isset($_SERVER["HTTP_REFERER"])) {
        echo "Formulario enviado desde : " . htmlspecialchars($_SERVER["HTTP_REFERER"]);
    }else{
        echo "<strong>HTTP REFERER  no disponible</strong>";
    }

    echo "<hr>";

    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($_POST["nombre"]) . "</p>";
    echo "<p><strong>Apellido:</strong> " . htmlspecialchars($_POST["apellido"]) . "</p>";
    echo "<p><strong>Rol:</strong> " . htmlspecialchars($_POST["Persona"]) . "</p>";
    
    //Condición para genero
    if (isset($_POST["genero"])&& !empty($_POST["genero"]) ) {
       echo "<p><strong>Genero:</strong> " . htmlspecialchars($_POST["genero"]) . "</p>"; 
    }else{
        echo "Error, Genero no seleccionado";
    }

    //Condición para edad
    if (isset($_POST["Edad"]) && !empty($_POST["Edad"])) {
            echo "<p><strong>Edad:</strong> " . htmlspecialchars($_POST["Edad"]) . "</p>"; 
        }else{
            echo "<p><strong>Edad:</strong> No introducida</p>"; // Mensaje más limpio
        }

    // Checkboxes (como es un array, usamos 'implode' para mostrarlo)
    if (isset($_POST["actividad"]) && is_array($_POST["actividad"])) {
        $actividades = implode(", ", $_POST["actividad"]);
        echo "<p><strong>Actividades:</strong> " . htmlspecialchars($actividades) . "</p>";
    } else {
        echo "<p><strong>Actividades:</strong> Ninguna seleccionada</p>";
    }

    }else{
        echo "El formulario no ha sido enviado";
    }
   
    ?>