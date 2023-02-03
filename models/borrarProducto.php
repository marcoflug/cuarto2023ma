<?php
include 'conexion.php';
$ide=$_POST["IDE_PRO"];
$sqlDelete="DELETE FROM productos WHERE IDE_PRO='$ide'";
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