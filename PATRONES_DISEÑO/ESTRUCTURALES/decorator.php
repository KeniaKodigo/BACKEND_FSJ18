<?php

//crear interfaz para las clases concretas

interface Pizza{
    public function preparar();
}

#clases concretas
class Vegetariana implements Pizza{

    public function preparar()
    {
        return "Prepare una pizza vegetariana";
    }
}

class Margarita implements Pizza{

    public function preparar()
    {
        return "Prepare una pizza margarita";
    }
}

class Hawaiana implements Pizza{

    public function preparar()
    {
        return "Prepare una pizza hawaiana";
    }
}

#creamos la clase decoradora
class DecoratorPizza implements Pizza{

    public function preparar()
    {
        //code..
    }
}


?>