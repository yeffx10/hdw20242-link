<?php
include("conexion.php");


$codempresa = $_POST['codempresa'];
$nombre = $_POST['nombre'];
$ruc = $_POST['ruc'];
$direccion = $_POST['direccion'];
$sector = $_POST['sector'];


$password = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);


$sql_empresa = "INSERT INTO empresa (codempresa, nombre, ruc, direccion, sector) 
                VALUES ('$codempresa', '$nombre', '$ruc', '$direccion', '$sector')";
mysqli_query($cn, $sql_empresa);


$sql_usuario = "INSERT INTO usuario (codempresa, password) 
                VALUES ('$codempresa', '$password')";
mysqli_query($cn, $sql_usuario);


header("Location: registrarempresa.php?codempresa=$codempresa&password=$password");
exit();
?>
