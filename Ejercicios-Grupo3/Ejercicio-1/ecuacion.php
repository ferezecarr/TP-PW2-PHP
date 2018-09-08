<?php

if(isset($_POST['calcular']))
{
    $x=$_POST['x'];
    $b=$_POST['b'];
    if(is_numeric($x) AND is_numeric($b))
        print("Resultado: " . ( pow($x, 2) + (2*$x) + $b) );
    else print("Ingrese los dos numeros.");			
}

?>