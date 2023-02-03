<?php
$a=4;
$b=4;
if ($a>$b) {
    echo "a es mayor";
}
else if($a==$b){
    echo "son iguales";
}
else {
    echo "b es mayor";
}
echo "<br>";

$op="sabad";
switch ($op) {
    case 'sabado':
        echo "voy a estudiar";
        break;
    case 'viernes':
            echo "voy a bailar";
            break;
    default:
        echo "ninguna opcion";
        break;
}

?>