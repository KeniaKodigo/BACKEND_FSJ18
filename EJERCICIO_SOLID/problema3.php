<?php

#SEGREGACION DE INTERFACES

#VIOLACION /
interface GestionRegalias{
    public function agregarBono();
    public function horasExtras();
}


class EmployeeMedio implements GestionRegalias{
    public function agregarBono()
    {
        throw new Exception("No reciben bonos");
    }

    public function horasExtras()
    {
        //code..
    }
}

class EmployeeTiempoCompleto implements GestionRegalias{
    public function agregarBono()
    {
        //code..
    }

    public function horasExtras()
    {
        throw new Exception("No tiene horas extras");
    }
}


#CUMPLIENDO CON EL PRINCIPIO

interface RegaliaBono{
    public function agregarBono();
}

interface RegaliaHoras{
    public function horasExtras();
}

class EmployeeMedio2 implements RegaliaHoras{

    public function horasExtras()
    {
        //code..
    }
}

class EmployeeTiempoCompleto2 implements RegaliaBono{
    public function agregarBono()
    {
        //code..
    }
}

class Practicante implements RegaliaBono, RegaliaHoras{
    public function agregarBono(){
        //code..
    }

    public function horasExtras(){
        //code..
    }
}

?>