<DOCTYPE html>
<html>
 
    <head>
    </head>

    <body>
        <?php
            $id=$_POST["id"];
            $Nombre=$_POST["Nombre"];
            $apellidoPaterno=$_POST["apellidoPaterno"];
            $apellidoMaterno=$_POST["apellidoMaterno"];
            

            $enlace=mysqli_connect("localhost","root","","thanis");
            $sentencia="INSERT INTO pacientes(id, Nombre, apellidoPaterno, apellidoMaterno) values ('$id','$Nombre', '$apellidoPaterno', '$apellidoMaterno');";

            mysqli_query($enlace,$sentencia);
            header("Location: mostrarPaciente.php");


        ?>
    </body>

</html>
