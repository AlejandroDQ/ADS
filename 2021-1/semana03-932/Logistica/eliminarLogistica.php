<!DOCTYPE html>
<html>
    <head>
    
    </head>

    <body>
    <?php
        $Guia=$_GET["Guia"];
        $enlace=mysqli_connect("localhost","root","","thanis");
        $sentencia="DELETE FROM pedidos where Guia=$Guia;";
        mysqli_query($enlace,$sentencia);
        header("Location:mostrarLogistica.php");
    ?>
    </body>


</html>