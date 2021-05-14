<!DOCTYPE html>
<html>
    <head>
    
    </head>

    <body>
    <?php
        $Serie_Número=$_GET["Serie_Número"];
        $enlace=mysqli_connect("localhost","root","","thanis");
        $sentencia="DELETE FROM facturas where Serie_Número=$Serie_Número;";
        mysqli_query($enlace,$sentencia);
        header("Location:mostrarFinanzas.php");
    ?>
    </body>


</html>