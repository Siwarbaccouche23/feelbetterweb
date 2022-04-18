<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class,['attr'=>array('placeholder'=> 'Enter your titre'),'required'=>false,])

            ->add('date',DateType::class,['widget'=>'single_text','required'=>false,])

            //->add('article')
            ->add('nomAuteur',TextType::class,['attr'=>array('placeholder'=> 'Enter your name'),'required'=>false,])
            //->add('approuver')
            ->add('theme',ChoiceType::class,['choices'=>['choisir theme'=> null,
             'psychotherapie'=> 'psychotherapie',
                'nutrition'=> 'nutrition',
                'sport'=> 'sport'],

                'required'=>false,]);
           // ->add('idexpert')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
