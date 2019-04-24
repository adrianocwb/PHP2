<?php

/**
 * Description of Carro20
 *
 * @author aluno
 */
class Carro20 extends Carro {

private $pilotoAutomatico = false;


/**
 * Liga piloto autormatico
 */
public function ligarPilotoAutomatico()
{
$this->pilotoAutomatico = true;
parent::ligar();
}
/**
 * 
 * Sobrecarga - sobreescrita
 */
public function __construct($cor = "Branca")
 {
//faz o fluxo do pai
    parent::__construct($cor);
    
    $this->potencia = 2.0;
 }

}