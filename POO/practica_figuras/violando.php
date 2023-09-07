<?php

#violando open/closed

#estructura condicional if else if else / switch
class Figuras{

    public function calcularArea($figura){
        if($figura == "Circulo"){
            //code.. radio al cuadrado
        }else if($figura == "Cuadrado"){
            //lado * lado
        }else if($figura == "Triangulo"){
            //base * altura / 2
        }else if($figura == "Rectangulo"){
            //code..
        }else if($figura == "Estrella"){
            //code..
        }
    }
}


#cumplir el principio Open / Closed => clase abstracta / interface

/**
 * clase abstracta: Es una clase que solo sirve para heredar
 * como requisito siempre llevar un metodo abstracto
 */

abstract class FiguraAbstracta{
    //obligacion
    abstract function calcularArea();
}



class Circulo extends FiguraAbstracta{

    public function calcularArea()
    {
        //radio * pi 
    }
}

class Cuadrado extends FiguraAbstracta{

    public function calcularArea()
    {
        //lado * lado
    }
}

class Triangulo extends FiguraAbstracta{

    public function calcularArea()
    {
        //base * altura / 2
    }
}

class Rectangulo  extends FiguraAbstracta{
    public function calcularArea()
    {
        //formula
    }
}


?>