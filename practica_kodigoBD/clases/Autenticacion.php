<?php

require "./clases/Conexion.php";

class Autenticacion extends Conexion{
    protected $correo;
    protected $password;

    #metodo que valida el inicio de usuario de los coach
    public function autenticarUsuario(){
        if(isset($_POST['email'], $_POST['password'])){
            $this->correo = $_POST['email'];
            $this->password = $_POST['password'];

            $pdo = $this->conectar();
            $query = $pdo->prepare("SELECT id, nombre, correo, password FROM coach WHERE correo = ? AND password = ?");
            $resultado = $query->execute(["$this->correo","$this->password"]);

            if($resultado){
                //crear la sesion
            }else{
                echo "<div class='alert alert-danger' role='alert'>
                    Credenciales Incorrectas
                </div>";
            }
        }
    }
}

?>