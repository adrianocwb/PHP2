<?php

namespace Ford\Motor;

/**
 * Motor Base
 *
 * @author aluno
 */
abstract class MotorBase implements InterfaceMotor
{
   const POTENCIA = 1.0;
   
   private  $acelaracao = 0;
   
   private $temperatura = 0;
   
   private $ligado = false;


   /**
    * Liga o Motor
    */
   public function ligar()
   {
       $this->ligado = true;
   }
   
   /**
    * Desliga o motor
    */
   public function desligar()
   {
       $this->ligado = false;
   }
   
   /**
    * Acelera o motor
    * @param int $potencia
    */
   public function acelerar($potencia)
   {
       $this->acelaracao = $potencia;
   }
   
   /**
    * Informa a temperatura do motor
    * @return int
    */
   public function verTemperatura()
   {
       return $this->temperatura;
   }
    
   
}
