<?php

/**
 * Supongamos que tienes que desarrollar un sistema para gestionar los empleados de una empresa. Cada empleado puede ser de dos tipos: 
* "Empleado de Tiempo Completo" y "Empleado de Medio Tiempo". Ambos tipos de empleados tienen un nombre y un salario.

* El empleado de "Tiempo Completo" recibe un bono y el empleado de "Medio Tiempo" recibe horas extras

* practicantes (150)
 */

/**
 * clase este cerrada a modificacion 100%
 * 
 * Violando OPENCLOSED
 * 
 */
class Empleado2{
    public $nombre;
    public $salario;

    public function __construct($nombre, $salario)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    
    public function tipoEmpleado($tipo){
        switch($tipo){
            case "Tiempo Completo":
                return "El empleado $this->nombre, trabaja a tiempo completo y se le dio un bono del 15% de su sueldo";
                break;

            case "Medio Tiempo":
                return "El empleado $this->nombre, trabaja de medio tiempo y va trabajar 2 horas extras";
                break;
            
            case "Practicantes":
                return "Los practicantes reciben $150 al mes";
                break;
            default:
                return "Ingrese un tipo";
        }
    }
}

#CUMPLIENDO EL PRINCIPIO
#Open-Closed / clase abstracta / interfaz

abstract class Empleado{
    public $nombre;
    public $salario;

    public function __construct($nombre, $salario)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    #metodo abstracto
    abstract function calcularSalario();
}

class EmpleadoTiempoCompleto extends Empleado{

    public function calcularSalario()
    {
        $salario_total = $this->salario + ($this->salario * 0.15);
        return "El empleado $this->nombre, trabaja a tiempo completo y se le dio un bono del 15% de su sueldo y tu sueldo $salario_total";
    }
}

class EmpleadoMedioTiempo extends Empleado{
    public $horas_extras;

    public function calcularSalario()
    {
        $salario_total = $this->salario * $this->horas_extras;
        return "El empleado $this->nombre, trabaja a medio tiempo, hizo x horas y tu sueldo $salario_total";
    }
}

class Practicante extends Empleado{

    public function calcularSalario()
    {
        return "El practicante solo recibe $150";
    }
}





?>