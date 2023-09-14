<?php

interface Villanos{
    public function poderes();
}

class DuendeVerde implements Villanos{
    public function poderes(){
        return "El duende verde lanza bombas";
    }
}

class Venom implements Villanos{
    public function poderes(){
        return "Venom es un alien carnivoro";
    }
}

class Thanos implements Villanos{
    public function poderes(){
        return "Thanos da golpes fuertes y tiene el guante infinito";
    }
}

#Fabrica
abstract class FabricaVillanos{

    abstract function obtenerPersonaje() : Villanos;

    public function devolverPoder(){
        $personaje = $this->obtenerPersonaje();
        return $personaje->poderes();
    }
}

#subclases
class NivelFacil extends FabricaVillanos{

    public function obtenerPersonaje(): Villanos
    {
        return new DuendeVerde;
    }
}

class NivelIntermedio extends FabricaVillanos{

    public function obtenerPersonaje(): Villanos
    {
        return new Venom;
    }
}

class NivelDificil extends FabricaVillanos{

    public function obtenerPersonaje(): Villanos
    {
        return new Thanos;
    }
}


function obtenerVillanos(FabricaVillanos $villanos){
    return $villanos->devolverPoder();
}

echo obtenerVillanos(new NivelFacil);

echo obtenerVillanos(new NivelIntermedio);

echo obtenerVillanos(new NivelDificil);

?>