<?php

namespace App\Controller;


use App\Entity\Films;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $randSearch = $em->getRepository(Films::class)->findAll();
        shuffle($randSearch);

        return $this->render('home/index.html.twig',[
            'newFilms' => $randSearch,
        ]);
    }

}
