<?php


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ToolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['label' => 'Title', 'required' => true])
            ->add('content', TextareaType::class, [
                'label' => 'Content',
                'required' => false,
                'attr' => ['class' => 'ckeditor'],
            ])
            ->add('image', FileType::class, ['label' => 'Image', 'required' => false])
            ->add('file', FileType::class, ['label' => 'File', 'required' => false])
            ->add('link', TextType::class, ['label' => 'Link', 'required' => false, 'empty_data' => ''])
            ->add('new_tab', CheckboxType::class, ['label' => 'Open link in new tab', 'required' => false])
        ;
    }
}
