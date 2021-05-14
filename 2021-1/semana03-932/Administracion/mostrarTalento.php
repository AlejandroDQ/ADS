<DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title> Form mostrar talento </title>
	<link rel="stylesheet" href="cssMostrarTalento/master_mostrarTalento.css">
	</head>
	
	<body>
		<div class="titulo">Lista de Talento</div>
		<br><br>
		<form action="nuevoTalento.html" method="POST">
		<?php
		
		$enlace = mysqli_connect("localhost","root","","thanis");
		$sentencia = "SELECT * FROM talento;";
		$resultado= mysqli_query ($enlace, $sentencia);
		$numFilas=mysqli_num_rows ($resultado);

			if($numFilas==0){
				echo "No hay talentos registrados en el sistema";		
			}
			else {
	
				echo "<table border=1>";
				echo "<tr class='encabezado1'>";
				echo "<td>N° Postulante</td>";
				echo "<td>N° Convocatoria</td>";
				echo "<td>Nombres</td>";
				echo "<td>Apellido Paterno</td>";
				echo "<td>Apellido Materno</td>";
				echo "<td>Nivel de Estudios</td>";
				echo "<td>Carrera</td>";
				echo "<td>Puesto de Interes</td>";
				echo "<td>CV adjunto</td>";
				echo "<td>Estado</td>";
				echo "<td>Accion</td>";
				echo "</tr>";
			
				
				$counter= 1;
				
				
				while ($counter<=$numFilas){
					$talento=mysqli_fetch_row($resultado);
					echo "<tr>";
					echo "<td>$talento[0]</td>";
					echo "<td>$talento[1]</td>";
					echo "<td>$talento[2]</td>";
					echo "<td>$talento[3]</td>";
					echo "<td>$talento[4]</td>";
					echo "<td>$talento[5]</td>";
					echo "<td>$talento[6]</td>";
					echo "<td>$talento[7]</td>";
					echo "<td>$talento[8]</td>";
					echo "<td>$talento[9]</td>";
					echo "<td><a href='eliminarTalento.php?NPostulante=$talento[0]'>Eliminar</a></td>";
					echo "</tr>";
					
					
					$counter = $counter +1;
				}
			}
		
		
		?>
		<br>
		<br>
		<input type="Submit" value="Nuevo">
		</form>
	</body>
	
</html>

