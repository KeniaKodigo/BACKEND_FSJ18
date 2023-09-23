<?php
require "../clases/Conexion.php";

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
        $pdo = $this->conectar();
        //generamos la consulta
        $query = $pdo->query("SELECT * FROM estudiantes WHERE id_estado = 1");
        //ejecutemos la consulta
        $query->execute();

    }
}

?>