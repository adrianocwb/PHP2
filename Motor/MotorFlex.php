<?php

namespace Ford\Motor;


/**
 * Inteface para Motores Flex
 * @author aluno
 */
interface MotorFlex 
{
    /**
     * Liga o carro
     */
    public function ligar();
    
    /**
     * Abastece o carro
     */
    public function abastecer();
}
