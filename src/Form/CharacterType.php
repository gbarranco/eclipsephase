<?php

namespace App\Form;

use App\Entity\Character;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CharacterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('characterName')
            ->add('background')
            ->add('faction')
            ->add('sexualIdentity', ChoiceType::class,[
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Intersexué' => 'Intersexué',
                    'Neutre' => 'Neutre'
                ]
            ])
            ->add('age')
            ->add('audacityPoints')
            ->add('xp')
            ->add('motivations')
            ->add('aRep')
            ->add('gRep')
            ->add('cRep')
            ->add('iRep')
            ->add('eRep')
            ->add('rRep')
            ->add('fRep')
            ->add('attributes')
            ->add('idInfos')
            ->add('psiPasses')
            ->add('notes')
            ->add('Player')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Character::class,
        ]);
    }
}
