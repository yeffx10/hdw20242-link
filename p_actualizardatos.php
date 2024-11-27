<?php
include("auth.php");
include("conexion.php");

$cod=$_SESSION["usuario"];

$correo=$_POST["txtcorreo"];
$representante=$_POST["txtrepresentante"];
$celular=$_POST["txtcelular"];
$descripcion=$_POST["txtdescripcion"];
$fecha=$_POST["txtfecha"];


$sql = "update datoespecifico
set correo='$correo',
representante='$representante',
telefono='$celular',
descripcion='$descripcion',
fecharegistro='$fecha',
estado=1
where codempresa='$cod'";

mysqli_query($cn,$sql);

header('location: principalempresa.php')

?>