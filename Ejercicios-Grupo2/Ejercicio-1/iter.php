<?php

if(isset($_POST['enviar']))
			{
				$numero=$_REQUEST['numero'];
				if(is_numeric($numero))
					{
						calculoNumero($numero);	
					}					
				else print("Ingrese un numero por favor");					
			}
		function calculoNumero($numero)
			{
				print("\n<br/>Valor ingresado = " . $numero . "<br/>\n");
				for ($nuevoNumero=1; $nuevoNumero<=$numero; $nuevoNumero++) 
					{ 
						print(	"Iteracion = " . $nuevoNumero . " - " .
								"Valor = " . $numero*$nuevoNumero . 
								"<br/>\n");
					}				
			}	


?>