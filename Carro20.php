<?php

namespace Ford;

/**
 * Carro 2.0
 *
 * @author aluno
 */
class Carro20 extends Carro 
{
    private $pilotoAutomotatico = false;
    
    
    /**
     * Liga o autopilot
     */
    public function ligarPilotoAutomotico()
    {
        $this->pilotoAutomotatico = true;
        parent::ligar();
        
    }
    
    /*
     * Sobrecarga - sobreescrita
     */
    public function __construct($cor = "Branca", $motor) 
    {
        //faz o fluxo do pai
        parent::__construct($cor, $motor);
        
        $this->potencia = 2.0;
        
    }
}
