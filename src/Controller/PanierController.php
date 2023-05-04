<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    #[Route('/panier_add_{id<\d+>}', name: 'app_panier_add')]
    public function addPanier($id, RequestStack $requestStack): Response
    {

        $session = $requestStack->getSession();

        $panier = $session->get("panier", []);

        if(empty($panier[$id])) {
            $panier[$id] = 1;

        }else{
            $panier[$id]++;
        }

        $session->set("panier", $panier);

        return $this->redirectToRoute("app_panier");
    }


    #[Route('/panier', name: 'app_panier')]
    public function showPanier(RequestStack $requestStack, ProduitRepository $repoProduit) {

        $session = $requestStack->getSession();
        $panier = $session->get("panier", []);
        $dataPanier = [];
        $total = 0;

        foreach($panier as $id => $quantite) {

            $produit = $repoProduit->find($id);

            $dataPanier[] = [
                "produit" => $produit,
                "quantite" => $quantite
            ];

            $total += $produit->getPrix() * $quantite;
        }

        return $this->render('panier/index.html.twig', [
            'dataPanier' => $dataPanier,
            'total' => $total
        ]);

    }


    #[Route('/panier_delete_product_{id<\d+>}', name: 'app_panier_delete_product')]
    public function deleteProduct($id, RequestStack $requestStack) {

        $session = $requestStack->getSession();
        $panier = $session->get("panier", []);

        if(!empty($panier[$id])) {

            unset($panier[$id]);

        }else {
            $this->addFlash("error", "Le produit que vous essayez de retirer du panier n'existe pas.");

            return $this->redirectToRoute('app_panier');
        }

        $session->set("panier", $panier);

        $this->addFlash("success", "Le produit a bien été retiré du panier.");

        return $this->redirectToRoute('app_panier');
    }



}
