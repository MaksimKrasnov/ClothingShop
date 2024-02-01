<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ProductController extends AbstractController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    #[Route('/product/{id}', name: 'app_product')]
    public function showJeans(ProductRepository $productRepository,AuthenticationUtils $authenticationUtils, int $id): Response
    {
        $data = $productRepository->findByCategoryId($id);
        $lastUsername = $authenticationUtils->getLastUsername();
        if ($data == null) {
            return $this->render('registration/register.html.twig');
        }
        $html = $this->twig->render('product/index.html.twig', [
            'last_username' => $lastUsername,
            'data' => $data
        ]);

        return new Response($html);
    }
    
}
