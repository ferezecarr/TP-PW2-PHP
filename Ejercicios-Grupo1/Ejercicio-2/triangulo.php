<?php

extract($_REQUEST, EXTR_SKIP); //Extrayendo los imputs del formulario

$result = ($base * $altura) /2;
echo "El resultado es : " . $result;


?>