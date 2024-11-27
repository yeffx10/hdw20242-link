<?php

include("conexion.php");
include("cabecera.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Empresa</title>
</head>

<br><br>

<body>

<?php
    
    $mensaje = "";
    if (isset($_GET['password']) && isset($_GET['codpostulante'])) {
        $mensaje = "Registro exitoso. Su contraseña generada es: <strong>{$_GET['password']}</strong>. Código del postulante: <strong>{$_GET['codpostulante']}</strong>";
    }
    ?>

    <form action="p_registrarpostulante.php" method="post" style="width: 600px; margin: 0 auto; border: 1px solid #000; padding: 20px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="text-align: left; font-weight: bold; padding-bottom: 10px;">Registro de Postulante</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color: green; font-size: 1.2em;">
                    <?php 
                         echo $mensaje; 
                    ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px;"><label for="codempresa">Código de Postulante:</label></td>
                <td style="padding: 5px;"><input type="text" id="codpostulante" name="codpostulante" required maxlength="8" style="width: 100%;"></td>
            </tr>
            <tr>
                <td style="padding: 5px;"><label for="nombre">Nombre del Postulante:</label></td>
                <td style="padding: 5px;"><input type="text" id="nombre" name="nombre" required style="width: 100%;"></td>
            </tr>
            <tr>
                <td style="padding: 5px;"><label for="nombre">A. Paterno del Postulante:</label></td>
                <td style="padding: 5px;"><input type="text" id="apaterno" name="apaterno" required style="width: 100%;"></td>
            </tr>
            <tr>
                <td style="padding: 5px;"><label for="nombre">A. Materno del Postulante:</label></td>
                <td style="padding: 5px;"><input type="text" id="amaterno" name="amaterno" required style="width: 100%;"></td>
            </tr>
            <tr>
                <td style="padding: 5px;"><label for="fecharegistro">Fecha de Registro:</label></td>
                <td style="padding: 5px;"><input type="date" id="fecharegistro" name="fecharegistro" required style="width: 100%;"></td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; padding: 10px;">
                    <button type="submit" style="width: 100%; padding: 10px; font-weight: bold;">Registrar Postulante</button>
                </td>
            </tr>                
        </table>
    </form>

    <div style="width: 600px; margin: 20px auto; text-align: center;">
    <a href="index.php">
        <button style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; font-size: 1rem; cursor: pointer;">
            Iniciar Sesión
        </button>
    </a>
</div>

</body>
</html>
