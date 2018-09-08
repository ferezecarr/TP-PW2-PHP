<?php

if(isset($_POST['enviar']))
			{
				$primerNumero	=	$_POST['primerNumero'];
				$segundoNumero	=	$_POST['segundoNumero'];
				$tercerNumero	=	$_POST['tercerNumero'];
				if(is_numeric($primerNumero) AND is_numeric($segundoNumero) AND is_numeric($tercerNumero))
					{
						$numeroMayor	=	$primerNumero;
						if($segundoNumero > $numeroMayor)	$numeroMayor=$segundoNumero;
						if($tercerNumero > $numeroMayor)	$numeroMayor=$tercerNumero;	
						print("El numero mas alto es: " . $numeroMayor);
					}
				else print("Ingrese los tres valores. Solo se permite numeros");	
			}

?>