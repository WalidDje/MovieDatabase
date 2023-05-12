<?php

namespace App\Controller;

use App\ApiResource\callApiResource;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController {

   

    #[Route('/', name: 'app_main')]
    public function main (CallApiResource $callApiResource) {
        //dd($callApiResource->getMovieData());
        
        return $this->render('main.html.twig',['movies' => $callApiResource->getMovieData(),]);
    }

    #[Route('/movie', name: 'app_movie')]
    public function movie () {
        return $this->render('movie.html.twig');
    }
}