<?php
require "./clases/Conexion.php";

class Estudiante extends Conexion{
    protected $id;
    protected $nombre;
    protected $direccion;
    protected $carnet;
    protected $bootcamp;
    protected $estado;

    //obtener todos los estudiantes activos
    public function getAll(){
        //llamamos al metodo conectar de la clase conexion
        $pdo = $this->conectar(); //PDO
        //generamos la consulta
        $query = $pdo->query("SELECT estudiantes.*, bootcamp.bootcamp FROM estudiantes INNER JOIN bootcamp ON estudiantes.id_bootcamp = bootcamp.id WHERE estudiantes.id_estado = 1");
        //ejecutemos la consulta
        $query->execute(); //[]
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);//arreglo de objetos
        return $resultado;
    }

    //obtener los bootcamps
    public function getBootcamps(){
        //llamamos al metodo conectar de la clase conexion
        $pdo = $this->conectar(); //PDO
        //generamos la consulta
        $query = $pdo->query("SELECT id, bootcamp FROM bootcamp");
        //ejecutemos la consulta
        $query->execute(); //[]
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);//arreglo de objetos
        return $resultado;
    }


    //obtener materia
    public function getMaterias(){
        //llamamos al metodo conectar de la clase conexion
        $pdo = $this->conectar(); //PDO
        //generamos la consulta
        $query = $pdo->query("SELECT id, nombre FROM materia");
        //ejecutemos la consulta
        $query->execute(); //[]
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);//arreglo de objetos
        return $resultado;
    }
}

?>