<?php

print('<a href="/">Volver</a><br/>' . "\n");
for ($numero=1; $numero <= 20; $numero++) 
    { 
        print("\t<p>\n");
        for ($segundoNumero=25; $segundoNumero <= 30; $segundoNumero++) 
            { 
                print("\t" . $numero . " x " . $segundoNumero . "= " . $numero*$segundoNumero . "<br/>\n");
            }
        print("\t</p>\n");	
    }


?>