<?php

namespace App\Form;

use App\Entity\Account;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name', TextType::class, ['label' => 'First name'])
            ->add('last_name_preposition', TextType::class, ['required' => false, 'label' => 'Preposition'])
            ->add('last_name', TextType::class, ['label' => 'Last name'])
            ->add('date_of_birth', DateType::class, ['widget' => 'single_text', 'label' => 'Date of birth'])
            ->add('gender', ChoiceType::class, [
                'label' => 'Gender',
                'choices' => [
                    'Male' => 'm',
                    'Female' => 'f',
                ],
            ])
            ->add('phone_number', TextType::class, ['label' => 'Phone number'])
            ->add('city_of_birth', TextType::class, ['label' => 'Birthplace']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Account::class,
        ]);
    }
}