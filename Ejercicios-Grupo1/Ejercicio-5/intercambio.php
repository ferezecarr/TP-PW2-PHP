<?php

$a = 10;
$b = 20;
 
$c = $a;
$a = $b;
$b = $c;


echo "El valor de a es :" . $a;
echo "<br>" . "El valor de b es :" . $b;
echo "<br>" . "El valor de c es :"  . $c;


?>