<?php

class Planilla{
    #atributos
    /**
     * Encapsulamiento: Es la forma de restringir el acceso a los atributos y metodos de una clase
     * 
     * asignacion de acceso: public, protected, private
     * public: dentro de la clase, fuera de la clase y clases hijas
     * protected: dentro de clase y clases hijas
     * private: dentro de la clase
     * 
     * Abstraccion: Extraer lo mas relevante de la clase
     */
    public $nombre;
    public $cargo;
    protected $sueldo_bruto;
    private $isss;
    private $afp;
    private $renta;
    protected $sueldo_neto;

    /**
     * constructor: 
     * constructor()
     * java => nombre de la clase
     */

    public function __construct($nombre, $cargo, $sueldo)
    {
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->sueldo_bruto = $sueldo;
    }

    public function calcularDeducciones(){
        //mas de 500 renta 10%
        //afp => 7.75%

        if($this->sueldo_bruto >= 500){
            $this->renta = $this->sueldo_bruto * 0.10;
            $this->afp = $this->sueldo_bruto * 0.0775;
            $this->isss = $this->sueldo_bruto * 0.0725;

            $this->sueldo_neto = $this->sueldo_bruto - ($this->renta + $this->afp + $this->isss);
            return $this->sueldo_neto;
        }else{
            $this->renta = 0;
            $this->afp = $this->sueldo_bruto * 0.0775;
            $this->isss = $this->sueldo_bruto * 0.0725;

            $this->sueldo_neto = $this->sueldo_bruto - ($this->afp + $this->isss);
            return $this->sueldo_neto;
        }
    }

    public function informacion(){
        return "<b>Empleado: </b> $this->nombre<br><b>Cargo: </b> $this->cargo<br><b>Sueldo Bruto: </b> $$this->sueldo_bruto<br><b>Deduccion AFP: </b> $$this->afp<br><b>Deduccion ISSS: </b> $$this->isss<br><b>Deduccion de renta: </b> $$this->renta<br><b>Sueldo Neto: </b> $$this->sueldo_neto<br>";
    }

}

#instanciando la clase
/*$persona1 = new Planilla("Kevin Hernandez","Abogado",1000); //objeto
//print_r($persona1);
$persona1->calcularDeducciones();
echo $persona1->informacion();

echo "<br>";
$persona2 = new Planilla("Maria Chacon", "vendedora",420); //objeto
//print_r($persona1);
$persona2->calcularDeducciones();
echo $persona2->informacion();*/




?>