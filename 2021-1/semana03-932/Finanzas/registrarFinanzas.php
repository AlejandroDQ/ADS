<DOCTYPE html>
<html>
 
    <head>
    </head>

    <body>
        <?php
            $Fecha_de_emisión=$_POST["Fecha_de_emisión"];
            $Tipo=$_POST["Tipo"];
            $Serie_Número=$_POST["Serie_Número"];
            $Cliente_Receptor=$_POST["Cliente_Receptor"];
            $Moneda=$_POST["Moneda"];
            $Subtotal=$_POST["Subtotal"];
            $IGV=$_POST["IGV"];
            $Total=$_POST["Total"];
            $Estado=$_POST["Estado"];

            $enlace=mysqli_connect("localhost","root","","thanis");
            $sentencia="INSERT INTO facturas(Fecha_de_emisión, Tipo, Serie_Número, Cliente_Receptor, Moneda, Subtotal, IGV, Total, Estado) values ('$Fecha_de_emisión','$Tipo', '$Serie_Número', '$Cliente_Receptor','$Moneda','$Subtotal','$IGV','$Total','$Estado');";

            mysqli_query($enlace,$sentencia);
            header("Location: mostrarFinanzas.php");


        ?>
    </body>

</html>
