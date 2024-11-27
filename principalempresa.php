<?php
include("auth.php");
include("conexion.php");
include("cabecera.php");

$cod=$_SESSION["usuario"];
$sql = "select e.*, d.* 
from empresa e, datoespecifico d
where e.codempresa=d.codempresa
and e.codempresa='$cod'";
$f = mysqli_query($cn,$sql);
$r = mysqli_fetch_assoc($f);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <center>
        Bienvenido(a) Empresa <?php echo $r["nombre"]; ?>
    </center>
    <br>

    <table border="1" cellspacing="0" align = "center" bgcolor="lightblue" width="600">
        <tr>
            <td rowspan="6" align="center" valign="middle">
                <img src="imgempresa/<?php echo $r["codempresa"]; ?>.png" width="200" height="200">
            </td>
        </tr>
        <tr>
            <td align="right">CODIGO EMPRESARIAL</td>
            <td><?php echo $r["codempresa"]; ?></td>
        </tr>
        <tr>
            <td align="right">EMPRESA</td>
            <td><?php echo $r["nombre"]; ?></td>
        </tr>
        <tr>
            <td align="right">RUC. EMPRESA</td>
            <td><?php echo $r["ruc"]; ?></td>
        </tr>
        <tr>
            <td align="right">DIRECCION</td>
            <td><?php echo $r["direccion"]; ?></td>
        </tr>
        <tr>
            <td align="right">SECTOR></td>
            <td><?php echo $r["sector"]; ?></td>
        </tr>
    </table>
    <br>
    <?php
    
        if ($r["estado"]==0) {
            echo "<center><h1 style='color:white;'>ACTUALICE LOS DATOS DE LA EMPRESA</h1></center>";
        } else {
    
    ?>

        <table align="center" border="1" cellspacing="0" bgcolor="lightblue" width="600">
            <tr>
                <td>CORREO: </td>
                <td colspan="2"><?php echo $r["correo"]; ?></td>
                    
            </tr>
            <tr>
                <td>REPRESENTANTE: </td>
                <td colspan="2"><?php echo $r["representante"]; ?></td>
                    
            </tr>
            <tr>
                <td>TELEFONO: </td>
                <td>DESCRIPCION: </td>
                <td>F. REGISTRO: </td>
            </tr>
            <tr>
                <td><?php echo $r["telefono"]; ?></td>
                <td><?php echo $r["descripcion"]; ?></td>
                <td><?php echo $r["fecharegistro"]; ?></td>
            </tr>
        </table>



    <?php
    
    }

    ?>



</body>
</html>