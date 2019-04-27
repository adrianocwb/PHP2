<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */

class Alunos 
{
    
   /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    
    private $nome;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    
    private $turma;
    
    /**
     * @ORM\Column(type="date")
     */
    
    private $datanascimento;
    
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTurma() {
        return $this->turma;
    }

    public function getDatanascimento() {
        return $this->datanascimento;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setTurma($turma) {
        $this->turma = $turma;
        return $this;
    }

    public function setDatanascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
        return $this;
    }



}
