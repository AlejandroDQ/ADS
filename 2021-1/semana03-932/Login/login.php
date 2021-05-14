<!DOCTYPE html>
<html>
	<head>
	
	</head>
	
	<body>	
		<?php
			global $respuesta;
			$nickname = $_POST["usr"];
			$password = $_POST["pass"];
		
			/*Los datos para el enlace son: ServidorBD, usuarioBD, passBD, nombreBD*/
			$enlaceBD = mysqli_connect("localhost","root","","thanis");
			$sentenciaSQL = "SELECT * FROM usuarios WHERE nickname='$nickname' and password='$password';";
			$resultado = mysqli_query($enlaceBD,$sentenciaSQL);
			
			$numFilas = mysqli_num_rows($resultado);
		
			if ($numFilas==0){
				$respuesta = 'Usuario y/o contrasenha incorrectos';
				header("Location:../Login/index.html");
				/*echo "Usuario y/o contrasenha incorrectos";*/
			}
			else {
				switch ($nickname) {
					
					case lvargas:
						header("Location:../Administracion/mostrarTalento.php");
						header_remove("Location:../Administracion/mostrarTalento.php");
						break;
						
					case adiaz:
						header("Location:../Logistica/mostrarLogistica.php");
						header_remove("Location:mostrarLogistica.php");
						break;
					
					case favendaño:
						header("Location:../Salud/mostrarPaciente.php");
						header_remove("Location:../Salud/mostrarPaciente.php");
						break;
					case echavez:
						header("Location:../Finanzas/mostrarFinanzas.php");
						header_remove("Location:../Finanzas/mostrarFinanzas.php");
						break;	
						
				}
				
				
			}
		
	
		
		?>	
	</body>
</html>