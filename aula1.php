<?php

// POO - Programação Orientado a Objetos
// Fabrica FORD - carros

class Carro {

    // ATRIBUTOS -> Propriedades	-> Adjetivo

    public $cor = "Branco";
    private $modelo = "Fiesta";
    private $Potencia = 1.0;
    private $ligado = False;

    //METODOS -> Ações -> verbo

    public function ligar() {
        $this->ligado = true;
    }

    function acelerar() {
        
    }

}

// Nova instância
$carro1 = new Carro();
$carro2 = new Carro();

$carro1->cor = "Azul";
$carro1->ligar();

// atribui o valor
$a = 2;
$b = $a;
var_dump($a, $b);
$b = 4;
var_dump($a, $b);

// Atrubuindo uma referencia
$carro3 = $carro1;
$carro3->cor = "Vermelho";

$carro4 = clone $carro3;
$carro4->cor = "preto";


var_dump($carro1);
var_dump($carro2);

if ($carro1 = $carro2) {
    echo "\n\nVerdade\n\n";
} else {
    echo "\n\nFalso\n\n";
}







