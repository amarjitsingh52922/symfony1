<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{

    /**
     * @Route("/",name="homepage")
     */
    public function homepage()
    {
        return new Response("great first page set up finally dude!!!");
    }

    /**
     * @Route("/questions/{slug}",name="qname")
     */
     public function show($slug)
     {
        return new Response(sprintf(
            'Question asked , %s!',$slug
        ));
     }
}