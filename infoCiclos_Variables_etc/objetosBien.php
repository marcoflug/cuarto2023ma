<?php
class automovil{

    public $marca;
    public $modelo;

    public function mostrar()
    {
        echo "hola soy un auto $this->marca, modelo $this->modelo <br>";
    }
}

$a1=new Automovil();
$a1->marca="toyota";
$a1->modelo="yaris";
$a1->mostrar();

$a1=new Automovil();
$a1->marca="ford";
$a1->modelo="f150";
$a1->mostrar();
?>