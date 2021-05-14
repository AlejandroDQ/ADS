<DOCTYPE html>
<html>
 
    <head>
    </head>

    <body>
        <?php
            $NPostulante=$_POST["NPostulante"];
            $NConvocatoria=$_POST["NConvocatoria"];
            $Nombres=$_POST["Nombres"];
            $apellidoPaterno=$_POST["apellidoPaterno"];
            $apellidoMaterno=$_POST["apellidoMaterno"];
            $NivelEstudios=$_POST["NivelEstudios"];
            $Carrera=$_POST["Carrera"];
            $PuestoInteres=$_POST["PuestoInteres"];
            $CV=$_POST["CV"];
            $Estado=$_POST["Estado"];

            $enlace=mysqli_connect("localhost","root","","thanis");
            $sentencia="INSERT INTO talento(NPostulante, NConvocatoria, Nombres, apellidoPaterno, apellidoMaterno, NivelEstudios, Carrera, PuestoInteres, CV, Estado) values ('$NPostulante','$NConvocatoria', '$Nombres', '$apellidoPaterno', '$apellidoMaterno','$NivelEstudios','$Carrera','$PuestoInteres','$CV','$Estado');";

            mysqli_query($enlace,$sentencia);
            header("Location: mostrarTalento.php");


        ?>
    </body>

</html>
