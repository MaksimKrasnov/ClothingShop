<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use App\Repository\CategoryRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityManagerInterface;

class AddProductFormType extends AbstractType
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'query_builder' => function (CategoryRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                },
                'label' => 'Категория товара',
                'row_attr' => [
                    'class' => 'p-3 text-bg-dark',
                ],
            ])
            ->add('name', TextType::class,  [
                'label' => 'Наименование',

                'attr' => [
                    'placeholder' => 'Наименование',
                ],
                'row_attr' => [
                    'class' => 'p-3 text-bg-dark',
                ],
            ])
            ->add('size', TextType::class,  [
                'label' => 'Размер',

                'attr' => [
                    'placeholder' => 'Размер',
                ],
                'row_attr' => [
                    'class' => 'p-3 text-bg-dark',
                ],
            ])
            ->add('price', IntegerType::class,  [
                'label' => 'Цена',

                'attr' => [
                    'placeholder' => 'Цена',
                ],
                'row_attr' => [
                    'class' => 'p-3 text-bg-dark',
                ],
            ])

            ->add('description', TextType::class,  [
                'label' => 'Описание',

                'attr' => [
                    'placeholder' => 'Описание',
                ],
                'row_attr' => [
                    'class' => 'p-3 text-bg-dark',
                ],
            ])
            ->add('imageLink', TextType::class,  [
                'label' => 'Ссылка на изображение',

                'attr' => [
                    'placeholder' => 'Ссылка на изображение',
                ],
                'row_attr' => [
                    'class' => 'p-3 text-bg-dark',
                ],
            ]);
    }
    public function transform($value)
    {
        return $value ? $value->getId() : '';
    }

    public function reverseTransform($value)
    {
        return $this->entityManager->getRepository(Category::class)->find($value);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
