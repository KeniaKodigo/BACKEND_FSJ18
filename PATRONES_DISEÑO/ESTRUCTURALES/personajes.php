<?php

interface Personajes{
    public function poderes();
}

#clases concretas (personajes)

class Duende implements Personajes{
    public function poderes()
    {
        return "Duende verde, su poder es lanzar bombas";
    }
}


class Venon implements Personajes{

    public function poderes()
    {
        return "Venom, es un alien carnivoro";
    }
}

class Tanos implements Personajes{

    public function poderes()
    {
        return "Thanos, tiene el guante infinito";
    }
}

#Clase Decoradora Padre
class DecoratorPersonajes implements Personajes{
    protected $decorador_personaje;

    public function __construct(Personajes $personaje) //Tanos
    {
        $this->decorador_personaje = $personaje;
    }

    public function poderes()
    {
        return $this->decorador_personaje->poderes(); //Thanos, tiene el guante infinito
    }
}

#decoradores (poderes extras)

class FuerzaBruta extends DecoratorPersonajes{
    public function poderes()
    {
        return parent::poderes() . ",fuerza bruta";
    }
}

class Teletransportacion extends DecoratorPersonajes{
    public function poderes()
    {
        return parent::poderes() . ", se puede teletransportar";
    }
}

#hacer el personaje
function hacerPersonaje(Personajes $personaje){
    echo "Creando al personaje y sus poderes: <br>" . $personaje->poderes();
}

$personaje = new Duende();
$personaje = new FuerzaBruta($personaje);
$personaje = new Teletransportacion($personaje);
hacerPersonaje($personaje);

?>