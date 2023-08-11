<?php

#if-else if-else if-else operador ternario switch

//funciones

/**
 * en base a un numero determinar si termina en 4
 */
function terminarNumero($numero){
    if($numero % 10 == 4){
        echo "El numero $numero termina en 4 :)";
    }else{
        echo "El numero no termina en 4 :(";
    }

    #operador ternario
    return $numero % 10 == 4 ? "El numero $numero termina en 4 :)" : "El numero no termina en 4 :(";
}
//prompt
terminarNumero(1024);


#if-else if-else
/**
 * rango de salarios
 *  si gana entre 501 a 650 => cajero
 *  si gana entre 360 - 500 => vendedor
 *  si ganas mas de 650 => administrador
 */

function rangoSalarios($salario){
    if($salario >= 501 && $salario <= 650){
        echo "Usted es cajero";
    }else if($salario >= 360 && $salario <= 500){
        echo "Usted es vendedor";
    }else if($salario > 650){
        echo "Usted es administrador";
    }else{
        echo "No esta en el rango";
    }
}
echo "<br>";
echo rangoSalarios(470);
echo "<br>";
echo rangoSalarios(100);

#switch
//estaciones del año







?>