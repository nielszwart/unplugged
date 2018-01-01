<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class VitamineTestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question1', ChoiceType::class, [
                'label' => 'Ben je vegetariër, veganist of eet je niet met regelmaat dierlijke producten?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question2', ChoiceType::class, [
                'label' => 'Ben je vaak vermoeidheid en problemen met concentratie en geheugen?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question3', ChoiceType::class, [
                'label' => 'Heb je last van je darmen?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question4', ChoiceType::class, [
                'label' => 'Heeft je wel eens last van een ontstoken, branderige, prikkelbare tong of aften?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question5', ChoiceType::class, [
                'label' => 'Ervaar je wel eens tintelingen in de handen of voeten?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question6', ChoiceType::class, [
                'label' => 'Heeft u last van neerslachtigheid of voel je wel eens down?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question7', ChoiceType::class, [
                'label' => 'Kom je moeilijk in slaap of slaap je moeilijk door?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question8', ChoiceType::class, [
                'label' => 'Ben je wel eens duizelig of heb je last van bloedarmoede of oorsuizen?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question9', ChoiceType::class, [
                'label' => 'Heb je wel eens last van je maag of een maagoperatie ondergaan?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question10', ChoiceType::class, [
                'label' => 'Heb je wel eens stress en/of bent u ouder dan 55 jaar?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question11', ChoiceType::class, [
                'label' => 'Gebruikt u medicatie zoals rennies, maagbeschermers, maagzuurremmers of metformine?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('name', TextType::class, [
                'label' => 'Name',
                'label_attr' => ['class' => 'question'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'label_attr' => ['class' => 'question'],
            ])
        ;
    }
}