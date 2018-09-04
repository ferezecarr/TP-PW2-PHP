<?php

$bmenor = $_REQUEST['basemenor'];
$bmayor= $_REQUEST['basemayor'];
$altura = $_REQUEST['altura'];
$resultado = $altura * ($bmenor + $bmayor)/2;
echo "El área del Trapecio es: " . $resultado . " m2";

?>