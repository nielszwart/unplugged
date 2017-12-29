<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
                'label' => 'Content',
                'required' => false,
                'attr' => ['class' => 'ckeditor'],
            ])
            ->add('slide', CheckboxType::class, ['label' => 'Add as homepage slide', 'required' => false])
            ->add('slide_title', TextType::class, ['label' => 'Image text'])
            ->add('slide_text', TextareaType::class, [
                'label' => 'Slide text',
                'required' => false,
                'attr' => ['class' => 'ckeditor'],
            ])
            ->add('button_text', TextType::class, ['label' => 'Button text'])
            ->add('slide_image', FileType::class, ['label' => 'Slide image', 'required' => false])
            ->add('header', FileType::class, ['label' => 'Header image', 'required' => false])
        ;
    }
}