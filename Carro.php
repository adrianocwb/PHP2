<?php

/**
 * Classe base para Carro
 *
 * @author Adriano
 * 
 */
class Carro {

    public $cor = "Branco";
    private $modelo = "Fiesta";
    protected $potencia = 1.0;
    private $ligado = False;

    /**
     * 
     * @param type $cor
     */
    public function __construct($cor = "Branco") {
        $this->cor = $cor;
    }

    /**
     * Liga o veículo
     */
    public function ligar() {
        $this->ligado = true;
    }

    /**
     * Acelera o motor do veículo
     */
    function acelerar() {
        
    }

}
