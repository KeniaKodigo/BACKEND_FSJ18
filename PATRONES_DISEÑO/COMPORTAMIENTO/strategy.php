<?php

class FormaPago{
    //code..
}

#Aplicando Strategy
interface StrategyPagos{
    public function procesarPago();
}

class Efectivo implements StrategyPagos{

    public function procesarPago(){
        return "Pagaste en efectivo";
    }
}

class Tarjeta implements StrategyPagos{

    public function procesarPago(){
        return "Pagaste con tarjeta de credito, se te descontara el proximo mes";
    }
}

class PayPal implements StrategyPagos{

    public function procesarPago(){
        return "Pagaste con paypall, se te envio la factura por via correo";
    }
}

class Bitcoin implements StrategyPagos{

    public function procesarPago(){
        return "Pagaste por via Bitcoin";
    }
}

#clase que va recibir las estrategias
class ProcesarPago{

    #atributo privado
    private StrategyPagos $estrategia_pago;

    //metodo set (pide) y get (retornar)
    public function setPago(StrategyPagos $estrategia){ //Efectivo
        $this->estrategia_pago = $estrategia;
    }

    public function getPago(){
        return $this->estrategia_pago->procesarPago(); //Pagaste en efectivo
    }
}

$pago = new ProcesarPago();
$pago->setPago(new Tarjeta);
echo $pago->getPago();
echo "<br>";
$pago2 = new ProcesarPago();
$pago2->setPago(new PayPal); //proceso pago
echo $pago2->getPago();
echo "<br>";
$pago3 = new ProcesarPago();
$pago3->setPago(new Bitcoin);
echo $pago3->getPago();

?>