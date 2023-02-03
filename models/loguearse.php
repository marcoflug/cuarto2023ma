<?php
require 'conexion.php';
session_start();

$Cedula=$_POST["CED_USU"];
$Nombre=$_POST["NOM_USU"];

$sqlUpadte="SELECT COUNT(*) FROM usuarios WHERE CED_USU='$Cedula' AND NOM_USU='$Nombre'";
$consulta = mysqli_query($conn,$sqlUpadte);
$array = mysqli_fetch_array($consulta);

if ($array['COUNT(*)']>0) 
{   
    $_SESSION['CED_USU']=$Cedula;
	header("location: ../index.php?action=servicios");
}
else
{
	header("location: ../index.php?action=error");
}

?>