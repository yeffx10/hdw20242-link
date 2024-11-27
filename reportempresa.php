<?php
include("conexion.php");

$sql = "SELECT * FROM empresa";
$resultado = mysqli_query($cn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Empresas</title>
</head>
<body>
    <h2 style="text-align: center;">Reporte de Empresas</h2>
    <table border="1" style="width: 100%; text-align: center;">
        <tr>
            <th>Código Empresa</th>
            <th>Nombre</th>
            <th>RUC</th>
            <th>Dirección</th>
            <th>Sector</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['codempresa']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['ruc']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['sector']; ?></td>
            <td>
                <a href="editarempresa.php?codempresa=<?php echo $row['codempresa']; ?>">Editar</a> |
                <a href="eliminarempresa.php?codempresa=<?php echo $row['codempresa']; ?>" onclick="return confirm('¿Eliminar esta empresa?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
