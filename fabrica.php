<?php

require_once './Carro.php';
require_once './Carro20.php';
require_once './Carro20Turbo.php';

$carro = new Carro("Amarelo");
//$carro->cor = "Azul";

$carro2 = new Carro20();
$carro2->ligarPilotoAutomatico();

$carro3 = new Carro20Turbo;
$carro3->acelerar();

var_dump($carro);
var_dump($carro2);
var_dump($carro3);

