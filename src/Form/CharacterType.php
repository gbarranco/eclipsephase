<?php

namespace App\Form;

use App\Entity\Character;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class CharacterType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $player = $this->security->getUser();
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
            ->add('Player', EntityType::class, [
                'class' => 'App\Entity\Player',
                'query_builder' => function (EntityRepository $er) use ($player) {
                    return $er->createQueryBuilder('p')
                        ->andWhere('p.id = :playerId')
                        ->setParameter(':playerId', $player->getId())
                        ->orderBy('p.playerName', 'ASC');
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Character::class,
        ]);
    }
}
