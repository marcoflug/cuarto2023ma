<?php
include 'conexion.php';
$cedula = $_GET["nombre"];
$sqlSelect = "SELECT * FROM agenda WHERE NOM_EST='$cedula';"; 

$respuesta = $conn->query($sqlSelect); 
$result = array(); 
if($respuesta->num_rows > 0){ 
    while($row = $respuesta->fetch_assoc()){ 
        array_push($result, $row); 
    }
}else{ 
    echo json_encode("No hay repuestos");
}
echo json_encode($result)
?>