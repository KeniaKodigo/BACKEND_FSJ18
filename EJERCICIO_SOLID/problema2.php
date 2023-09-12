<?php
/**
 * Supongamos que tienes que desarrollar un sistema para gestionar los empleados de una empresa. Cada empleado puede ser de dos tipos: 
* "Empleado de Tiempo Completo" y "Empleado de Medio Tiempo".

* Los empleados de tiempo completo pueden tener bonos, mientras que los de medio tiempo pueden tener horas extra.
 */

# VIOLANDO EL PRINCIPIO LISKOV
class Trabajador{
    public function agregarBono($salario){
        //bono del 20% de su sueldo
        $sueldo_total = $salario + ($salario * 0.20);
        return "Se le agregado un bono del 20% de su sueldo, su sueldo total en este mes es de $sueldo_total";
    }
}

class TrabajadorMedioTiempo extends Trabajador{

    //el empleado a medio tiempo debe calcular su salario con horas extras
    public function agregarBono($salario){
        throw new ErrorException("Los empleados a medio tiempo, no reciben bonos");
    }
}

class TrabajadorTiempoCompleto extends Trabajador{
    public function agregarBono($salario){
        return "Recibio un bono del 15% de su sueldo";
    }
}


#SOLUCION  => clase abstracta / interface

interface GestionBonos{
    public function agregarBono();
}

class TrabajadorMedio{
    //code
    public function calcularHorasExtras(){

    }
}

class TrabajadorCompleto implements GestionBonos{

    public function agregarBono()
    {
        //code..
    }
}

class Practicante implements GestionBonos{
    public function agregarBono()
    {
        //code.. $20
    }
}



?>