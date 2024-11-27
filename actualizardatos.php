<?php
include("auth.php");
include("conexion.php");
include("cabecera.php");

$cod=$_SESSION["usuario"];
$sql = "select e.*,d.*
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

    <form action="p_actualizardatos.php" method="post">
        <table align="center" border="1" cellspacing="0" bgcolor="lightblue" width="600">
            <tr>               
                <td>CORREO: </td>
                <td colspan="2"><input type="email" name="txtcorreo" size="60" value="<?php echo $r
                ["correo"]; ?>">
                </td>
            </tr>
            <tr>
                <td>REPRESENTANTE: </td>
                <td colspan="2"><input type="text" name="txtrepresentante" size="60" value="<?php echo $r["representante"]; ?>"></td>
            </tr>
            <tr>
                <td>TELEFONO: </td>
                <td>DESCRIPCION: </td>
                <td>F. REGISTRO: </td>
            </tr>
            <tr>
                <td><input type="text" name="txtcelular" value="<?php echo $r["telefono"]; ?>"></td>
                <td><input type="text" name="txtdescripcion" value="<?php echo $r["descripcion"]; ?>"></td>
                <td><input type="date" name="txtfecha" value="<?php echo $r["fecharegistro"]; ?>"></td>               
            </tr>
        </table>
        <center><input type="submit" value="Actualizar Datos"></center>
    </form>



</body>
</html>