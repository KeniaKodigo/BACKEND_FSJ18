<?php

/**
 * aplicando clases abstractas / interfaz
 * 
 * interface: Es un contrato donde las clases tienen que cumplir lo que hay en la interfaz
 * 
 * clases abstracta: clases que no se pueden instanciar solo heredar
 * metodo abstracto (como minimo uno)
 */

abstract class Animal{
    public $nombre;
    public $raza;

    abstract function rutina();

    //(opcional)
    public function saludar(){
        return "Los animales del mundo!";
    }
}

class Gato extends Animal{

    public function rutina()
    {
        return "Le gusta jugar con la lana, comer pollo";
    }
}

#asignando interfaz
interface Animal2{
    //no se pueden colocar atributos
    
    //solo se permiten metodos abstractos
    public function rutina();
}

#implementacion
class Gato2 implements Animal2{
    public function rutina(){
        return "A mi gato le gusta dormir todo el dia";
    }
}





?>