<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class MagnesiumTestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question1', ChoiceType::class, [
                'label' => 'Drink je wekelijks koolzuurhoudende dranken (ook spa rood)?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja, ik drink bijna dagelijks koolzuurhoudende dranken' => 'Ja, ik drink bijna dagelijks koolzuurhoudende dranken',
                    'Ja, ik drink niet meer dan 5 glazen koolzuurhoudende drank per week' => 'Ja, ik drink niet meer dan 5 glazen koolzuurhoudende drank per week',
                    'Nee, ik drink geen koolzuurhoudende dranken' => 'Nee, ik drink geen koolzuurhoudende dranken',
                ]
            ])
            ->add('question2', ChoiceType::class, [
                'label' => 'Eet je regelmatig suiker in je voeding of eet je regelmatig gebakjes, taarten, desserts, snoep of andere voedingsmiddelen met veel suiker?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja, ik kan niet van zoetigheid afblijven' => 'Ja, ik kan niet van zoetigheid afblijven',
                    'Ik probeer minder suiker in te nemen' => 'Ik probeer minder suiker in te nemen',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question3', ChoiceType::class, [
                'label' => 'Drink je dagelijks koffie, thee of ander cafeine houdende dranken?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja, wel meer dan 3 kopjes per dag' => 'Ja, wel meer dan 3 kopjes per dag',
                    'Ja, maar het blijft meestal bij 1 a 2 kopjes per dag' => 'Ja, maar het blijft meestal bij 1 a 2 kopjes per dag',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question4', ChoiceType::class, [
                'label' => 'Heb je dagelijks veel stress te verwerken?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja, dagelijks heb ik wel een stress momenten' => 'Ja, dagelijks heb ik wel een stress momenten',
                    'Soms, maar niet dagelijks' => 'Soms, maar niet dagelijks',
                    'Nee, ik heb geen stress' => 'Nee, ik heb geen stress',
                ]
            ])
            ->add('question5', ChoiceType::class, [
                'label' => 'Als je gaat slapen...',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'heb je moeite met inslapen' => 'heb je moeite met inslapen',
                    'word je steeds wakker' => 'word je steeds wakker',
                    'val je snel in slaap' => 'val je snel in slaap',
                    'heb ik wel eens last van verkrampte spieren tijdens mijn slaap' => 'heb ik wel eens last van verkrampte spieren tijdens mijn slaap',
                ]
            ])
            ->add('question6', ChoiceType::class, [
                'label' => 'Gebruik je medicijnen m.b.t. je bloedruk, je hart of longen?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja, ik gebruik dit soort medicijnen' => 'Ja, ik gebruik dit soort medicijnen',
                    'Nee, maar ik heb wel lichamelijke klachten in die richting' => 'Nee, maar ik heb wel lichamelijke klachten in die richting',
                    'Nee ik gebruik geen medicijnen' => 'Nee ik gebruik geen medicijnen',
                ]
            ])
            ->add('question7', ChoiceType::class, [
                'label' => 'Drink je gemiddeld meer dan 7 glazen alcohol per week?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question8', ChoiceType::class, [
                'label' => 'Heb je wel eens last van een trillend ooglid of andere spiertrillingen?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                ]
            ])
            ->add('question9', ChoiceType::class, [
                'label' => 'Heb je diabetes type I of II?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Ja' => 'Ja',
                    'Nee' => 'Nee',
                    'Weet ik niet' => 'Weet ik niet',
                ]
            ])
            ->add('question10', ChoiceType::class, [
                'label' => 'Wat is jouw leeftijd?',
                'label_attr' => ['class' => 'question'],
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'Jonger dan 40' => 'Jonger dan 40',
                    '40-55' => '40-55',
                    '55+' => '55+'
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