<!DOCTYPE html>
<html>
    <head>
    
    </head>

    <body>
    <?php
        $ID=$_GET["paciente"];
        $enlace=mysqli_connect("localhost","root","","thanis");
        $sentencia="DELETE FROM pacientes where id='$ID';";
        mysqli_query($enlace,$sentencia);
        header("Location:mostrarPaciente.php");
    ?>
    </body>


</html>