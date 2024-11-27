<?php

session_start();
include("conexion.php");

$usu=$_POST["txtusuario"];
$pass=$_POST["txtpass"];

$sql="select * from usuario 
where codempresa = '$usu' and password='$pass'";

$sql2="select * from usupostulante 
where codpostulante = '$usu' and password='$pass'";

$f=mysqli_query($cn,$sql);
$f2=mysqli_query($cn,$sql2);

if ($r=mysqli_fetch_assoc($f)) {
    
    $_SESSION["usuario"] = $r["codempresa"];
    $_SESSION["auth"] = 1;
    header('Location: principalempresa.php');
    exit();
} elseif ($r2=mysqli_fetch_assoc($f2)) {

    $_SESSION["usuario"] = $r2["codpostulante"];
    $_SESSION["auth"] = 1;
    header('Location: principalpostulante.php');
    exit();
    
}



?>