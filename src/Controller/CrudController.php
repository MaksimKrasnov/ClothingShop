<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\AddProductFormType;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;

class CrudController extends AbstractController
{
    #[Route('/adminPanel', name: 'adminPanel')]
    public function showAdminPanel()
    {
        return $this->render('crud/index.html.twig');
    }
    #[Route('/product/add', name: 'addProduct')]
    public function addProduct(
        Request $request,
        EntityManagerInterface $manager,
    ): Response {
        $new_product = new Product();
        $form = $this->createForm(AddProductFormType::class, $new_product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new_product = $form->getData();
            $manager->persist($new_product);
            $manager->flush();
        }
        return $this->render('crud/addProduct.html.twig', [
            'addForm' => $form,
        ]);
    }
    #[Route('/product/delete', name: 'deleteProduct')]
    public function deleteProduct(
        ProductRepository $productRepository,

    ) {
        $data = $productRepository->findAllAsArray();
        $html = $this->render('crud/deleteProduct.html.twig', [
            'data' => $data
        ]);
        return new Response($html);
    }
    #[Route('/product/delete/{id}', name: 'deleteProductById')]
    public function deleteProductById (Request $request, EntityManagerInterface $entityManager, int $id)
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        if (!$product) {
            throw $this->createNotFoundException(
                'No drink found for id ' . $id
            );
        }

        $entityManager->remove($product);
        $entityManager->flush();
        return $this->render('crud/index.html.twig');
    }
    #[Route('/product/update/{id}', name:'updateProduct')]
    public function updateProduct(Request $request, EntityManagerInterface $entityManager, int $id){
        $product = $entityManager->getRepository(Product::class)->find($id);
        $form = $this->createForm(AddProductFormType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new_product = $form->getData();
            $entityManager->persist($new_product);
            $entityManager->flush();
        }
        return $this->render('crud/addProduct.html.twig', [
            'addForm' => $form,
        ]);
    }
}
