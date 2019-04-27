<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PaginaController extends Controller
{
    /**
     * @Route("/pagina", name="pagina")
     */
    public function index()
    {
        return $this->render('pagina/index.html.twig', [
            'controller_name' => 'PaginaController',
        ]);
    }
    /**
     * @Route("/contato")
     */
    
    public function contato() 
    {
       return $this->render("pagina/contato.html.twig");
        
    }
}
