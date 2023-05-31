<?php

namespace App\Controller;

use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(): Response
    {
        //on récupère l'utilisateur
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);
        return $this->render('profil/index.html.twig', [
        'form' => $form -> createView(),
        ]);
    }
}
