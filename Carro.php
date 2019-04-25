<?php

namespace Ford;

use \Ford\Motor\MotorFlex;
use \Ford\Motor\InterfaceMotor as motor;

/**
 * Classe base para carro
 *
 * @author Edir
 * 
 */
class Carro implements MotorFlex
{
   const MODELO = "Fiesta";

   public $cor = "Branco";
   protected $potencia = 1.0;
   private $ligado = false;
   
   private $motor;


   /**
    * 
    * @param string $cor
    * @param MotorBase $motor
    */
   public function __construct($cor = "Branca", motor $motor) 
   {
       $this->cor = $cor;
       $this->motor = $motor;
   }

   /**
    * Liga o veiculo
    */   
   public function ligar()
   {
        $this->ligado = true;
        $this->motor->ligar();
   }
   
   /**
    * Acelera o motor do veiculo
    */
   public function acelerar()
   {
   
   }
   
   public function __call($name, $arguments) 
   {
       echo "Voce tentou chamar a função '$name' que não existe!";
   }
   
   public function __get($name) 
   {
       echo "Vc tentou ver a propriedade: $name";
   }
   
   public function __set($name, $value) {
       echo "Vc tentou colocar o valor $value no atributo $name";
   }
   
   // executa ao imprimir com o echo
   public function __toString() 
   {
      // self para a propria classe estatica
      // this para a instancia do objeto
      return "Modelo:" . self::MODELO . " - Potencia:". $this->potencia ;    
   }
   
   public function abastecer() 
   {
       
   }

}
