<?php
include("conexion.php");


$codpostulante = $_POST['codpostulante'];
$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$fecharegistro = $_POST['fecharegistro'];



$password = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);


$sql_postulante= "insert into postulante (codpostulante, nombre, apaterno, amaterno, fecharegistro) 
                VALUES ('$codpostulante', '$nombre', '$apaterno', '$amaterno', '$fecharegistro')";
mysqli_query($cn, $sql_postulante);


$sql_usuario = "insert into usupostulante (codpostulante, password) 
                VALUES ('$codpostulante', '$password')";
mysqli_query($cn, $sql_usuario);


header("Location: registrarpostulante.php?codpostulante=$codpostulante&password=$password");
exit();
?>
