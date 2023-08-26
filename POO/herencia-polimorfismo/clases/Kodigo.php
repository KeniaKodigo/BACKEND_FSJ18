<?php

class Kodigo{
    #datos personales (nombre, direccion, telefono, correo), academia, nivel academico
    public $nombre;
    private $direccion;
    private $telefono;
    protected $correo;
    protected $academia;
    protected $nivel_academico;

    public function __construct($nombre, $correo, $academia, $nivel_academico)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->academia = $academia;
        $this->nivel_academico = $nivel_academico;
    }

    /**
     * atributo privado => get(), set()
     * get() = retorna la informacion
     * set() = recibe la informacion a traves de un parametro
     */

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function getTelefono(){
        return $this->telefono;
    }

}

?>