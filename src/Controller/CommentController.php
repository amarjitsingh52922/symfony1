<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id<\d+>}/vote/{direction<up|down>}",name="vote",methods="POST")
     */
    public function commentVote($id,$direction,LoggerInterface $logger)
    {
        if($direction=='up'){
            $currentVoteCount=rand(7,100);
            $logger->info("voteup");
        } else {
            $currentVoteCount=rand(0,6);
        }
        //return new JsonResponse(['votes'=>$currentVoteCount]);
        return $this->json(['votes'=>$currentVoteCount]);
    }
}