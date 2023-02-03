<?php
include 'conexion.php';
$cedula=$_POST["CED_EST"];
$Nombre=$_POST["NOM_EST"];
$apellido=$_POST["APE_EST"];
$Telefono=$_POST["TEL_EST"];
$DIRECCION=$_POST["DIR_EST"];
$sqlUpadte="UPDATE estudiantes SET TEL_EST='$Telefono',NOM_EST='$Nombre',APE_EST='$apellido', DIR_EST='$DIRECCION' WHERE CED_EST='$cedula'";
if (!$mysqli->query($sqlUpadte)===TRUE) 
{
	echo json_encode("Se actualizo correctamente");
}
else
{
	echo json_encode("Error: ".$sqlUpadte."<br>".$mysqli->error);
}
$mysqli->close();
?>