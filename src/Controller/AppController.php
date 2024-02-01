<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AppController extends AbstractController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    #[Route('/index', name: 'indexApp')]
    public function index(AuthenticationUtils $authenticationUtils,): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();

        $html = $this->twig->render('index.html.twig', [
            'last_username' => $lastUsername,
        ]);

        return new Response($html);
    }
}
