<?php


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class GenblueprintType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('1', ChoiceType::class, [
                'label' => 'Describe yourself',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Enthousiastic' => 'green',
                    'Driven' => 'blue',
                    'Social' => 'red',
                ]
            ])
            ->add('2', ChoiceType::class, [
                'label' => 'Describe yourself',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Lively' => 'green',
                    'Resolute' => 'blue',
                    'Loving' => 'red',
                ]
            ])
            ->add('3', ChoiceType::class, [
                'label' => 'Describe yourself',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Cheerful' => 'green',
                    'Courteous' => 'blue',
                    'Friendly' => 'red',
                ]
            ])
        ;
    }
}