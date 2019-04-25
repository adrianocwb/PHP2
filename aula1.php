<?php

// POO - Programação orientado a objetos

// Fabrica FORD - carros

class Carro 
{
   // ATRIBUTOS -> propriedades -> adjetivo
   
   public $cor = "Branco";
   private $modelo = "Fiesta";
   private $potencia = 1.0;
   private $ligado = false;
   
   // METODOS -> Ações -> verbo
   
   public function ligar()
   {
        $this->ligado = true;
   }
   
   public function acelerar()
   {
   
   }
}

// nova instância
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

// Atribuindo uma referencia
$carro3 = $carro1;
$carro3->cor = "vermelho";

$carro4 = clone $carro3;
$carro4->cor = "preto";


var_dump($carro1);
var_dump($carro2);
var_dump($carro3);
var_dump($carro4);

if ($carro1 == $carro2)
{
    echo "\n\nVerdade\n\n";
} else {
    echo "\n\nFalso\n\n";
}










