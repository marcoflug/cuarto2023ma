<?php
include "conexion.php";
$SqlSelect = "SELECT * FROM productos;";
$respuesta = $conn->query($SqlSelect);
$result=array();
if($respuesta->num_rows>0)
    {
        while($filasEstudiantes=$respuesta->fetch_assoc())
        {
            array_push($result,$filasEstudiantes);
        }
    }else{
        $result="no hay productos";
}
echo json_encode($result);
?>