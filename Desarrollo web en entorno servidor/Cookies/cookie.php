<?php

setcookie("Paco", 1, time() + 10);    

unset($_COOKIE["Paco"]);

print_r($_COOKIE["Paco"]);  
echo "<br>";

?>