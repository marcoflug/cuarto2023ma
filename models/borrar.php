<?php
include 'conexion.php';
$Cedula=$_POST["CED_EST"];
$sqlDelete="DELETE FROM estudiantes WHERE CED_EST='$Cedula'";
if (!$mysqli->query($sqlDelete)===TRUE) 
{
	echo json_encode("Se elimino correctamente");
}
else
{
	echo json_encode("Error: ".$sqlDelete."<br>".$mysqli->error);
}
$mysqli->close();
?>