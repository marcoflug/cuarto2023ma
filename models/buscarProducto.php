<?php
include 'conexion.php';
$nom_pro = $_GET["busqueda"];
$sqlSelect = "SELECT  *
                    FROM estudiantes
                    WHERE CED_EST LIKE '".$nom_pro."%';"; 

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