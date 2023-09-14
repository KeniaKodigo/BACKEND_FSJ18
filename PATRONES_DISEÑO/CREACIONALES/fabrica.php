<?php

#creamo la interfaz de los productos (clases)

interface transporte{
    public function envio();
}

#crea los productos (clases) que dependen de la interfaz

class Camion implements transporte{
    public function envio()
    {
        return "El envio se hizo por via CAMION";
    }
}

class Avion implements transporte{
    public function envio()
    {
        return "El envio se hizo por via AVION";
    }
}

class Barco implements transporte{
    public function envio()
    {
        return "El envio se hizo por via Barco";
    }
}

class Tren implements transporte{
    public function envio()
    {
        return "El envio se hizo por via TREN";
    }
}

#Fabrica (clase abstracta) / clase Padre
abstract class FabricaEnvios{
    #asignamos un metodo abstracto que recibe al producto de tipo interfaz
    abstract function obtenerTransporte() : transporte;

    #asignamos un metodo donde devuelve el comportamiento
    public function procesarEnvio(){
        $transporte = $this->obtenerTransporte();
        return $transporte->envio(); 
    }
}

#subfabricas / clases hijas
class viaTerrestre extends FabricaEnvios{

    public function obtenerTransporte(): transporte
    {
        return new Camion;
    }
}

class viaMaritima extends FabricaEnvios{

    public function obtenerTransporte(): transporte
    {
        return new Barco;
    }
}

class viaAerea extends FabricaEnvios{

    public function obtenerTransporte(): transporte
    {
        return new Avion;
    }
}

class viaFerrocaril extends FabricaEnvios{

    public function obtenerTransporte(): transporte
    {
        return new Tren;
    }
}


#metodo aparte para recibir la fabrica
function obtenerEnvio(FabricaEnvios $fabrica){
    return $fabrica->procesarEnvio();
}


echo obtenerEnvio(new viaTerrestre); //proceso camion
echo "<br>";
echo obtenerEnvio(new viaMaritima); //proceso barco
echo "<br>";
echo obtenerEnvio(new viaFerrocaril);


?>