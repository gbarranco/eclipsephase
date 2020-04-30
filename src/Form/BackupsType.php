<?php

namespace App\Form;

use App\Entity\Backups;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BackupsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('backupDate')
            ->add('baseCog', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('baseCoo', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('baseInt', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('baseRef', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('baseAst', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('baseSom', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('baseVol', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('bonusCog', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('bonusCoo', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('bonusInt', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('bonusRef', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('bonusAst', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('bonusSom', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('bonusVol', TextType::class, [
                'attr' => ['onchange' => 'calcApt()']
            ])
            ->add('audacity', TextType::class)
            ->add('speed', TextType::class)
            ->add('stress', TextType::class)
            ->add('trauma', TextType::class)
            ->add('traumaText')
            ->add('baseDispersalWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'DispersalWeapons\')']
            ])
            ->add('bonusDispersalWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'DispersalWeapons\')']
            ])
            ->add('baseExoticRifles', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'ExoticRifles\')']
            ])
            ->add('bonusExoticRifles', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'ExoticRifles\')']
            ])
            ->add('baseGuidedWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'GuidedWeapons\')']
            ])
            ->add('bonusGuidedWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'GuidedWeapons\')']
            ])
            ->add('baseRayWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'RayWeapons\')']
            ])
            ->add('bonusRayWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'RayWeapons\')']
            ])
            ->add('baseKineticWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'KineticWeapons\')']
            ])
            ->add('bonusKineticWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'KineticWeapons\')']
            ])
            ->add('baseJetWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'JetWeapons\')']
            ])
            ->add('bonusJetWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'JetWeapons\')']
            ])
            ->add('baseBluntWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'BluntWeapons\')']
            ])
            ->add('bonusBluntWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'BluntWeapons\')']
            ])
            ->add('baseMeleeWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'MeleeWeapons\')']
            ])
            ->add('bonusMeleeWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'MeleeWeapons\')']
            ])
            ->add('baseEdgedWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'EdgedWeapons\')']
            ])
            ->add('bonusEdgedWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'EdgedWeapons\')']
            ])
            ->add('baseNonArmedFight', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'NonArmedFight\')']
            ])
            ->add('bonusNonArmedFight', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'NonArmedFight\')']
            ])
            ->add('baseMountedWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'MountedWeapons\')']
            ])
            ->add('bonusMountedWeapons', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'MountedWeapons\')']
            ])
            ->add('baseEvasion', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Evasion\')']
            ])
            ->add('bonusEvasion', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Evasion\')']
            ])
            ->add('baseFreeFall', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'FreeFall\')']
            ])
            ->add('bonusFreeFall', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'FreeFall\')']
            ])
            ->add('baseDisguise', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Disguise\')']
            ])
            ->add('bonusDisguise', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Disguise\')']
            ])
            ->add('baseRobbery', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Robbery\')']
            ])
            ->add('bonusRobbery', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Robbery\')']
            ])
            ->add('baseInfiltration', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Infiltration\')']
            ])
            ->add('bonusInfiltration', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Infiltration\')']
            ])
            ->add('baseClimbing', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Climbing\')']
            ])
            ->add('bonusClimbing', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Climbing\')']
            ])
            ->add('baseSwimming', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Swimming\')']
            ])
            ->add('bonusSwimming', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Swimming\')']
            ])
            ->add('baseParkour', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Parkour\')']
            ])
            ->add('bonusParkour', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Parkour\')']
            ])
            ->add('baseFlight', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Flight\')']
            ])
            ->add('bonusFlight', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Flight\')']
            ])
            ->add('baseDemolition', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Demolition\')']
            ])
            ->add('bonusDemolition', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Demolition\')']
            ])
            ->add('baseInfosec', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Infosec\')']
            ])
            ->add('bonusInfosec', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Infosec\')']
            ])
            ->add('baseInterface', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interface\')']
            ])
            ->add('bonusInterface', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interface\')']
            ])
            ->add('baseEquipment1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Equipment1\')']
            ])
            ->add('bonusEquipment1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Equipment1\')']
            ])
            ->add('baseEquipment2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Equipment2\')']
            ])
            ->add('bonusEquipment2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Equipment2\')']
            ])
            ->add('baseEquipment3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Equipment3\')']
            ])
            ->add('bonusEquipment3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Equipment3\')']
            ])
            ->add('baseMedicine1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Medicine1\')']
            ])
            ->add('bonusMedicine1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Medicine1\')']
            ])
            ->add('baseMedicine2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Medicine2\')']
            ])
            ->add('bonusMedicine2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Medicine2\')']
            ])
            ->add('baseProgramming', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Programming\')']
            ])
            ->add('bonusProgramming', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Programming\')']
            ])
            ->add('baseSearch', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Search\')']
            ])
            ->add('bonusSearch', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Search\')']
            ])
            ->add('basePsychoSurgery', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'PsychoSurgery\')']
            ])
            ->add('bonusPsychoSurgery', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'PsychoSurgery\')']
            ])
            ->add('baseExcavation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Excavation\')']
            ])
            ->add('bonusExcavation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Excavation\')']
            ])
            ->add('baseInvestigation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Investigation\')']
            ])
            ->add('bonusInvestigation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Investigation\')']
            ])
            ->add('baseNavigation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Navigation\')']
            ])
            ->add('bonusNavigation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Navigation\')']
            ])
            ->add('basePerception', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Perception\')']
            ])
            ->add('bonusPerception', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Perception\')']
            ])
            ->add('basePsiAssault', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'PsiAssault\')']
            ])
            ->add('bonusPsiAssault', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'PsiAssault\')']
            ])
            ->add('baseControl', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Control\')']
            ])
            ->add('bonusControl', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Control\')']
            ])
            ->add('baseSensation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Sensation\')']
            ])
            ->add('bonusSensation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Sensation\')']
            ])
            ->add('baseAnimalControl', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'AnimalControl\')']
            ])
            ->add('bonusAnimalControl', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'AnimalControl\')']
            ])
            ->add('baseImposture', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Imposture\')']
            ])
            ->add('bonusImposture', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Imposture\')']
            ])
            ->add('baseIntimidation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Intimidation\')']
            ])
            ->add('bonusIntimidation', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Intimidation\')']
            ])
            ->add('baseKinesics', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Kinesics\')']
            ])
            ->add('bonusKinesics', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Kinesics\')']
            ])
            ->add('basePersuasion', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Persuasion\')']
            ])
            ->add('bonusPersuasion', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Persuasion\')']
            ])
            ->add('baseProtocol', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Protocol\')']
            ])
            ->add('bonusProtocol', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Protocol\')']
            ])
            ->add('baseNetwork1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Network1\')']
            ])
            ->add('bonusNetwork1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Network1\')']
            ])
            ->add('baseNetwork2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Network2\')']
            ])
            ->add('bonusNetwork2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Network2\')']
            ])
            ->add('baseNetwork3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Network3\')']
            ])
            ->add('bonusNetwork3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Network3\')']
            ])
            ->add('baseNetwork4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Network4\')']
            ])
            ->add('bonusNetwork4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Network4\')']
            ])
            ->add('baseSubterfuge', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Subterfuge\')']
            ])
            ->add('bonusSubterfuge', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Subterfuge\')']
            ])
            ->add('basePiloting1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Piloting1\')']
            ])
            ->add('bonusPiloting1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Piloting1\')']
            ])
            ->add('basePiloting2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Piloting2\')']
            ])
            ->add('bonusPiloting2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Piloting2\')']
            ])
            ->add('basePiloting3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Piloting3\')']
            ])
            ->add('bonusPiloting3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Piloting3\')']
            ])
            ->add('basePiloting4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Piloting4\')']
            ])
            ->add('bonusPiloting4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Piloting4\')']
            ])
            ->add('baseArt1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Art1\')']
            ])
            ->add('bonusArt1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Art1\')']
            ])
            ->add('baseArt2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Art2\')']
            ])
            ->add('bonusArt2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Art2\')']
            ])
            ->add('baseArt3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Art3\')']
            ])
            ->add('bonusArt3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Art3\')']
            ])
            ->add('bonusArt4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Art4\')']
            ])
            ->add('baseArt4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Art4\')']
            ])
            ->add('baseInterest1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interest1\')']
            ])
            ->add('bonusInterest1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interest1\')']
            ])
            ->add('baseInterest2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interest2\')']
            ])
            ->add('bonusInterest2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interest2\')']
            ])
            ->add('baseInterest3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interest3\')']
            ])
            ->add('bonusInterest3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interest3\')']
            ])
            ->add('baseInterest4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interest4\')']
            ])
            ->add('bonusInterest4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Interest4\')']
            ])
            ->add('baseNativeLanguage', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'NativeLanguage\')']
            ])
            ->add('bonusNativeLanguage', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'NativeLanguage\')']
            ])
            ->add('baseLanguage1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Language1\')']
            ])
            ->add('bonusLanguage1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Language1\')']
            ])
            ->add('baseLanguage2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Language2\')']
            ])
            ->add('bonusLanguage2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Language2\')']
            ])
            ->add('baseLanguage3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Language3\')']
            ])
            ->add('bonusLanguage3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Language3\')']
            ])
            ->add('baseLanguage4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Language4\')']
            ])
            ->add('bonusLanguage4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Language4\')']
            ])
            ->add('baseProfession1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Profession1\')']
            ])
            ->add('bonusProfession1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Profession1\')']
            ])
            ->add('baseProfession2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Profession2\')']
            ])
            ->add('bonusProfession2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Profession2\')']
            ])
            ->add('baseProfession3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Profession3\')']
            ])
            ->add('bonusProfession3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Profession3\')']
            ])
            ->add('baseProfession4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Profession4\')']
            ])
            ->add('bonusProfession4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Profession4\')']
            ])
            ->add('baseTheory1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Theory1\')']
            ])
            ->add('bonusTheory1', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Theory1\')']
            ])
            ->add('baseTheory2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Theory2\')']
            ])
            ->add('bonusTheory2', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Theory2\')']
            ])
            ->add('baseTheory3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Theory3\')']
            ])
            ->add('bonusTheory3', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Theory3\')']
            ])
            ->add('baseTheory4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Theory4\')']
            ])
            ->add('bonusTheory4', TextType::class, [
                'attr' => ['onchange' => 'calcTotalSkill(\'Theory4\')']
            ])
            ->add('playableCharacter')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Backups::class,
        ]);
    }
}
