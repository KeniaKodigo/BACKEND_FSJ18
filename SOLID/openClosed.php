<?php

#envio notificacion
class Notificador{

    public function enviar_notificacion($tipo, $mensaje, $destinatario){
        switch($tipo){
            case "correo":
                //code..
                break;
            
            case "SMS":
                //code..
                break;
            
            case "Slack":
                //code..
            
            default:
                //code..
        }
    }
}

#aplicando el principio /clase abstracta / interface

interface TipoNot{
    public function envio($msj, $destino);
}

class CorreoElectronico implements TipoNot{
    public function envio($msj, $destino){
        //code..
    }
}



abstract class TipoNotificador{
    abstract function envio($mensaje, $destinatario);
}

class Correo extends TipoNotificador{
    public function envio($mensaje, $destinatario){
        //code..
    }
}

class SMS extends TipoNotificador{
    public function envio($mensaje, $destinatario){
        //code..
    }
}

class Slack extends TipoNotificador{
    public function envio($mensaje, $destinatario){
        //code..
    }
}

class Facebook extends TipoNotificador{
    public function envio($mensaje, $destinatario){
        //code..
    }
}




?>