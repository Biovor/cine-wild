<?php

namespace App\Controller;

use App\Entity\Films;
use App\Form\FilmsType;
use App\Repository\FilmsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/films")
 */
class FilmsController extends Controller
{
    /**
     * @Route("/", name="films_index", methods="GET")
     */
    public function index(FilmsRepository $filmsRepository): Response
    {
        return $this->render('films/index.html.twig', ['films' => $filmsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="films_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $film = new Films();
        $form = $this->createForm(FilmsType::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            $em->flush();

            return $this->redirectToRoute('films_index');
        }

        return $this->render('films/new.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="films_show", methods="GET")
     */
    public function show(Films $film): Response
    {
        return $this->render('films/show.html.twig', ['film' => $film]);
    }

    /**
     * @Route("/{id}/edit", name="films_edit", methods="GET|POST")
     */
    public function edit(Request $request, Films $film): Response
    {
        $form = $this->createForm(FilmsType::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('films_edit', ['id' => $film->getId()]);
        }

        return $this->render('films/edit.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="films_delete", methods="DELETE")
     */
    public function delete(Request $request, Films $film): Response
    {
        if ($this->isCsrfTokenValid('delete'.$film->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($film);
            $em->flush();
        }

        return $this->redirectToRoute('films_index');
    }
}
