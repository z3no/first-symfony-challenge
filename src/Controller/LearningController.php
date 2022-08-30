<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/about-me')]
    public function aboutMe(): Response
    {
        $someText = 'Hey this is some text, you can use your imagination. Fill it in some more, lorem ipsum and all.';

        return $this->render('aboutme.html.twig', [
            'text' => $someText,
        ]);
    }
}