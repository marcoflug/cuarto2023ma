<?php
$automovil1=(object)["marca" =>"toyota" ,"modelo" =>"yaris"];
$automovil2=(object)["marca" =>"ford" ,"modelo" =>"f150"];
function mostrar($automovil)
{
    echo "soy el auto $automovil->marca, modelo $automovil->modelo <br>";
}
mostrar($automovil1);
mostrar($automovil2);
?>