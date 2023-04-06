<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Articles;
use App\Repository\ProduitsRepository;
use App\Repository\ArticlesRepository;

use App\Repository\AuteurRepository;
use App\Repository\CategorieRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ArticlesRepository $articlesRepository,
                          ProduitsRepository $produitsRepository,
                          AuteurRepository $auteurRepository,
                          CategorieRepository $categorieRepository,
                          ): Response
    {
        $produitAll = $produitsRepository->findAllLimit();
        $articleAll = $articlesRepository->findAll();

        $auteurAll = $auteurRepository->findAll();
        $categorieAll = $categorieRepository->findAll();

        // dump($produitAll);
        // dump($articleAll);

        return $this->render('home/index.html.twig', [
            'produits' => $produitAll,
            'articles' => $articleAll,
            'auteurs' => $auteurAll,
            'categories' => $categorieAll
        ]);
    }
}
