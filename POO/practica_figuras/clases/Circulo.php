<?php

require '../clases/Figura.php';

class Circulo extends Figura{
    public $radio;

    public function calcularArea()
    {
        $area = pi() * $this->radio ** 2; //elevacion
        //pow($this->radio, 2);
        //toFixed() => asignar decimales despues el punto
        //number_format() => 
        return "<div class='alert alert-primary' role='alert'>
                    El area del circulo es " . number_format($area, 2) . "
                </div>";
    }
}

#instanciando la clase
/*$circulo = new Circulo();
$circulo->radio = 6;
echo $circulo->calcularArea();*/

?>