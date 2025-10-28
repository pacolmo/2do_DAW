<?php
if (isset($_POST["boton"])) {
    
   if (isset($_POST["n1"],$_POST["n2"]) && !empty($_POST["n1"]) && !empty($_POST["n2"])) {
        $n1 = (int)$_POST["n1"];
        $n2 = (int)$_POST["n2"];
        $suma = $n1 + $n2;
        $resultado = $suma;
        echo "El resultado de la suma es : " . $resultado;
   }else{
    echo "Error, celda de num vacia";
   }
   
}
?>