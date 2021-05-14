<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8">
	<title> Form mostrar Paciente </title>
	<link rel="stylesheet" href="cssMostrarPaciente/master_mostrarFinanzas.css">
	</head>
	
	<body>
		<div class="titulo">Lista de Pacientes</div>
		<br><br>
		<form action="nuevoPaciente.html" method="POST">
		
		<?php
			$enlace=mysqli_connect("localhost", "root", "", "thanis");
			$sentencia= "SELECT* FROM pacientes;";
			$resultado=mysqli_query($enlace, $sentencia);
			$NumFilas=mysqli_num_rows($resultado);
			
			if($NumFilas==0){
				echo "No existen pacientes registrados para la atención";
			}
			else{
				echo "<table border=1> ";
				/* td para columna y tr es para fila */
				echo "<tr>";
				echo "<td> ID </td>";
				echo "<td> NOMBRE </td>";
				echo "<td> APELLIDO PATERNO </td>";
				echo "<td> APELLIDO MATERNO </td>";
				echo "<td> Accion </td>";
				echo "</tr>";
				
				$contador=1;
				while($contador<=$NumFilas){
					$paciente= mysqli_fetch_row($resultado);
					echo "<tr>";
					echo "<td> $paciente[0]</td>";
					echo "<td> $paciente[1]</td>";
					echo "<td> $paciente[2]</td>";
					echo "<td> $paciente[3]</td>";
					
					echo "<td><a href='eliminarPacientes.php?paciente=$paciente[0]'>Eliminar</a></td>";
					echo "</tr>";
					$contador=$contador+1;
				}
				echo "</table>";
			}
		
			?>
		
		<br>
		<br>
		<input type="Submit" value="Nuevo">
        </form>

	</body>
</html>