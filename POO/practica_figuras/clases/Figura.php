<?php

//clases abstractas, polimorfismo

#clase Padre

/**
 * clase: Es una plantilla atributos y metodos de la clase
 * clases abstractas: Son clases que no pueden ser instanciadas sino que solo heredadas
 */

#clase padre
abstract class Figura{
    abstract function calcularArea();
}

/*class Circulo extends Figura{

    #polimorfismo
    public function calcularArea()
    {
        return 3.1416 * pow($radio, 2);
    }
}

#instancia de la clase Circulo
$circulo = new Circulo();
echo $circulo->calcularArea(); //16

//ser padres y heredar su comportamiento a las clases hijas
abstract class Animal{
    #atributos
    public $nombre;
    public $edad;

    public function comer(){
        return "Los animales comen";
    }

    abstract function dormir();
    #segundo requisito: tiene que tener como minimo un metodo abstracto
    #Los metodos abstractos no llevan comportamiento

    abstract function comidasFavoritas();
}

#clases hijas estan obligadas a tener el metodo abstracto
class Gallo extends Animal{
    public function dormir()
    {
        return "A los gallos les gusta dormir en la tarde";
    }

    public function comidasFavoritas()
    {
        return "A los gallos les gustan el maiz";
    }
}

class Conejo extends Animal{
    public function dormir()
    {
        return "Los conejos duermen todo el dia";
    }

    public function comidasFavoritas()
    {
        return "Los conejos les gusta las zanahorias";
    }
}
*/


?>