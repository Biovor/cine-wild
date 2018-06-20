<?php

namespace App\Controller;

use App\Entity\PublicAge;
use App\Form\PublicAgeType;
use App\Repository\PublicAgeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/public/age")
 */
class PublicAgeController extends Controller
{
    /**
     * @Route("/", name="public_age_index", methods="GET")
     */
    public function index(PublicAgeRepository $publicAgeRepository): Response
    {
        return $this->render('public_age/index.html.twig', ['public_ages' => $publicAgeRepository->findAll()]);
    }

    /**
     * @Route("/new", name="public_age_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $publicAge = new PublicAge();
        $form = $this->createForm(PublicAgeType::class, $publicAge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($publicAge);
            $em->flush();

            return $this->redirectToRoute('public_age_index');
        }

        return $this->render('public_age/new.html.twig', [
            'public_age' => $publicAge,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="public_age_show", methods="GET")
     */
    public function show(PublicAge $publicAge): Response
    {
        return $this->render('public_age/show.html.twig', ['public_age' => $publicAge]);
    }

    /**
     * @Route("/{id}/edit", name="public_age_edit", methods="GET|POST")
     */
    public function edit(Request $request, PublicAge $publicAge): Response
    {
        $form = $this->createForm(PublicAgeType::class, $publicAge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('public_age_edit', ['id' => $publicAge->getId()]);
        }

        return $this->render('public_age/edit.html.twig', [
            'public_age' => $publicAge,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="public_age_delete", methods="DELETE")
     */
    public function delete(Request $request, PublicAge $publicAge): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publicAge->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($publicAge);
            $em->flush();
        }

        return $this->redirectToRoute('public_age_index');
    }
}
