<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CategorieController extends AbstractController
{

    #[Route('/categorie_{id<\d+>}', name: 'app_categorie')]
    public function showCategorie($id, CategorieRepository $repo) {

        $categorie = $repo->find($id);

        $produits = $categorie->getProduits();

        return $this->render('categorie/oneCategorie.html.twig', [
            'categorie' => $categorie,
            'produits' => $produits
        ]);

    }





}
