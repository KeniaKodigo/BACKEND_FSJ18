<?php
#violando el principio
interface GestionDatos{
    public function agregar();
    public function actualizar();
    public function eliminar();
    public function calcularSalario();
    public function generarPlanilla();
}

class Empleado implements GestionDatos{
    public function agregar()
    {
        
    }

    public function actualizar()
    {
        
    }

    public function eliminar()
    {
        
    }

    public function calcularSalario()
    {
        throw new Exception("Solo la area administrativa puede realizar la accion");
    }

    public function generarPlanilla()
    {
        throw new Exception("Solo la area administrativa puede realizar la accion");
    }
}

/*class Planilla implements GestionDatos{
    public function agregar()
    {
        throw new Exception();
    }

    public function actualizar()
    {
        
    }

    public function eliminar()
    {
        
    }
}*/

#cumpliendo con el principio

interface GestionPersonal{
    public function agregar();
    public function actualizar();
    public function eliminar();
}

interface GestionPlanilla{
    public function calcularSalario();
    public function generarPlanilla();
}

class Employee implements GestionPersonal{
    public function agregar()
    {
        //insert into nombre, edad, carnet -> base de datos
    }

    public function actualizar()
    {
        
    }

    public function eliminar()
    {
        
    }
}

class Cliente implements GestionPersonal{
    public function agregar()
    {
        //insert into nombre, telefono, NIT -> base de datos
    }

    public function actualizar()
    {
        
    }

    public function eliminar()
    {
        
    }
}

class PayRoll implements GestionPlanilla{

    public function calcularSalario()
    {
        
    }

    public function generarPlanilla()
    {
        
    }
}



?>