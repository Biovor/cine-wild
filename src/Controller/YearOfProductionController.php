<?php

namespace App\Controller;

use App\Entity\YearOfProduction;
use App\Form\YearOfProductionType;
use App\Repository\YearOfProductionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/year/of/production")
 */
class YearOfProductionController extends Controller
{
    /**
     * @Route("/", name="year_of_production_index", methods="GET")
     */
    public function index(YearOfProductionRepository $yearOfProductionRepository): Response
    {
        return $this->render('year_of_production/index.html.twig', ['year_of_productions' => $yearOfProductionRepository->findAll()]);
    }

    /**
     * @Route("/new", name="year_of_production_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $yearOfProduction = new YearOfProduction();
        $form = $this->createForm(YearOfProductionType::class, $yearOfProduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($yearOfProduction);
            $em->flush();

            return $this->redirectToRoute('year_of_production_index');
        }

        return $this->render('year_of_production/new.html.twig', [
            'year_of_production' => $yearOfProduction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="year_of_production_show", methods="GET")
     */
    public function show(YearOfProduction $yearOfProduction): Response
    {
        return $this->render('year_of_production/show.html.twig', ['year_of_production' => $yearOfProduction]);
    }

    /**
     * @Route("/{id}/edit", name="year_of_production_edit", methods="GET|POST")
     */
    public function edit(Request $request, YearOfProduction $yearOfProduction): Response
    {
        $form = $this->createForm(YearOfProductionType::class, $yearOfProduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('year_of_production_edit', ['id' => $yearOfProduction->getId()]);
        }

        return $this->render('year_of_production/edit.html.twig', [
            'year_of_production' => $yearOfProduction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="year_of_production_delete", methods="DELETE")
     */
    public function delete(Request $request, YearOfProduction $yearOfProduction): Response
    {
        if ($this->isCsrfTokenValid('delete'.$yearOfProduction->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($yearOfProduction);
            $em->flush();
        }

        return $this->redirectToRoute('year_of_production_index');
    }
}
