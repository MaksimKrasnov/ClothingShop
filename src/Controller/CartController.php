<?php

namespace App\Controller;

use App\Form\PhoneFormType;
use App\Entity\Phone;

use App\Repository\ProductRepository;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use Symfony\Component\Routing\Annotation\Route;
use TextFlow\SMSApi\TextFlowClient;

class CartController extends AbstractController
{
    /**
     * @var Product[]
     */
    private $products;
    #[Route('/cart/add/{productId}', name: 'app_cart', methods: ('POST'))]

    public function addToCart(Request $request,  AuthenticationUtils $authenticationUtils, ProductRepository $productRepository, LoggerInterface $logger, $productId): Response
    {
        // Получаем объект товара по ID
        $product = $productRepository->findById($productId);

        if (!$product) {
            throw $this->createNotFoundException('Товар не найден');
        }
        $cart = $request->getSession()->get('cart', []);
        $cart[$productId] = $product[0];
        $request->getSession()->set('cart', $cart);
        $lastUsername = $authenticationUtils->getLastUsername();


        // Перенаправляем пользователя на страницу корзины
        return $this->redirectToRoute('indexApp');
    }

    #[Route('/cart/view', name: 'view_cart')]


    public function viewCart(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        $session = $request->getSession();
        $phone = new Phone();
        $form = $this->createForm(PhoneFormType::class, $phone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $phone = $form->getData();
            $client = new TextFlowClient("HwpuQs2v0nxCpUEPyu1Xv11Mvi5Nnrx2wXWfdwgOaj6fF8GFwuOaA3SLVwsgr7gN");


            $client->send_sms($phone->getName(), "Ваш заказ принят");
            $request->getSession()->set('cart', []);
        }

        $cart = $session->get('cart');

        $lastUsername = $authenticationUtils->getLastUsername();

        //Отображаем представление с товарами в корзине
        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
            'last_username' => $lastUsername,
            'phoneForm' => $form,
        ]);
    }
}
