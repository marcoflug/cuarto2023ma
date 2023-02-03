<?php
function saludo()
{
    echo "hola como estas<br>";
}
saludo();

function despedida($adios)
{
    echo $adios;
}

despedida("hasta luego<br>");

function retorno($retornar)
{
    return $retornar;
}
echo retorno("es un retorno");
?>