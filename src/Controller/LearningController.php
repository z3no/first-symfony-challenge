<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\Type\UserProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/about-me', name: 'about_me')]
    public function aboutMe(): Response
    {
        $someText = 'Hey this is some text, you can use your imagination. Fill it in some more, lorem ipsum and all.';
        $name = 'unknown';

        return $this->render('aboutme.html.twig', [
            'text' => $someText,
        ]);
    }

    #[Route('/', name: 'show_my_name')]
    public function showMyName(Request $request) : Response
    {
        $user = new User();
        $name = $user->getName();

        $form = $this->createForm(UserProfileType::class, $user, [
            'action' => $this->generateUrl('show_my_name'),
            'method' => 'POST',
        ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $name = $user->getName();
            return $this->render('aboutme.html.twig', [
                'name' => $name,
            ]);
        }

        return $this->render('base.html.twig', [
            'name' => $name,
            'form' => $form->createView(),
        ]);
    }

//    #[Route('/change-my-name', name: 'change_my_name')]
//    public function changeMyName() : Response
//    {
//        $user = new User();
//        $name = $user->getName();
//
//        return $this->render('base.html.twig', [
//            'name' => $name,
//        ]);
//    }
}