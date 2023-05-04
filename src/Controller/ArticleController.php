<?php

namespace App\Controller;

use DateTime;
use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ArticleController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function showArticles(ArticleRepository $repo) {

        $articles = $repo->findAll();

        //dd($articles);

        return $this->render('article/allArticles.html.twig', [
            'articles' => $articles
        ]);

    }

    #[Route('/articles_all', name: 'app_articles_all')]
    public function showAllArticles(ArticleRepository $repo) {

        $articles = $repo->findAll();

        return $this->render('article/showAllArticles.html.twig', [
            'articles' => $articles
        ]);

    }

    #[Route('/article_{id<\d+>}', name: 'app_article')]
    public function showOneArticle($id, ArticleRepository $repo) {

        $article = $repo->find($id);


        return $this->render('article/oneArticle.html.twig', [
            'article' => $article
        ]);

    }



}
