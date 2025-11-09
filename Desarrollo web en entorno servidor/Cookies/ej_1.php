<?php
ob_start();

if (!isset($_COOKIE["Paco"])) {
     echo  "<div style ='whidth:50px;height:50px;background-color:red'>Bienvenido</div>";
    setcookie("Paco",time() + 10);
    print_r ($_COOKIE);

}else{
    echo "<div style= 'whidth:50px;height:50px;background-color:green'>Ya estas de vuelta</div>";
    print_r ($_COOKIE);
}



?>

