<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<title> Form mostrar Finanzas </title>
	<link rel="stylesheet" href="cssMostrarFinanzas/master_mostrarFinanzas.css">
    </head>

    <body>
        <div class="titulo">Lista de Finanzas</div><br><br>
        <table>
        <form action="nuevoFinanzas.html" method="POST">
        <?php
			$enlace=mysqli_connect("localhost", "root", "", "thanis");
			$sentencia= "SELECT* FROM facturas;";
			$resultado=mysqli_query($enlace, $sentencia);
			$NumFilas=mysqli_num_rows($resultado);
			
			if($NumFilas==0){
				echo "No existen facturas registradas para la atención";
			}
			else{
				echo "<table border=1> ";
				/* td para columna y tr es para fila */
				echo "<tr>";
				echo "<td> Fecha de Emisión </td>";
				echo "<td> Tipo </td>";
				echo "<td> Serie_Número </td>";
				echo "<td> Cliente Receptor </td>";
				echo "<td> Moneda </td>";
				echo "<td> Subtotal </td>";
				echo "<td> IGV </td>";
				echo "<td> Total </td>";
				echo "<td> Estado </td>";
                echo "<td> Accion </td>";
				echo "</tr>";
				
				$contador=1;
				while($contador<=$NumFilas){
					$factura= mysqli_fetch_row($resultado);
					echo "<tr>";
					echo "<td> $factura[0]</td>";
					echo "<td> $factura[1]</td>";
					echo "<td> $factura[2]</td>";
					echo "<td> $factura[3]</td>";
                    echo "<td> $factura[4]</td>";
                    echo "<td> $factura[5]</td>";
                    echo "<td> $factura[6]</td>";
                    echo "<td> $factura[7]</td>";
                    echo "<td> $factura[8]</td>";
                    echo "<td><a href='eliminarFinanzas.php?Serie_Número=$factura[2]'>Eliminar</a></td>";
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