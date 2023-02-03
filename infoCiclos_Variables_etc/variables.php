<?php
    $numero= 1;
    echo "Esto es una variable: $numero";
    echo "<br>";
    var_dump($numero);
    echo "<br>";
    
    $palabra="hola";
    echo "Esto es una variable: $palabra";
    echo "<br>";
    var_dump($palabra);
    echo "<br>";
    
    $boolean=true;
    echo "Esto es una variable: $boolean";
    echo "<br>";
    var_dump($boolean);
    echo "<br>";
    
    $colores = array("rojo","amarillo");
    echo "Esto es una variable: $colores[1]";
    echo "<br>";
    var_dump($colores);
    echo "<br>";

    $verdura = array("verdura1" =>"lechuga" ,"verdura2" =>"cebolla" );
    echo "Esto es una variable: $verdura[verdura2]";
    echo "<br>";
    var_dump($verdura);
    echo "<br>";

    $frutas = (object)["fruta1" =>"pera" ,"fruta2" =>"manzana"];
    echo $frutas->fruta2;
    echo "<br>";
    var_dump($frutas);
    echo "<br>";
?>