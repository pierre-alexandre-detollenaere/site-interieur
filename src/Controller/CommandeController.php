<?php

namespace App\Controller;

use DateTime;
use App\Entity\Commande;
use App\Entity\CommandeDetail;
use App\Repository\ProduitRepository;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommandeDetailRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    #[Route('/commander', name: 'app_commander')]
    public function passerCommande(RequestStack $requestStack, CommandeRepository $repoCommande, CommandeDetailRepository $repoComDetail, ProduitRepository $repoProduit, EntityManagerInterface $manager): Response
    {
        $commande = new Commande();

        $user = $this->getUser();

        if(!$user) {
            $this->addFlash('error', "Veuillez vous connecter afin de passer commande.");

            return $this->redirectToRoute('app_login');
        }

        $session = $requestStack->getSession();
        $panier = $session->get('panier', []);

        if(!$panier)
        {
            $this->addFlash('error', "Votre panier est vide. Aucune commande à passer.");
            return $this->redirectToRoute("app_panier");
        }
        
        $dataPanier = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $produit = $repoProduit->find($id);

            $dataPanier[] = [
                "produit" => $produit,
                "quantite" => $quantite,
                "sousTotal" => $produit->getPrix() * $quantite
            ];

            $total += $produit->getPrix() * $quantite;
        }

        $commande->setUser($user)
                    ->setDateDeCommande(new DateTime('now'))
                    ->setMontant($total);
        $repoCommande->save($commande);

        foreach ($dataPanier as $value) {
            $commandeDetail = new CommandeDetail();

            $produit = $value['produit'];
            $quantite = $value['quantite'];
            $sousTotal = $value['sousTotal'];

            $commandeDetail->setQuantite($quantite)
                            ->setPrix($sousTotal)
                            ->setProduit($produit)
                            ->setCommande($commande);
            
                            $repoComDetail->save($commandeDetail);
        }

        $manager->flush();

        $session->remove("panier");

        $this->addFlash("success", "Votre commande à bien été enregistrée.");

        return $this->redirectToRoute("app_panier");
    }
}
