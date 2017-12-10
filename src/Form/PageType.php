<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['label' => 'Title'])
            ->add('content', TextareaType::class, [
                'label' => 'Content'
            ])
            ->add('slide', CheckboxType::class, ['label' => 'Add homepage slide'])
            ->add('slide_title', TextType::class, ['label' => 'Image text'])
            ->add('slide_text', TextareaType::class, [
                'label' => 'Slide text'
            ])
            ->add('button_text', TextType::class, ['label' => 'Button text'])
        ;
    }
}