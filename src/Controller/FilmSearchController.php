<?php

namespace App\Controller;


use App\Entity\Films;
use App\Form\FilmSearchType;
use App\Repository\FilmsRepository;
use SensioLabs\Security\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilmSearchController extends Controller
{
    /**
     * @Route("/search", name="search")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(FilmSearchType::class);
        $form->handleRequest($request);
        $filmsSearch = '';


        if ($form->isValid() && $form->isSubmitted()) {
            $data = $form->getData();
            $directors = $data['director'];
            $actors = $data['actor'];
            $types = $data['typeFilms'];
            $publicAge = $data['publicAge'];
            $yearOfProds = $data['yearOfProduction'];

            $filmsSearch = $em->getRepository(Films::class)->searchBy($publicAge,
                $yearOfProds, $types, $actors, $directors);
        }

        return $this->render('film_search/index.html.twig', array(
            'form' => $form->createView(),
            'films' => $filmsSearch
        ));
    }

    /**
     * @Route("/detailed/movie/{id}", name="detailed_movie")
     */
    public function FilmDeatailedAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository(Films::class)
            ->findOneById($id);
        return $this->render('film_search/detailed_movie.html.twig', [
            'controller_name' => 'DetailedMovieController',
            'film' => $film
        ]);
    }

    /**
     * @Route ("/bande-anonce/{id}", name="b-a")
     */
    public function bandeAnnonceAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository(Films::class)
            ->findOneById($id);
        return $this->render('film_search/bande_annonce.html.twig', [
            'film' => $film
        ]);
    }

    /**
     * @Route("/ajax/{input}")
     * @Method("POST")
     *
     * @param Request $request
     * @param $input
     *
     * @return JsonResponse
     */
    public function autocompleteAction(Request $request, $input)
    {
        if ($request->isXmlHttpRequest()) {
            /**
             * @var $repository FilmsRepository
             */
            $repository = $this->getDoctrine()->getRepository('App:Films');
            $data = $repository->getLike($input);
            return new JsonResponse(array("data" => json_encode($data)));

        } else {
            throw new HttpException('500', 'Invalid call');
        }
    }
}
