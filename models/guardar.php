<?php
include 'conexion.php';
$cedula=$_POST["CED_EST"];
$Nombre=$_POST["NOM_EST"];
$apellido=$_POST["APE_EST"];
$Telefono=$_POST["TEL_EST"];
$DIRECCION=$_POST["DIR_EST"];
$sqlInsert="INSERT INTO estudiantes(CED_EST,NOM_EST,APE_EST,TEL_EST,DIR_EST) VALUES ('$cedula','$Nombre','$apellido','$Telefono','$DIRECCION')";
if (!$mysqli->query($sqlInsert)===TRUE) 
{
	echo json_encode("Se guardo correctamente");
}
else
{
	echo json_encode("Error: ".$sqlInsert."<br>".$mysqli->error);
}
$mysqli->close();
?>