<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{

    /**
     * @Route("/",name="homepage")
     */
    public function homepage()
    {
        return $this->render('questions/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}",name="qname")
     */
     public function show($slug)
     {
        //dump();
        $answers = [
            'Make sure your cat is sitting purrrfectly still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        return $this->render('questions/show.html.twig',[
            'question'=>ucwords(str_replace("-"," ",$slug)),
            'answers'=>$answers
        ]);
     }
}