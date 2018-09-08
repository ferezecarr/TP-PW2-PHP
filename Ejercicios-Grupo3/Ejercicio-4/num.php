<?php

if(isset($_POST['enviar']))
			{
				$primerNumero	=	$_POST['primerNumero'];
				$segundoNumero	=	$_POST['segundoNumero'];
				$tercerNumero	=	$_POST['tercerNumero'];
				if(is_numeric($primerNumero) AND is_numeric($segundoNumero) AND is_numeric($tercerNumero))
					{
						$numeroMenor	=	$primerNumero;
						if($segundoNumero < $numeroMenor)	$numeroMenor=$segundoNumero;
						if($tercerNumero < $numeroMenor)	$numeroMenor=$tercerNumero;	
						print("El numero mas bajo es: " . $numeroMenor);
					}
				else print("Ingrese los tres valores. Solo se permite numeros");	
			}


?>