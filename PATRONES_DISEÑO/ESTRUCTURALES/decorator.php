<?php

//crear interfaz para las clases concretas

interface Pizza{
    public function preparar();
    //public function costo();
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
    #atributo protegido
    protected $decorador_pizza;

    #constructor
    public function __construct(Pizza $pizza) //Margarita
    {
        $this->decorador_pizza = $pizza;
    }

    public function preparar()
    {
        return $this->decorador_pizza->preparar(); //"Prepare una pizza margarita"
    }
}

#clases decoradoras (ingredientes extras)

class ExtraQueso extends  DecoratorPizza{

    public function preparar()
    {
        return parent::preparar() . " con extra de queso";
    }
}

class ExtraCebolla extends DecoratorPizza{
    public function preparar()
    {
        return parent::preparar() . " y se agrego extra de cebolla morada";
    }
}

function hacerPizza(Pizza $pizza){
    echo "Su orden es: " . $pizza->preparar() . "<br>";
}

//Decorando la pizza por hacer (instanciar)

#especialidad (Vegetariana, Margarita, Hawaiana)
$pizza = new Margarita();
#decoraciones (ExtraQueso, ExtraCebolla)
$pizza = new ExtraQueso($pizza);
$pizza = new ExtraCebolla($pizza);

hacerPizza($pizza);

?>