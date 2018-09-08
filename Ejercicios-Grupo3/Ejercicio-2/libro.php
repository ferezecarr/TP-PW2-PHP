<?php

if(isset($_POST['buscar']) AND !empty($_POST['autor']))
{
    $autorBuscado = $_POST['autor'];
    $listadoCompleto= array(
            array(1,"A"),
            array(2,"B"),
            array(3,"C"),
            array(4,"D"),
            array(5,"C"),
            array(6,"F"),
            array(7,"G"));
    print("El autor " . $autorBuscado . " posee los libros numero:<br/>");
    for ($i=0; $i<7; $i++)
        { 
            if(strcasecmp($autorBuscado,$listadoCompleto[$i][1])==0)
                print($listadoCompleto[$i][0] . "<br/>");
        }
}

?>