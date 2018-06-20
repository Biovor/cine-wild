<?php

namespace App\Controller;

use App\Entity\TypeFilms;
use App\Form\TypeFilmsType;
use App\Repository\TypeFilmsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/type/films")
 */
class TypeFilmsController extends Controller
{
    /**
     * @Route("/", name="type_films_index", methods="GET")
     */
    public function index(TypeFilmsRepository $typeFilmsRepository): Response
    {
        return $this->render('type_films/index.html.twig', ['type_films' => $typeFilmsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="type_films_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $typeFilm = new TypeFilms();
        $form = $this->createForm(TypeFilmsType::class, $typeFilm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeFilm);
            $em->flush();

            return $this->redirectToRoute('type_films_index');
        }

        return $this->render('type_films/new.html.twig', [
            'type_film' => $typeFilm,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_films_show", methods="GET")
     */
    public function show(TypeFilms $typeFilm): Response
    {
        return $this->render('type_films/show.html.twig', ['type_film' => $typeFilm]);
    }

    /**
     * @Route("/{id}/edit", name="type_films_edit", methods="GET|POST")
     */
    public function edit(Request $request, TypeFilms $typeFilm): Response
    {
        $form = $this->createForm(TypeFilmsType::class, $typeFilm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_films_edit', ['id' => $typeFilm->getId()]);
        }

        return $this->render('type_films/edit.html.twig', [
            'type_film' => $typeFilm,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_films_delete", methods="DELETE")
     */
    public function delete(Request $request, TypeFilms $typeFilm): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeFilm->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeFilm);
            $em->flush();
        }

        return $this->redirectToRoute('type_films_index');
    }
}
