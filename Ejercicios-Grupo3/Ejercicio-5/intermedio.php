<?php


if(isset($_POST['enviar']))
{
    $listadoDeNumeros=$_POST['Numeros'];
    foreach ($listadoDeNumeros as $subIndice)
        {
            if(!is_numeric($subIndice))
                {
                    print("Ingrese los tres valores. Solo se permiten numeros");
                    exit();
                }
        }
    sort($listadoDeNumeros);
    print("El numero medio es " . $listadoDeNumeros[1]);	
        
}


?>