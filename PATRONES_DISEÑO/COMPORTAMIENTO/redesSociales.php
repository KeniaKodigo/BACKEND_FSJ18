<?php

interface StrategyRedes{
    public function enviar_mensaje($mensaje);
}

#estrategias
class Slack implements StrategyRedes{

    public function enviar_mensaje($mensaje)
    {
        return "El mensaje enviado a travez de slack: " . $mensaje;
    }
}

class Facebook implements StrategyRedes{

    public function enviar_mensaje($mensaje)
    {
        return "El mensaje enviado a travez de facebook: " . $mensaje;
    }
}

class WhatsApp implements StrategyRedes{

    public function enviar_mensaje($mensaje)
    {
        return "El mensaje enviado a travez de whatsApp: " . $mensaje;
    }
}

#clase donde se escogen las estrategias
class Compartir{
    private StrategyRedes $strategy_red;

    //metodos set y get

    #escogemos la estrategia
    public function setMensaje(StrategyRedes $redes){
        $this->strategy_red = $redes;
    }

    public function getMensaje($mensaje){
        return $this->strategy_red->enviar_mensaje($mensaje);
    }
}

$red = new Compartir();
$red->setMensaje(new Facebook);
echo $red->getMensaje("Mañana es 15 de septiembre");
echo "<br>";
$red2 = new Compartir();
$red2->setMensaje(new Slack);
echo $red2->getMensaje("Hola Mundo");

?>