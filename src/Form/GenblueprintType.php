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
            ->add('question1a', ChoiceType::class, [
                'label' => 'Describe yourself',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Excited' => 'green',
                    'Ready to fight' => 'blue',
                    'Social' => 'red',
                ]
            ])
            ->add('question1b', ChoiceType::class, [
                'label' => 'Describe yourself',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Lively' => 'green',
                    'Incisive' => 'blue',
                    'Loving' => 'red',
                ]
            ])
            ->add('question1c', ChoiceType::class, [
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
            ->add('question1d', ChoiceType::class, [
                'label' => 'Describe yourself',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Creative' => 'green',
                    'Conscientious' => 'blue',
                    'Generous' => 'red',
                ]
            ])
            ->add('question1e', ChoiceType::class, [
                'label' => 'Describe yourself',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Fast learner' => 'green',
                    'Quick-witted' => 'blue',
                    'Thoughtful' => 'red',
                ]
            ])
            ->add('question1f', ChoiceType::class, [
                'label' => 'Describe yourself',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Bright' => 'green',
                    'Insightful' => 'blue',
                    'Quiet and thoughtful' => 'red',
                ]
            ])
            ->add('question2', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'My mother had a slim and fit shape when she was young' => 'green',
                    'My mother was athletically built when she was young, neither fat nor skinny' => 'blue',
                    'My mother was a bit heavy and somewhat chubby when she was young' => 'red',
                ]
            ])
            ->add('question3', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'My father had a slim and fit shape when he was young' => 'green',
                    'My father was athletically built when he was young, neither fat nor skinny' => 'blue',
                    'My father was a bit heavy and somewhat chubby when he was young' => 'red',
                ]
            ])
            ->add('question4', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I had a slim and fit shape when I was young' => 'green',
                    'I was athletically built when I was young, neither fat nor skinny' => 'blue',
                    'I was a bit heavy and somewhat chubby when I was young' => 'red',
                ]
            ])
            ->add('question5', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I have been slim and fit all my life' => 'green',
                    'I have been athletically built all my life, neither fat nor skinny' => 'blue',
                    'In my life, I have become heavier and somewhat more chubby ' => 'red',
                ]
            ])
            ->add('question6', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'My bones are light and I have clear-cut joints' => 'green',
                    'I have a medium bone structure' => 'blue',
                    'I have a heavy bone structure' => 'red',
                ]
            ])
            ->add('question7', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'As a child I was able to walk long distances' => 'green',
                    'As a child I was good at all sorts of sports' => 'blue',
                    'As a child I could easily run short distances' => 'red',
                ]
            ])
            ->add('question8', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I have always had a lot of energy' => 'green',
                    'I have always had varying energy levels' => 'blue',
                    'I have always had a stable energy level' => 'red',
                ]
            ])
            ->add('question9', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I am a light sleeper' => 'green',
                    'I often sleep well' => 'blue',
                    'I am a heavy sleeper' => 'red',
                ]
            ])
            ->add('question10', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'My mood is often changing' => 'green',
                    'I have control over my emotions and thoughts' => 'blue',
                    'I have a steady mood and balanced emotions' => 'red',
                ]
            ])
            ->add('question11', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'When I am stressed I can get worried and anxious' => 'green',
                    'When I am stressed I tend to avoid the stressful situation' => 'blue',
                    'When I am stressed I am irritable and angry' => 'red',
                ]
            ])
            ->add('question12', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Physical activity makes me feel more relaxed' => 'green',
                    'Physical activity makes me control my emotions' => 'blue',
                    'Physical activity decreases my weight' => 'red',
                ]
            ])
            ->add('question13', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'It’s difficult for me to gain weight' => 'green',
                    'It’s easy for me to gain and lose weight' => 'blue',
                    'It’s easy for me to gain weight, but difficult to lose weight' => 'red',
                ]
            ])
            ->add('question14', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I have a varying appetite, my eyes are often bigger than my belly' => 'green',
                    'I have a stable appetite and will feel an urge to eat whenever I skip a meal' => 'blue',
                    'I have a stable appetite, but it’s easy for me to skip a meal' => 'red',
                ]
            ])
            ->add('question15', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I have irregular stools which sometimes results in obstipation' => 'green',
                    'I have regular stools, sometimes twice or more a day' => 'blue',
                    'I have regular stools: heavy and firm' => 'red',
                ]
            ])
            ->add('question16', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I don’t digest optimally' => 'green',
                    'I digest constantly' => 'blue',
                    'I digest somewhat slowly' => 'red',
                ]
            ])
            ->add('question17', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I like salty snacks and fatty foods' => 'green',
                    'I prefer protein-rich foods such as chicken, meat, eggs and beans' => 'blue',
                    'I like bread and starches' => 'red',
                ]
            ])
            ->add('question18', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I like to remain physically active' => 'green',
                    'I enjoy physical activity in the form of a competition' => 'blue',
                    'I prefer relaxing activities' => 'red',
                ]
            ])
            ->add('question19', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I don’t sweat often and I have cold hands and feet' => 'green',
                    'I sweat like a regular person and have normal blood circulation' => 'blue',
                    'I sweat easily and have normal blood circulation' => 'red',
                ]
            ])
            ->add('question20', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I am often thirsty or my thirst level varies' => 'green',
                    'My thirst level is regular' => 'blue',
                    'I’m almost never thirsty' => 'red',
                ]
            ])
            ->add('question21', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I have small, active and dark eyes' => 'green',
                    'I have penetrating eyes' => 'blue',
                    'I have big eyes and big eyelids' => 'red',
                ]
            ])
            ->add('question22', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I have dry skin that easily flakes' => 'green',
                    'I have oily skin' => 'blue',
                    'I have a thick, cool and smooth skin' => 'red',
                ]
            ])
            ->add('question23', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I have a light skin and don’t easily tan' => 'green',
                    'I have a light skin and easily tan' => 'blue',
                    'I have a dark skin and easily tan' => 'red',
                ]
            ])
            ->add('question24', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I have brittle nails' => 'green',
                    'I have flexible nails that are strong' => 'blue',
                    'I have thick nails that are strong' => 'red',
                ]
            ])
            ->add('question25', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'My hair is dark, stiff, rough or frizzy ' => 'green',
                    'My hair is light and easily becomes grey' => 'blue',
                    'My hair is thick and wavy and is brilliant in color' => 'red',
                ]
            ])
            ->add('question26', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'I prefer a warm climate with high humidity ' => 'green',
                    'I prefer a cool climate' => 'blue',
                    'I have no climate preferences' => 'red',
                ]
            ])
            ->add('question27', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'At home, I like to set the temperature at 23 degrees or higher' => 'green',
                    'At home, I like to set the temperature in between 20 and 22 degrees' => 'blue',
                    'At home, I like to set the temperature at lower than 20 degrees' => 'red',
                ]
            ])
            ->add('question28', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Money is something that needs to be spent' => 'green',
                    'Money is necessary to live, but not very important' => 'blue',
                    'Money is something that needs to be saved' => 'red',
                ]
            ])
            ->add('question29', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'The best time for me to exercise is in the afternoon' => 'green',
                    'The best time for me to exercise is in the morning or afternoon' => 'blue',
                    'The best time for me to exercise is in the morning' => 'red',
                ]
            ])
            ->add('question30', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'With a weakened immune system I get tired, my reaction levels are slower and my body doesn´t function well' => 'green',
                    'With a weakened immune system, my digestion and bowel function declines' => 'blue',
                    'With a weakened immune system, I initially feel snotty' => 'red',
                ]
            ])
            ->add('question01', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'With a weakened immune system I get tired, my reaction levels are slower and my body doesn´t function well' => 'green',
                    'With a weakened immune system, my digestion and bowel function declines' => 'blue',
                    'With a weakened immune system, I initially feel snotty' => 'red',
                ]
            ])
            ->add('question02', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'With a weakened immune system I get tired, my reaction levels are slower and my body doesn´t function well' => 'green',
                    'With a weakened immune system, my digestion and bowel function declines' => 'blue',
                    'With a weakened immune system, I initially feel snotty' => 'red',
                ]
            ])
            ->add('question03', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'With a weakened immune system I get tired, my reaction levels are slower and my body doesn´t function well' => 'green',
                    'With a weakened immune system, my digestion and bowel function declines' => 'blue',
                    'With a weakened immune system, I initially feel snotty' => 'red',
                ]
            ])
            ->add('question04', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'With a weakened immune system I get tired, my reaction levels are slower and my body doesn´t function well' => 'green',
                    'With a weakened immune system, my digestion and bowel function declines' => 'blue',
                    'With a weakened immune system, I initially feel snotty' => 'red',
                ]
            ])
            ->add('question05', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'With a weakened immune system I get tired, my reaction levels are slower and my body doesn´t function well' => 'green',
                    'With a weakened immune system, my digestion and bowel function declines' => 'blue',
                    'With a weakened immune system, I initially feel snotty' => 'red',
                ]
            ])
            ->add('question06', ChoiceType::class, [
                'label' => 'What applies',
                'label_attr' => ['class' => 'question'],
                'required' => true,
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'With a weakened immune system I get tired, my reaction levels are slower and my body doesn´t function well' => 'green',
                    'With a weakened immune system, my digestion and bowel function declines' => 'blue',
                    'With a weakened immune system, I initially feel snotty' => 'red',
                ]
            ])

        ;
    }
}
