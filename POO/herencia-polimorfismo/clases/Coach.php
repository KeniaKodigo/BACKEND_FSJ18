<?php

require "./clases/Kodigo.php";

class Coach extends Kodigo{
    #especialidad, cargo
    protected $especialidad;
    protected $cargo;
    protected $salario;

    public function __construct($nombre, $correo, $academia, $nivel_academico, $especialidad, $cargo, $salario)
    {
        #heredamos el constructor del padre
        parent::__construct($nombre, $correo, $academia, $nivel_academico);
        $this->especialidad = $especialidad;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function obtenerInfo(){
        return "Informacion del Coach<br>Nombre Completo: $this->nombre<br>Correo Electronico: $this->correo<br>Academia: $this->academia<br>Nivel Academico: $this->nivel_academico<br>Cargo: $this->cargo<br>Especialidad: $this->especialidad<br>Salario: $this->salario";
    }
}



?>