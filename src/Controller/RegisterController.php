<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index()
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        return $this->render('index.html.twig' , [
            'controller_name' => 'RegisterController' ,
            'form' => $form->createView()
        ]);
    }
}
