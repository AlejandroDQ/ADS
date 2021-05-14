<!DOCTYPE html>
<html>
    <head>
    
    </head>

    <body>
    <?php
        $NPostulante=$_GET["NPostulante"];
        $enlace=mysqli_connect("localhost","root","","thanis");
        $sentencia="delete from talento where NPostulante=$NPostulante;";
        mysqli_query($enlace,$sentencia);
        header("Location:mostrarTalento.php");
    ?>
    </body>


</html>