<?php
    class computadora{
        public $marca;
        public $modelo;

        public function mostrar ()
        {
            echo "Computadora marca: $this->marca, modelo: $this->modelo <br>";
        }
    }

    $c1=new computadora();
    $c1->marca="HP123";
    $c1->modelo="HP";
    $c1->mostrar();

    $c2=new computadora();
    $c2->marca="HSDSDS3";
    $c2->modelo="ASUS";
    $c2->mostrar();
?>