<DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title> Form mostrar Pedido </title>
	<link rel="stylesheet" href="cssMostrarLogistica/master_mostrarFinanzas.css">
	</head>
	
	<body>
		<div class="titulo">Lista de Pedidos</div>
		<br><br>
		<form action="nuevoLogistica.html" method="POST">
		<?php
		
		$enlace = mysqli_connect("localhost","root","","thanis");
		$sentencia = "SELECT * FROM pedidos;";
		$resultado= mysqli_query ($enlace, $sentencia);
		$numFilas=mysqli_num_rows ($resultado);

			if($numFilas==0){
				echo "No hay pedidos registrados en el sistema";		
			}
			else {
				
				echo "<table border=1>";
				/* td para columna y tr es para fila */
				echo "<tr>";
				echo "<td>Guia</td>";
				echo "<td>Clientes</td>";
				echo "<td>Producto</td>";
				echo "<td>Orden de Compra</td>";
				echo "<td> Accion </td>";
				echo "</tr>";
			
				
				$counter= 1;
				while ($counter<=$numFilas){
					$guia=mysqli_fetch_row($resultado);
					echo "<tr>";
					echo "<td>$guia[0]</td>";
					echo "<td>$guia[1]</td>";
					echo "<td>$guia[2]</td>";
					echo "<td>$guia[3]</td>";
					
					echo "<td><a href='eliminarLogistica.php?Guia=$guia[0]'>Eliminar</a></td>";
					echo "</tr>";
					
					
					$counter = $counter +1;
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

