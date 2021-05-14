<DOCTYPE html>
<html>
 
    <head>
    </head>

    <body>
        <?php
            $Guia=$_POST["Guia"];
            $Cliente=$_POST["Cliente"];
            $Producto=$_POST["Producto"];
            $Orden_de_Compra=$_POST["Orden_de_Compra"];
            

            $enlace=mysqli_connect("localhost","root","","thanis");
            $sentencia="INSERT INTO pedidos(Guia, Cliente, Producto, Orden_de_Compra) values ('$Guia','$Cliente', '$Producto', '$Orden_de_Compra');";

            mysqli_query($enlace,$sentencia);
            header("Location: mostrarLogistica.php");


        ?>
    </body>

</html>
