<?php

require_once './Motor/InterfaceMotor.php';
require_once './Motor/MotorFlex.php';
require_once './Motor/MotorBase.php';
require_once './Motor/Motor10.php';
require_once './MWM/Motor10.php';

require_once './Carro.php';
require_once './Carro20.php';
require_once './Carro20Turbo.php';



$motor = new Ford\Motor\Motor10();

$diesel = new MWM\Motor10();

$carro = new Ford\Carro("Amarelo", $diesel);
//$carro->cor = "Azul";


$carro2 = new Ford\Carro20("Azul", $motor);
$carro2->ligarPilotoAutomotico();

$carro3 = new Ford\Carro20Turbo("Vermelho", $motor);
$carro3->acelerar();

//echo Carro::MODELO;

//echo Carro20Turbo::potencia();

//$carro->combustivel = 10;
//echo $carro->combustivel;


var_dump($motor);

var_dump($carro);
var_dump($carro2);
var_dump($carro3);

if ($carro2 instanceof MotorFlex)
{
    echo "Verdade";
} else {
    echo "False";
}