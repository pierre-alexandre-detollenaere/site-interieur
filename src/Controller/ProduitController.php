<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{

    #[Route('/prestation_{id<\d+>}', name: 'app_produit')]
    public function showOneProduit($id, ProduitRepository $repoProduit){

        $produit = $repoProduit->find($id);

        return $this->render('produit/oneProduit.html.twig', [
            'produit' => $produit
        ]);
    }

    #[Route('/prestations', name: 'app_produits')]
    public function showAllPrestation(ProduitRepository $repoProduit, CategorieRepository $repo) {

        $produits = $repoProduit->findAll();
        $categories = $repo->findAll();

        return $this->render('produit/allProduits.html.twig', [
            'produits' => $produits,
            'categories' => $categories
        ]);
    }

    #[Route('/prestations_client', name: 'app_prestations_client')]
    public function showPrestationsClient(ProduitRepository $repoProduit, CategorieRepository $repo){

        $produits = $repoProduit->findAll();
        $categories = $repo->findAll();

        return $this->render('produit/allPrestationsClient.html.twig', [
            'produits' => $produits,
            'categories' => $categories
        ]);

    }

    
}
