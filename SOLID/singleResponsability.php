<?php

#acoplamiento de responsabilidades
class Tarea{
    public $titulo;
    public $descripcion;
    public $fecha;

    public function __construct()
    {
        
    }

    public function agregarTarea(){
        //code..
    }

    public function actualizarTarea(){

    }

    public function marcar_completada(){
        //code..
    }

    

}

#cumplir el principio (separar las responsabilidades)

#base de datos
class ConectarBD{
    public function conexion(){
        //code..
    }
}

class Notificaciones{
    public function enviar(){
        //code..
    }

    public function validar(){

    }
}

class ControlTareas{
    public $descripcion;
    public $fecha;

    public function __construct()
    {
        
    }

    public function agregar(){
        //code..
    }

    public function actualizar(){

    }

    public function marcar_completada(){
        //code..
    }
}



?>