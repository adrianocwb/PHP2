<?php

namespace App\Controller;

use App\Entity\Alunos;
use App\Form\AlunosType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/alunos")
 */
class AlunosController extends Controller
{
    /**
     * @Route("/", name="alunos_index", methods={"GET"})
     */
    public function index(): Response
    {
        $alunos = $this->getDoctrine()
            ->getRepository(Alunos::class)
            ->findAll();

        return $this->render('alunos/index.html.twig', [
            'alunos' => $alunos,
        ]);
    }

    /**
     * @Route("/new", name="alunos_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $aluno = new Alunos();
        $form = $this->createForm(AlunosType::class, $aluno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($aluno);
            $entityManager->flush();

            return $this->redirectToRoute('alunos_index');
        }

        return $this->render('alunos/new.html.twig', [
            'aluno' => $aluno,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="alunos_show", methods={"GET"})
     */
    public function show(Alunos $aluno): Response
    {
        return $this->render('alunos/show.html.twig', [
            'aluno' => $aluno,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="alunos_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Alunos $aluno): Response
    {
        $form = $this->createForm(AlunosType::class, $aluno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('alunos_index', [
                'id' => $aluno->getId(),
            ]);
        }

        return $this->render('alunos/edit.html.twig', [
            'aluno' => $aluno,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="alunos_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Alunos $aluno): Response
    {
        if ($this->isCsrfTokenValid('delete'.$aluno->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($aluno);
            $entityManager->flush();
        }

        return $this->redirectToRoute('alunos_index');
    }
}
