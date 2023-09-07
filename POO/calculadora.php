<?php

class Calculadora{

    public function factorial($num){
        $resultado = 1;
        //return $num * $this->factorial($num - 1);
        for($i = 1; $i <= $num; $i++){
            $resultado *= $i;
            
        }

        echo $resultado;
    }
}

$cal = new Calculadora();
$cal->factorial(5);



?>