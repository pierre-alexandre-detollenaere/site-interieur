<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Auteur;
use App\Entity\Article;
use App\Entity\Produit;
use App\Entity\Commande;
use App\Form\AuteurType;
use App\Entity\Categorie;
use App\Form\ArticleType;
use App\Form\ProduitType;
use App\Form\CategorieType;
use App\Repository\UserRepository;
use App\Repository\AuteurRepository;
use App\Repository\ArticleRepository;
use App\Repository\ProduitRepository;
use App\Repository\CommandeRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommandeDetailRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/admin', name:'admin_')] // préfixe aux routes pour l'accès admin
class AdminController extends AbstractController
{

//------------------------------------- Admin Categorie -------------------------------------

    #[Route('/categorie_add', name: 'app_categorie_add')]
    public function addCategorie(Request $request, CategorieRepository $repo, SluggerInterface $slugger): Response
    {
        $categorie = new Categorie();

        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $slug = $slugger->slug($form->get('nom')->getData());

            $categorie->setSlug($slug);

            $repo->save($categorie, 1);

            // $this->addFlash("success", "La catégorie a bien été ajoutée !");

            return $this->redirectToRoute('admin_app_categories');
        }

        return $this->render('categorie/formulaireCategorie.html.twig', [
            'formCategorie' => $form->createView(),
        ]);
    }



    #[Route('/categorie_update_{{id<\d+>}}', name: 'app_categorie_update')]
    public function udpdateCategorie($id, Request $request, CategorieRepository $repo, SluggerInterface $slugger) {

        $categorie = $repo->find($id);

        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $slug = $slugger->slug($categorie->getNom());

            $categorie->setSlug($slug);

            $repo->save($categorie, 1);

            return $this->redirectToRoute('admin_app_categories');
        }

        return $this->render('categorie/formulaireCategorie.html.twig', [
            'formCategorie' => $form->createView()
        ]);
    }


    #[Route('/categorie_delete_{id<\d+>}', name: 'app_categorie_delete')]
    public function deleteCategorie($id, CategorieRepository $repo) {

        $categorie = $repo->find($id);

        $repo->remove($categorie, 1);

        return $this->redirectToRoute('admin_app_categories');
    }

    #[Route('/categories', name: 'app_categories')]
    public function showAllCategories(CategorieRepository $repo) {

        $categories = $repo->findAll();

        return $this->render('categorie/allCategories.html.twig', [
            'categories' => $categories
        ]);

    }


//------------------------------------- fin Admin Categorie -------------------------------------

//------------------------------------- Admin Article -------------------------------------

    #[Route('/article_add', name: 'app_article_add')]
    public function addArticle(Request $request, ArticleRepository $repo, SluggerInterface $slugger): Response
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('imageForm')->getData();

            if($file) {
                $fileName = $slugger->slug($article->getTitre()) . uniqid() . '.' . $file->guessExtension();

                try {
                    $file->move($this->getParameter('article_images'), $fileName);
                } catch(FileException $e) {

                }

                $article->setImage($fileName);
            }

            $article->setDateDeCreation(new DateTime("now"));

            $repo->save($article, 1);

            return $this->redirectToRoute('admin_app_articles');

        }

        return $this->render('article/formulaireArticle.html.twig', [
            'formArticle' => $form->createView()
        ]);
    }


    #[Route('/article_update_{id<\d+>}', name: 'app_article_update')]
    public function updateArticle($id, Request $request, ArticleRepository $repo, SluggerInterface $slugger) {

        $article = $repo->find($id);

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('imageForm')->getData();

            if($file) {
                $fileName = $slugger->slug($article->getTitre()) . uniqid() . '.' . $file->guessExtension();

                try {
                    $file->move($this->getParameter('article_images'), $fileName);
                } catch (FileException $e) {

                }

                $article->setImage($fileName);
            }

            $article->setDateDeModification(new DateTime("now"));

            $repo->save($article, 1);

            return $this->redirectToRoute('admin_app_articles');
        }

        return $this->render('article/formulaireArticle.html.twig', [
            'formArticle' => $form->createView()
        ]);
    }


    #[Route('/article_delete_{id<\d+>}', name: 'app_article_delete')]
    public function deleteArticle($id, ArticleRepository $repo) {

        $article = $repo->find($id);

        $repo->remove($article, 1);

        return $this->redirectToRoute('admin_app_articles');
    }

    #[Route('/articles', name: 'app_articles')]
    public function showArticles(ArticleRepository $repo) {

        $articles = $repo->findAll();

        //dd($articles);

        return $this->render('article/allArticles.html.twig', [
            'articles' => $articles
        ]);

    }



//------------------------------------- fin Admin Article -------------------------------------

//------------------------------------- début Admin Auteur -------------------------------------

    #[Route('/auteur_add', name: 'app_auteur_add')]
    public function addAuteur(Request $request, AuteurRepository $repo, SluggerInterface $slugger): Response
    {
        $auteur = new Auteur();

        $form = $this->createForm(AuteurType::class, $auteur);

        $form->handleRequest($request); //donne accès aux données POST du formulaire, c'est la méthode qui fait l'action de récupérer les données POST du formulaire qui se trouvent dans l'objet $request
        // l'objet $request est ce qui contient les données POST du formulaire
        if($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('imageForm')->getData();

            if($file) {
                $fileName = $slugger->slug($auteur->getFullName()) . uniqid() . '.' . $file->guessExtension();
                
                try {
                    $file->move($this->getParameter('auteur_images'), $fileName);
                }catch(FileException $e) {

                }

                $auteur->setImage($fileName);
            }

            $repo->save($auteur, 1);

            return $this->redirectToRoute('admin_app_auteurs');
            // on passe par une fonction qui fait le traitement ensuite on passe par une autre fonction qui elle fait le rendu
            // 
        }


        return $this->render('auteur/formulaireAuteur.html.twig', [ //affiche la page, fait le rendu
            'formAuteur' => $form->createView(),
        ]);
    }


    #[Route('/auteur_update_{id<\d+>}', name: 'app_auteur_update')]
    public function updateAuteur($id, Request $request, AuteurRepository $repo, SluggerInterface $slugger) {

        $auteur = $repo->find($id);

        $form = $this->createForm(AuteurType::class, $auteur);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('imageForm')->getData();

            if($file){
                $fileName = $slugger->slug($auteur->getFullName()) . uniqid() . '.' . $file->guessExtension();
                
                try {
                    $file->move($this->getParameter('auteur_images'), $fileName);
                } catch (FileException $e) {

                }

                $auteur->setImage($fileName);
            }

            $repo->save($auteur, 1);

            return $this->redirectToRoute('admin_app_auteurs');
        }

        return $this->render('auteur/formulaireAuteur.html.twig', [
            'formAuteur' => $form->createView()
        ]);

    }

    #[Route('/auteur_delete_{id<\d+>}', name: 'app_auteur_delete')]
    public function deleteAuteur($id, AuteurRepository $repo){

        $auteur = $repo->find($id);

        $repo->remove($auteur, 1);

        return $this->redirectToRoute('admin_app_auteurs');
    }

    #[Route('/auteurs', name: 'app_auteurs')]
    public function showAll(AuteurRepository $repo) {

        $auteurs = $repo->findAll();

        return $this->render('auteur/allAuteurs.html.twig', [
            'auteurs' => $auteurs
        ]);

    }

//------------------------------------- fin Admin Auteur -------------------------------------


//------------------------------------- début Admin "Produit"/Prestation -------------------------------------


    #[Route('/prestation_add', name: 'app_produit_add')]
    public function addPrestation(Request $request, ProduitRepository $repoProduit){

        $produit = new Produit();
        
        $form = $this->createForm(ProduitType::class, $produit);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $repoProduit->save($produit, 1);

            return $this->redirectToRoute('admin_app_produits');
        }

        return $this->render('produit/formulaireProduit.html.twig', [
            'formProduit' => $form->createView()
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

    #[Route('/prestation_update_{id<\d+>}', name: 'app_produit_update')]
    public function updateProduit($id, Request $request, ProduitRepository $repoProduit){

        $produit = $repoProduit->find($id);

        $form = $this->createForm(ProduitType::class, $produit);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $repoProduit->save($produit, 1);

            return $this->redirectToRoute('admin_app_produits');
        }

        return $this->render('produit/formulaireProduit.html.twig', [
            'formProduit' => $form->createView()
        ]);

    }

    #[Route('/prestation_delete_{id<\d+>}', name: 'app_produit_delete')]
    public function deleteProduit($id, ProduitRepository $repoProduit) {

        $produit = $repoProduit->find($id);

        $repoProduit->remove($produit, 1);

        return $this->redirectToRoute('admin_app_produits');

    }


//------------------------------------- fin Admin "Produit"/prestation -------------------------------------


//------------------------------------- début Admin Commandes -------------------------------------


    #[Route('/commandes', name: 'app_commandes')]
    public function showAllCommandes(CommandeRepository $repoCommande, UserRepository $repoUser, ProduitRepository $repoProduit, CommandeDetailRepository $repoDetail) {

        $commandes = $repoCommande->findAll();

        $users = $repoUser->findAll();

        $produits = $repoProduit->findAll();

        $details = $repoDetail->findAll();

        return $this->render('commande/allCommandes.html.twig', [
            "commandes" => $commandes,
            "users" => $users,
            'produits' => $produits,
            "details" => $details
        ]);

    }











    



}
