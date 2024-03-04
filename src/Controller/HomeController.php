<?php
namespace App\Controller;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * Page d'accueil
     * 
     * @return  Response
     */
    public function index(): Response
    {
        // Entity Manager de Symfony
        $em         = $this->getDoctrine()->getManager();
        // On récupère tous les articles disponibles en base de données
        $articles   = $em->getRepository(Article::class)->findAll();
return $this->render('home/index.html.twig', [
            'articles'  => $articles
        ]);
    }
}

