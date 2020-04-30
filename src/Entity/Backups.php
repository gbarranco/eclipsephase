<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BackupsRepository")
 */
class Backups
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Character", inversedBy="backups")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Character $playableCharacter = null;

    /**
     * @ORM\Column(type="string")
     */
    private ?string $backupDate = null;

    /**
     * @ORM\Column(type="integer")
     */
    private int $baseCog = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $baseCoo = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $baseInt = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $baseRef = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $baseAst = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $baseSom = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $baseVol = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $bonusCog = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $bonusCoo = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $bonusInt = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $bonusRef = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $bonusAst = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $bonusSom = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $bonusVol = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $audacity = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $speed = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $stress = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $trauma = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $traumaText = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseDispersalWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusDispersalWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseExoticRifles = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusExoticRifles = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseGuidedWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusGuidedWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseRayWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusRayWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseKineticWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusKineticWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseJetWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusJetWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseBluntWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusBluntWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseMeleeWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusMeleeWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseEdgedWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusEdgedWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseNonArmedFight = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusNonArmedFight = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseMountedWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusMountedWeapons = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseEvasion = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusEvasion = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseFreeFall = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusFreeFall = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseDisguise = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusDisguise = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseRobbery = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusRobbery = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseInfiltration = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusInfiltration = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseClimbing = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusClimbing = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseSwimming = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusSwimming = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseParkour = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusParkour = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseFlight = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusFlight = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseDemolition = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusDemolition = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseInfosec = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusInfosec = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseInterface = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusInterface = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseEquipment1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusEquipment1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseEquipment2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusEquipment2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseEquipment3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusEquipment3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseMedicine1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusMedicine1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseMedicine2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusMedicine2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseProgramming = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusProgramming = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseSearch = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusSearch = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $basePsychoSurgery = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusPsychoSurgery = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseExcavation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusExcavation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseInvestigation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusInvestigation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseNavigation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusNavigation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $basePerception = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusPerception = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $basePsiAssault = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusPsiAssault = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseControl = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusControl = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseSensation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusSensation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseAnimalControl = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusAnimalControl = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseImposture = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusImposture = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseIntimidation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusIntimidation = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseKinesics = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusKinesics = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $basePersuasion = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusPersuasion = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseProtocol = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusProtocol = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseNetwork1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusNetwork1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseNetwork2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusNetwork2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseNetwork3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusNetwork3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseNetwork4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusNetwork4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseSubterfuge = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusSubterfuge = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $basePiloting1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusPiloting1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $basePiloting2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusPiloting2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $basePiloting3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusPiloting3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $basePiloting4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusPiloting4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseArt1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusArt1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseArt2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusArt2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseArt3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusArt3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusArt4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseArt4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseInterest1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusInterest1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseInterest2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusInterest2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseInterest3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusInterest3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseInterest4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusInterest4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseNativeLanguage = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusNativeLanguage = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseLanguage1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusLanguage1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseLanguage2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusLanguage2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseLanguage3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusLanguage3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseLanguage4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusLanguage4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseProfession1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusProfession1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseProfession2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusProfession2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseProfession3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusProfession3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseProfession4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusProfession4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseTheory1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusTheory1 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseTheory2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusTheory2 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseTheory3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusTheory3 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $baseTheory4 = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $bonusTheory4 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayableCharacter(): ?Character
    {
        return $this->playableCharacter;
    }

    public function setPlayableCharacter(?Character $playableCharacter): self
    {
        $this->playableCharacter = $playableCharacter;

        return $this;
    }

    public function getBackupDate(): ?string
    {
        return $this->backupDate;
    }

    public function setBackupDate(string $backupDate): self
    {
        $this->backupDate = $backupDate;

        return $this;
    }

    public function getBaseCog(): ?int
    {
        return $this->baseCog;
    }

    public function setBaseCog(int $baseCog): self
    {
        $this->baseCog = $baseCog;

        return $this;
    }

    public function getBaseCoo(): ?int
    {
        return $this->baseCoo;
    }

    public function setBaseCoo(int $baseCoo): self
    {
        $this->baseCoo = $baseCoo;

        return $this;
    }

    public function getBaseInt(): ?int
    {
        return $this->baseInt;
    }

    public function setBaseInt(int $baseInt): self
    {
        $this->baseInt = $baseInt;

        return $this;
    }

    public function getBaseRef(): ?int
    {
        return $this->baseRef;
    }

    public function setBaseRef(int $baseRef): self
    {
        $this->baseRef = $baseRef;

        return $this;
    }

    public function getBaseAst(): ?int
    {
        return $this->baseAst;
    }

    public function setBaseAst(int $baseAst): self
    {
        $this->baseAst = $baseAst;

        return $this;
    }

    public function getBaseSom(): ?int
    {
        return $this->baseSom;
    }

    public function setBaseSom(int $baseSom): self
    {
        $this->baseSom = $baseSom;

        return $this;
    }

    public function getBaseVol(): ?int
    {
        return $this->baseVol;
    }

    public function setBaseVol(int $baseVol): self
    {
        $this->baseVol = $baseVol;

        return $this;
    }

    public function getBonusCog(): ?int
    {
        return $this->bonusCog;
    }

    public function setBonusCog(int $bonusCog): self
    {
        $this->bonusCog = $bonusCog;

        return $this;
    }

    public function getBonusCoo(): ?int
    {
        return $this->bonusCoo;
    }

    public function setBonusCoo(int $bonusCoo): self
    {
        $this->bonusCoo = $bonusCoo;

        return $this;
    }

    public function getBonusInt(): ?int
    {
        return $this->bonusInt;
    }

    public function setBonusInt(int $bonusInt): self
    {
        $this->bonusInt = $bonusInt;

        return $this;
    }

    public function getBonusRef(): ?int
    {
        return $this->bonusRef;
    }

    public function setBonusRef(int $bonusRef): self
    {
        $this->bonusRef = $bonusRef;

        return $this;
    }

    public function getBonusAst(): ?int
    {
        return $this->bonusAst;
    }

    public function setBonusAst(int $bonusAst): self
    {
        $this->bonusAst = $bonusAst;

        return $this;
    }

    public function getBonusSom(): ?int
    {
        return $this->bonusSom;
    }

    public function setBonusSom(int $bonusSom): self
    {
        $this->bonusSom = $bonusSom;

        return $this;
    }

    public function getBonusVol(): ?int
    {
        return $this->bonusVol;
    }

    public function setBonusVol(int $bonusVol): self
    {
        $this->bonusVol = $bonusVol;

        return $this;
    }

    public function getAudacity(): ?int
    {
        return $this->audacity;
    }

    public function setAudacity(int $audacity): self
    {
        $this->audacity = $audacity;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getStress(): ?int
    {
        return $this->stress;
    }

    public function setStress(int $stress): self
    {
        $this->stress = $stress;

        return $this;
    }

    public function getTrauma(): ?int
    {
        return $this->trauma;
    }

    public function setTrauma(?int $trauma): self
    {
        $this->trauma = $trauma;

        return $this;
    }

    public function getTraumaText(): ?string
    {
        return $this->traumaText;
    }

    public function setTraumaText(?string $traumaText): self
    {
        $this->traumaText = $traumaText;

        return $this;
    }

    public function getBaseDispersalWeapons(): ?int
    {
        return $this->baseDispersalWeapons;
    }

    public function setBaseDispersalWeapons(int $baseDispersalWeapons): self
    {
        $this->baseDispersalWeapons = $baseDispersalWeapons;

        return $this;
    }

    public function getBonusDispersalWeapons(): ?int
    {
        return $this->bonusDispersalWeapons;
    }

    public function setBonusDispersalWeapons(?int $bonusDispersalWeapons): self
    {
        $this->bonusDispersalWeapons = $bonusDispersalWeapons;

        return $this;
    }

    public function getBaseExoticRifles(): ?int
    {
        return $this->baseExoticRifles;
    }

    public function setBaseExoticRifles(?int $baseExoticRifles): self
    {
        $this->baseExoticRifles = $baseExoticRifles;

        return $this;
    }

    public function getBonusExoticRifles(): ?int
    {
        return $this->bonusExoticRifles;
    }

    public function setBonusExoticRifles(?int $bonusExoticRifles): self
    {
        $this->bonusExoticRifles = $bonusExoticRifles;

        return $this;
    }

    public function getBaseGuidedWeapons(): ?int
    {
        return $this->baseGuidedWeapons;
    }

    public function setBaseGuidedWeapons(?int $baseGuidedWeapons): self
    {
        $this->baseGuidedWeapons = $baseGuidedWeapons;

        return $this;
    }

    public function getBonusGuidedWeapons(): ?int
    {
        return $this->bonusGuidedWeapons;
    }

    public function setBonusGuidedWeapons(?int $bonusGuidedWeapons): self
    {
        $this->bonusGuidedWeapons = $bonusGuidedWeapons;

        return $this;
    }

    public function getBaseRayWeapons(): ?int
    {
        return $this->baseRayWeapons;
    }

    public function setBaseRayWeapons(?int $baseRayWeapons): self
    {
        $this->baseRayWeapons = $baseRayWeapons;

        return $this;
    }

    public function getBonusRayWeapons(): ?int
    {
        return $this->bonusRayWeapons;
    }

    public function setBonusRayWeapons(?int $bonusRayWeapons): self
    {
        $this->bonusRayWeapons = $bonusRayWeapons;

        return $this;
    }

    public function getBaseKineticWeapons(): ?int
    {
        return $this->baseKineticWeapons;
    }

    public function setBaseKineticWeapons(?int $baseKineticWeapons): self
    {
        $this->baseKineticWeapons = $baseKineticWeapons;

        return $this;
    }

    public function getBonusKineticWeapons(): ?int
    {
        return $this->bonusKineticWeapons;
    }

    public function setBonusKineticWeapons(?int $bonusKineticWeapons): self
    {
        $this->bonusKineticWeapons = $bonusKineticWeapons;

        return $this;
    }

    public function getBaseJetWeapons(): ?int
    {
        return $this->baseJetWeapons;
    }

    public function setBaseJetWeapons(?int $baseJetWeapons): self
    {
        $this->baseJetWeapons = $baseJetWeapons;

        return $this;
    }

    public function getBonusJetWeapons(): ?int
    {
        return $this->bonusJetWeapons;
    }

    public function setBonusJetWeapons(?int $bonusJetWeapons): self
    {
        $this->bonusJetWeapons = $bonusJetWeapons;

        return $this;
    }

    public function getBaseBluntWeapons(): ?int
    {
        return $this->baseBluntWeapons;
    }

    public function setBaseBluntWeapons(?int $baseBluntWeapons): self
    {
        $this->baseBluntWeapons = $baseBluntWeapons;

        return $this;
    }

    public function getBonusBluntWeapons(): ?int
    {
        return $this->bonusBluntWeapons;
    }

    public function setBonusBluntWeapons(?int $bonusBluntWeapons): self
    {
        $this->bonusBluntWeapons = $bonusBluntWeapons;

        return $this;
    }

    public function getBaseMeleeWeapons(): ?int
    {
        return $this->baseMeleeWeapons;
    }

    public function setBaseMeleeWeapons(?int $baseMeleeWeapons): self
    {
        $this->baseMeleeWeapons = $baseMeleeWeapons;

        return $this;
    }

    public function getBonusMeleeWeapons(): ?int
    {
        return $this->bonusMeleeWeapons;
    }

    public function setBonusMeleeWeapons(?int $bonusMeleeWeapons): self
    {
        $this->bonusMeleeWeapons = $bonusMeleeWeapons;

        return $this;
    }

    public function getBaseEdgedWeapons(): ?int
    {
        return $this->baseEdgedWeapons;
    }

    public function setBaseEdgedWeapons(?int $baseEdgedWeapons): self
    {
        $this->baseEdgedWeapons = $baseEdgedWeapons;

        return $this;
    }

    public function getBonusEdgedWeapons(): ?int
    {
        return $this->bonusEdgedWeapons;
    }

    public function setBonusEdgedWeapons(?int $bonusEdgedWeapons): self
    {
        $this->bonusEdgedWeapons = $bonusEdgedWeapons;

        return $this;
    }

    public function getBaseNonArmedFight(): ?int
    {
        return $this->baseNonArmedFight;
    }

    public function setBaseNonArmedFight(?int $baseNonArmedFight): self
    {
        $this->baseNonArmedFight = $baseNonArmedFight;

        return $this;
    }

    public function getBonusNonArmedFight(): ?int
    {
        return $this->bonusNonArmedFight;
    }

    public function setBonusNonArmedFight(?int $bonusNonArmedFight): self
    {
        $this->bonusNonArmedFight = $bonusNonArmedFight;

        return $this;
    }

    public function getBaseMountedWeapons(): ?int
    {
        return $this->baseMountedWeapons;
    }

    public function setBaseMountedWeapons(?int $baseMountedWeapons): self
    {
        $this->baseMountedWeapons = $baseMountedWeapons;

        return $this;
    }

    public function getBonusMountedWeapons(): ?int
    {
        return $this->bonusMountedWeapons;
    }

    public function setBonusMountedWeapons(?int $bonusMountedWeapons): self
    {
        $this->bonusMountedWeapons = $bonusMountedWeapons;

        return $this;
    }

    public function getBaseEvasion(): ?int
    {
        return $this->baseEvasion;
    }

    public function setBaseEvasion(?int $baseEvasion): self
    {
        $this->baseEvasion = $baseEvasion;

        return $this;
    }

    public function getBonusEvasion(): ?int
    {
        return $this->bonusEvasion;
    }

    public function setBonusEvasion(?int $bonusEvasion): self
    {
        $this->bonusEvasion = $bonusEvasion;

        return $this;
    }

    public function getBaseFreeFall(): ?int
    {
        return $this->baseFreeFall;
    }

    public function setBaseFreeFall(?int $baseFreeFall): self
    {
        $this->baseFreeFall = $baseFreeFall;

        return $this;
    }

    public function getBonusFreeFall(): ?int
    {
        return $this->bonusFreeFall;
    }

    public function setBonusFreeFall(?int $bonusFreeFall): self
    {
        $this->bonusFreeFall = $bonusFreeFall;

        return $this;
    }

    public function getBaseDisguise(): ?int
    {
        return $this->baseDisguise;
    }

    public function setBaseDisguise(?int $baseDisguise): self
    {
        $this->baseDisguise = $baseDisguise;

        return $this;
    }

    public function getBonusDisguise(): ?int
    {
        return $this->bonusDisguise;
    }

    public function setBonusDisguise(?int $bonusDisguise): self
    {
        $this->bonusDisguise = $bonusDisguise;

        return $this;
    }

    public function getBaseRobbery(): ?int
    {
        return $this->baseRobbery;
    }

    public function setBaseRobbery(?int $baseRobbery): self
    {
        $this->baseRobbery = $baseRobbery;

        return $this;
    }

    public function getBonusRobbery(): ?int
    {
        return $this->bonusRobbery;
    }

    public function setBonusRobbery(?int $bonusRobbery): self
    {
        $this->bonusRobbery = $bonusRobbery;

        return $this;
    }

    public function getBaseInfiltration(): ?int
    {
        return $this->baseInfiltration;
    }

    public function setBaseInfiltration(?int $baseInfiltration): self
    {
        $this->baseInfiltration = $baseInfiltration;

        return $this;
    }

    public function getBonusInfiltration(): ?int
    {
        return $this->bonusInfiltration;
    }

    public function setBonusInfiltration(?int $bonusInfiltration): self
    {
        $this->bonusInfiltration = $bonusInfiltration;

        return $this;
    }

    public function getBaseClimbing(): ?int
    {
        return $this->baseClimbing;
    }

    public function setBaseClimbing(?int $baseClimbing): self
    {
        $this->baseClimbing = $baseClimbing;

        return $this;
    }

    public function getBonusClimbing(): ?int
    {
        return $this->bonusClimbing;
    }

    public function setBonusClimbing(?int $bonusClimbing): self
    {
        $this->bonusClimbing = $bonusClimbing;

        return $this;
    }

    public function getBaseSwimming(): ?int
    {
        return $this->baseSwimming;
    }

    public function setBaseSwimming(?int $baseSwimming): self
    {
        $this->baseSwimming = $baseSwimming;

        return $this;
    }

    public function getBonusSwimming(): ?int
    {
        return $this->bonusSwimming;
    }

    public function setBonusSwimming(?int $bonusSwimming): self
    {
        $this->bonusSwimming = $bonusSwimming;

        return $this;
    }

    public function getBaseParkour(): ?int
    {
        return $this->baseParkour;
    }

    public function setBaseParkour(?int $baseParkour): self
    {
        $this->baseParkour = $baseParkour;

        return $this;
    }

    public function getBonusParkour(): ?int
    {
        return $this->bonusParkour;
    }

    public function setBonusParkour(?int $bonusParkour): self
    {
        $this->bonusParkour = $bonusParkour;

        return $this;
    }

    public function getBaseFlight(): ?int
    {
        return $this->baseFlight;
    }

    public function setBaseFlight(?int $baseFlight): self
    {
        $this->baseFlight = $baseFlight;

        return $this;
    }

    public function getBonusFlight(): ?int
    {
        return $this->bonusFlight;
    }

    public function setBonusFlight(?int $bonusFlight): self
    {
        $this->bonusFlight = $bonusFlight;

        return $this;
    }

    public function getBaseDemolition(): ?int
    {
        return $this->baseDemolition;
    }

    public function setBaseDemolition(?int $baseDemolition): self
    {
        $this->baseDemolition = $baseDemolition;

        return $this;
    }

    public function getBonusDemolition(): ?int
    {
        return $this->bonusDemolition;
    }

    public function setBonusDemolition(?int $bonusDemolition): self
    {
        $this->bonusDemolition = $bonusDemolition;

        return $this;
    }

    public function getBaseInfosec(): ?int
    {
        return $this->baseInfosec;
    }

    public function setBaseInfosec(?int $baseInfosec): self
    {
        $this->baseInfosec = $baseInfosec;

        return $this;
    }

    public function getBonusInfosec(): ?int
    {
        return $this->bonusInfosec;
    }

    public function setBonusInfosec(?int $bonusInfosec): self
    {
        $this->bonusInfosec = $bonusInfosec;

        return $this;
    }

    public function getBaseInterface(): ?int
    {
        return $this->baseInterface;
    }

    public function setBaseInterface(?int $baseInterface): self
    {
        $this->baseInterface = $baseInterface;

        return $this;
    }

    public function getBonusInterface(): ?int
    {
        return $this->bonusInterface;
    }

    public function setBonusInterface(?int $bonusInterface): self
    {
        $this->bonusInterface = $bonusInterface;

        return $this;
    }

    public function getBaseEquipment1(): ?int
    {
        return $this->baseEquipment1;
    }

    public function setBaseEquipment1(?int $baseEquipment1): self
    {
        $this->baseEquipment1 = $baseEquipment1;

        return $this;
    }

    public function getBonusEquipment1(): ?int
    {
        return $this->bonusEquipment1;
    }

    public function setBonusEquipment1(?int $bonusEquipment1): self
    {
        $this->bonusEquipment1 = $bonusEquipment1;

        return $this;
    }

    public function getBaseEquipment2(): ?int
    {
        return $this->baseEquipment2;
    }

    public function setBaseEquipment2(?int $baseEquipment2): self
    {
        $this->baseEquipment2 = $baseEquipment2;

        return $this;
    }

    public function getBonusEquipment2(): ?int
    {
        return $this->bonusEquipment2;
    }

    public function setBonusEquipment2(?int $bonusEquipment2): self
    {
        $this->bonusEquipment2 = $bonusEquipment2;

        return $this;
    }

    public function getBaseEquipment3(): ?int
    {
        return $this->baseEquipment3;
    }

    public function setBaseEquipment3(?int $baseEquipment3): self
    {
        $this->baseEquipment3 = $baseEquipment3;

        return $this;
    }

    public function getBonusEquipment3(): ?int
    {
        return $this->bonusEquipment3;
    }

    public function setBonusEquipment3(?int $bonusEquipment3): self
    {
        $this->bonusEquipment3 = $bonusEquipment3;

        return $this;
    }

    public function getBaseMedicine1(): ?int
    {
        return $this->baseMedicine1;
    }

    public function setBaseMedicine1(?int $baseMedicine1): self
    {
        $this->baseMedicine1 = $baseMedicine1;

        return $this;
    }

    public function getBonusMedicine1(): ?int
    {
        return $this->bonusMedicine1;
    }

    public function setBonusMedicine1(?int $bonusMedicine1): self
    {
        $this->bonusMedicine1 = $bonusMedicine1;

        return $this;
    }

    public function getBaseMedicine2(): ?int
    {
        return $this->baseMedicine2;
    }

    public function setBaseMedicine2(?int $baseMedicine2): self
    {
        $this->baseMedicine2 = $baseMedicine2;

        return $this;
    }

    public function getBonusMedicine2(): ?int
    {
        return $this->bonusMedicine2;
    }

    public function setBonusMedicine2(?int $bonusMedicine2): self
    {
        $this->bonusMedicine2 = $bonusMedicine2;

        return $this;
    }

    public function getBaseProgramming(): ?int
    {
        return $this->baseProgramming;
    }

    public function setBaseProgramming(?int $baseProgramming): self
    {
        $this->baseProgramming = $baseProgramming;

        return $this;
    }

    public function getBonusProgramming(): ?int
    {
        return $this->bonusProgramming;
    }

    public function setBonusProgramming(?int $bonusProgramming): self
    {
        $this->bonusProgramming = $bonusProgramming;

        return $this;
    }

    public function getBaseSearch(): ?int
    {
        return $this->baseSearch;
    }

    public function setBaseSearch(?int $baseSearch): self
    {
        $this->baseSearch = $baseSearch;

        return $this;
    }

    public function getBonusSearch(): ?int
    {
        return $this->bonusSearch;
    }

    public function setBonusSearch(?int $bonusSearch): self
    {
        $this->bonusSearch = $bonusSearch;

        return $this;
    }

    public function getBasePsychoSurgery(): ?int
    {
        return $this->basePsychoSurgery;
    }

    public function setBasePsychoSurgery(?int $basePsychoSurgery): self
    {
        $this->basePsychoSurgery = $basePsychoSurgery;

        return $this;
    }

    public function getBonusPsychoSurgery(): ?int
    {
        return $this->bonusPsychoSurgery;
    }

    public function setBonusPsychoSurgery(?int $bonusPsychoSurgery): self
    {
        $this->bonusPsychoSurgery = $bonusPsychoSurgery;

        return $this;
    }

    public function getBaseExcavation(): ?int
    {
        return $this->baseExcavation;
    }

    public function setBaseExcavation(?int $baseExcavation): self
    {
        $this->baseExcavation = $baseExcavation;

        return $this;
    }

    public function getBonusExcavation(): ?int
    {
        return $this->bonusExcavation;
    }

    public function setBonusExcavation(?int $bonusExcavation): self
    {
        $this->bonusExcavation = $bonusExcavation;

        return $this;
    }

    public function getBaseInvestigation(): ?int
    {
        return $this->baseInvestigation;
    }

    public function setBaseInvestigation(?int $baseInvestigation): self
    {
        $this->baseInvestigation = $baseInvestigation;

        return $this;
    }

    public function getBonusInvestigation(): ?int
    {
        return $this->bonusInvestigation;
    }

    public function setBonusInvestigation(?int $bonusInvestigation): self
    {
        $this->bonusInvestigation = $bonusInvestigation;

        return $this;
    }

    public function getBaseNavigation(): ?int
    {
        return $this->baseNavigation;
    }

    public function setBaseNavigation(?int $baseNavigation): self
    {
        $this->baseNavigation = $baseNavigation;

        return $this;
    }

    public function getBonusNavigation(): ?int
    {
        return $this->bonusNavigation;
    }

    public function setBonusNavigation(?int $bonusNavigation): self
    {
        $this->bonusNavigation = $bonusNavigation;

        return $this;
    }

    public function getBasePerception(): ?int
    {
        return $this->basePerception;
    }

    public function setBasePerception(?int $basePerception): self
    {
        $this->basePerception = $basePerception;

        return $this;
    }

    public function getBonusPerception(): ?int
    {
        return $this->bonusPerception;
    }

    public function setBonusPerception(?int $bonusPerception): self
    {
        $this->bonusPerception = $bonusPerception;

        return $this;
    }

    public function getBasePsiAssault(): ?int
    {
        return $this->basePsiAssault;
    }

    public function setBasePsiAssault(?int $basePsiAssault): self
    {
        $this->basePsiAssault = $basePsiAssault;

        return $this;
    }

    public function getBonusPsiAssault(): ?int
    {
        return $this->bonusPsiAssault;
    }

    public function setBonusPsiAssault(?int $bonusPsiAssault): self
    {
        $this->bonusPsiAssault = $bonusPsiAssault;

        return $this;
    }

    public function getBaseControl(): ?int
    {
        return $this->baseControl;
    }

    public function setBaseControl(?int $baseControl): self
    {
        $this->baseControl = $baseControl;

        return $this;
    }

    public function getBonusControl(): ?int
    {
        return $this->bonusControl;
    }

    public function setBonusControl(?int $bonusControl): self
    {
        $this->bonusControl = $bonusControl;

        return $this;
    }

    public function getBaseSensation(): ?int
    {
        return $this->baseSensation;
    }

    public function setBaseSensation(?int $baseSensation): self
    {
        $this->baseSensation = $baseSensation;

        return $this;
    }

    public function getBonusSensation(): ?int
    {
        return $this->bonusSensation;
    }

    public function setBonusSensation(?int $bonusSensation): self
    {
        $this->bonusSensation = $bonusSensation;

        return $this;
    }

    public function getBaseAnimalControl(): ?int
    {
        return $this->baseAnimalControl;
    }

    public function setBaseAnimalControl(?int $baseAnimalControl): self
    {
        $this->baseAnimalControl = $baseAnimalControl;

        return $this;
    }

    public function getBonusAnimalControl(): ?int
    {
        return $this->bonusAnimalControl;
    }

    public function setBonusAnimalControl(?int $bonusAnimalControl): self
    {
        $this->bonusAnimalControl = $bonusAnimalControl;

        return $this;
    }

    public function getBaseImposture(): ?int
    {
        return $this->baseImposture;
    }

    public function setBaseImposture(?int $baseImposture): self
    {
        $this->baseImposture = $baseImposture;

        return $this;
    }

    public function getBonusImposture(): ?int
    {
        return $this->bonusImposture;
    }

    public function setBonusImposture(?int $bonusImposture): self
    {
        $this->bonusImposture = $bonusImposture;

        return $this;
    }

    public function getBaseIntimidation(): ?int
    {
        return $this->baseIntimidation;
    }

    public function setBaseIntimidation(?int $baseIntimidation): self
    {
        $this->baseIntimidation = $baseIntimidation;

        return $this;
    }

    public function getBonusIntimidation(): ?int
    {
        return $this->bonusIntimidation;
    }

    public function setBonusIntimidation(?int $bonusIntimidation): self
    {
        $this->bonusIntimidation = $bonusIntimidation;

        return $this;
    }

    public function getBaseKinesics(): ?int
    {
        return $this->baseKinesics;
    }

    public function setBaseKinesics(?int $baseKinesics): self
    {
        $this->baseKinesics = $baseKinesics;

        return $this;
    }

    public function getBonusKinesics(): ?int
    {
        return $this->bonusKinesics;
    }

    public function setBonusKinesics(?int $bonusKinesics): self
    {
        $this->bonusKinesics = $bonusKinesics;

        return $this;
    }

    public function getBasePersuasion(): ?int
    {
        return $this->basePersuasion;
    }

    public function setBasePersuasion(?int $basePersuasion): self
    {
        $this->basePersuasion = $basePersuasion;

        return $this;
    }

    public function getBonusPersuasion(): ?int
    {
        return $this->bonusPersuasion;
    }

    public function setBonusPersuasion(?int $bonusPersuasion): self
    {
        $this->bonusPersuasion = $bonusPersuasion;

        return $this;
    }

    public function getBaseProtocol(): ?int
    {
        return $this->baseProtocol;
    }

    public function setBaseProtocol(?int $baseProtocol): self
    {
        $this->baseProtocol = $baseProtocol;

        return $this;
    }

    public function getBonusProtocol(): ?int
    {
        return $this->bonusProtocol;
    }

    public function setBonusProtocol(?int $bonusProtocol): self
    {
        $this->bonusProtocol = $bonusProtocol;

        return $this;
    }

    public function getBaseNetwork1(): ?int
    {
        return $this->baseNetwork1;
    }

    public function setBaseNetwork1(?int $baseNetwork1): self
    {
        $this->baseNetwork1 = $baseNetwork1;

        return $this;
    }

    public function getBonusNetwork1(): ?int
    {
        return $this->bonusNetwork1;
    }

    public function setBonusNetwork1(?int $bonusNetwork1): self
    {
        $this->bonusNetwork1 = $bonusNetwork1;

        return $this;
    }

    public function getBaseNetwork2(): ?int
    {
        return $this->baseNetwork2;
    }

    public function setBaseNetwork2(?int $baseNetwork2): self
    {
        $this->baseNetwork2 = $baseNetwork2;

        return $this;
    }

    public function getBonusNetwork2(): ?int
    {
        return $this->bonusNetwork2;
    }

    public function setBonusNetwork2(?int $bonusNetwork2): self
    {
        $this->bonusNetwork2 = $bonusNetwork2;

        return $this;
    }

    public function getBaseNetwork3(): ?int
    {
        return $this->baseNetwork3;
    }

    public function setBaseNetwork3(?int $baseNetwork3): self
    {
        $this->baseNetwork3 = $baseNetwork3;

        return $this;
    }

    public function getBonusNetwork3(): ?int
    {
        return $this->bonusNetwork3;
    }

    public function setBonusNetwork3(?int $bonusNetwork3): self
    {
        $this->bonusNetwork3 = $bonusNetwork3;

        return $this;
    }

    public function getBaseNetwork4(): ?int
    {
        return $this->baseNetwork4;
    }

    public function setBaseNetwork4(?int $baseNetwork4): self
    {
        $this->baseNetwork4 = $baseNetwork4;

        return $this;
    }

    public function getBonusNetwork4(): ?int
    {
        return $this->bonusNetwork4;
    }

    public function setBonusNetwork4(?int $bonusNetwork4): self
    {
        $this->bonusNetwork4 = $bonusNetwork4;

        return $this;
    }

    public function getBaseSubterfuge(): ?int
    {
        return $this->baseSubterfuge;
    }

    public function setBaseSubterfuge(?int $baseSubterfuge): self
    {
        $this->baseSubterfuge = $baseSubterfuge;

        return $this;
    }

    public function getBonusSubterfuge(): ?int
    {
        return $this->bonusSubterfuge;
    }

    public function setBonusSubterfuge(?int $bonusSubterfuge): self
    {
        $this->bonusSubterfuge = $bonusSubterfuge;

        return $this;
    }

    public function getBasePiloting1(): ?int
    {
        return $this->basePiloting1;
    }

    public function setBasePiloting1(?int $basePiloting1): self
    {
        $this->basePiloting1 = $basePiloting1;

        return $this;
    }

    public function getBonusPiloting1(): ?int
    {
        return $this->bonusPiloting1;
    }

    public function setBonusPiloting1(?int $bonusPiloting1): self
    {
        $this->bonusPiloting1 = $bonusPiloting1;

        return $this;
    }

    public function getBasePiloting2(): ?int
    {
        return $this->basePiloting2;
    }

    public function setBasePiloting2(?int $basePiloting2): self
    {
        $this->basePiloting2 = $basePiloting2;

        return $this;
    }

    public function getBonusPiloting2(): ?int
    {
        return $this->bonusPiloting2;
    }

    public function setBonusPiloting2(?int $bonusPiloting2): self
    {
        $this->bonusPiloting2 = $bonusPiloting2;

        return $this;
    }

    public function getBasePiloting3(): ?int
    {
        return $this->basePiloting3;
    }

    public function setBasePiloting3(?int $basePiloting3): self
    {
        $this->basePiloting3 = $basePiloting3;

        return $this;
    }

    public function getBonusPiloting3(): ?int
    {
        return $this->bonusPiloting3;
    }

    public function setBonusPiloting3(?int $bonusPiloting3): self
    {
        $this->bonusPiloting3 = $bonusPiloting3;

        return $this;
    }

    public function getBasePiloting4(): ?int
    {
        return $this->basePiloting4;
    }

    public function setBasePiloting4(?int $basePiloting4): self
    {
        $this->basePiloting4 = $basePiloting4;

        return $this;
    }

    public function getBonusPiloting4(): ?int
    {
        return $this->bonusPiloting4;
    }

    public function setBonusPiloting4(?int $bonusPiloting4): self
    {
        $this->bonusPiloting4 = $bonusPiloting4;

        return $this;
    }

    public function getBaseArt1(): ?int
    {
        return $this->baseArt1;
    }

    public function setBaseArt1(?int $baseArt1): self
    {
        $this->baseArt1 = $baseArt1;

        return $this;
    }

    public function getBonusArt1(): ?int
    {
        return $this->bonusArt1;
    }

    public function setBonusArt1(?int $bonusArt1): self
    {
        $this->bonusArt1 = $bonusArt1;

        return $this;
    }

    public function getBaseArt2(): ?int
    {
        return $this->baseArt2;
    }

    public function setBaseArt2(?int $baseArt2): self
    {
        $this->baseArt2 = $baseArt2;

        return $this;
    }

    public function getBonusArt2(): ?int
    {
        return $this->bonusArt2;
    }

    public function setBonusArt2(?int $bonusArt2): self
    {
        $this->bonusArt2 = $bonusArt2;

        return $this;
    }

    public function getBaseArt3(): ?int
    {
        return $this->baseArt3;
    }

    public function setBaseArt3(?int $baseArt3): self
    {
        $this->baseArt3 = $baseArt3;

        return $this;
    }

    public function getBonusArt3(): ?int
    {
        return $this->bonusArt3;
    }

    public function setBonusArt3(?int $bonusArt3): self
    {
        $this->bonusArt3 = $bonusArt3;

        return $this;
    }

    public function getBonusArt4(): ?int
    {
        return $this->bonusArt4;
    }

    public function setBonusArt4(?int $bonusArt4): self
    {
        $this->bonusArt4 = $bonusArt4;

        return $this;
    }

    public function getBaseArt4(): ?int
    {
        return $this->baseArt4;
    }

    public function setBaseArt4(?int $baseArt4): self
    {
        $this->baseArt4 = $baseArt4;

        return $this;
    }

    public function getBaseInterest1(): ?int
    {
        return $this->baseInterest1;
    }

    public function setBaseInterest1(?int $baseInterest1): self
    {
        $this->baseInterest1 = $baseInterest1;

        return $this;
    }

    public function getBonusInterest1(): ?int
    {
        return $this->bonusInterest1;
    }

    public function setBonusInterest1(?int $bonusInterest1): self
    {
        $this->bonusInterest1 = $bonusInterest1;

        return $this;
    }

    public function getBaseInterest2(): ?int
    {
        return $this->baseInterest2;
    }

    public function setBaseInterest2(?int $baseInterest2): self
    {
        $this->baseInterest2 = $baseInterest2;

        return $this;
    }

    public function getBonusInterest2(): ?int
    {
        return $this->bonusInterest2;
    }

    public function setBonusInterest2(?int $bonusInterest2): self
    {
        $this->bonusInterest2 = $bonusInterest2;

        return $this;
    }

    public function getBaseInterest3(): ?int
    {
        return $this->baseInterest3;
    }

    public function setBaseInterest3(?int $baseInterest3): self
    {
        $this->baseInterest3 = $baseInterest3;

        return $this;
    }

    public function getBonusInterest3(): ?int
    {
        return $this->bonusInterest3;
    }

    public function setBonusInterest3(?int $bonusInterest3): self
    {
        $this->bonusInterest3 = $bonusInterest3;

        return $this;
    }

    public function getBaseInterest4(): ?int
    {
        return $this->baseInterest4;
    }

    public function setBaseInterest4(?int $baseInterest4): self
    {
        $this->baseInterest4 = $baseInterest4;

        return $this;
    }

    public function getBonusInterest4(): ?int
    {
        return $this->bonusInterest4;
    }

    public function setBOnusInterest4(?int $bonusInterest4): self
    {
        $this->bonusInterest4 = $bonusInterest4;

        return $this;
    }

    public function getBaseNativeLanguage(): ?int
    {
        return $this->baseNativeLanguage;
    }

    public function setBaseNativeLanguage(?int $baseNativeLanguage): self
    {
        $this->baseNativeLanguage = $baseNativeLanguage;

        return $this;
    }

    public function getBonusNativeLanguage(): ?int
    {
        return $this->bonusNativeLanguage;
    }

    public function setBonusNativeLanguage(?int $bonusNativeLanguage): self
    {
        $this->bonusNativeLanguage = $bonusNativeLanguage;

        return $this;
    }

    public function getBaseLanguage1(): ?int
    {
        return $this->baseLanguage1;
    }

    public function setBaseLanguage1(?int $baseLanguage1): self
    {
        $this->baseLanguage1 = $baseLanguage1;

        return $this;
    }

    public function getBonusLanguage1(): ?int
    {
        return $this->bonusLanguage1;
    }

    public function setBonusLanguage1(?int $bonusLanguage1): self
    {
        $this->bonusLanguage1 = $bonusLanguage1;

        return $this;
    }

    public function getBaseLanguage2(): ?int
    {
        return $this->baseLanguage2;
    }

    public function setBaseLanguage2(?int $baseLanguage2): self
    {
        $this->baseLanguage2 = $baseLanguage2;

        return $this;
    }

    public function getBonusLanguage2(): ?int
    {
        return $this->bonusLanguage2;
    }

    public function setBonusLanguage2(?int $bonusLanguage2): self
    {
        $this->bonusLanguage2 = $bonusLanguage2;

        return $this;
    }

    public function getBaseLanguage3(): ?int
    {
        return $this->baseLanguage3;
    }

    public function setBaseLanguage3(?int $baseLanguage3): self
    {
        $this->baseLanguage3 = $baseLanguage3;

        return $this;
    }

    public function getBonusLanguage3(): ?int
    {
        return $this->bonusLanguage3;
    }

    public function setBonusLanguage3(?int $bonusLanguage3): self
    {
        $this->bonusLanguage3 = $bonusLanguage3;

        return $this;
    }

    public function getBaseLanguage4(): ?int
    {
        return $this->baseLanguage4;
    }

    public function setBaseLanguage4(?int $baseLanguage4): self
    {
        $this->baseLanguage4 = $baseLanguage4;

        return $this;
    }

    public function getBonusLanguage4(): ?int
    {
        return $this->bonusLanguage4;
    }

    public function setBonusLanguage4(?int $bonusLanguage4): self
    {
        $this->bonusLanguage4 = $bonusLanguage4;

        return $this;
    }

    public function getBaseProfession1(): ?int
    {
        return $this->baseProfession1;
    }

    public function setBaseProfession1(?int $baseProfession1): self
    {
        $this->baseProfession1 = $baseProfession1;

        return $this;
    }

    public function getBonusProfession1(): ?int
    {
        return $this->bonusProfession1;
    }

    public function setBonusProfession1(?int $bonusProfession1): self
    {
        $this->bonusProfession1 = $bonusProfession1;

        return $this;
    }

    public function getBaseProfession2(): ?int
    {
        return $this->baseProfession2;
    }

    public function setBaseProfession2(?int $baseProfession2): self
    {
        $this->baseProfession2 = $baseProfession2;

        return $this;
    }

    public function getBonusProfession2(): ?int
    {
        return $this->bonusProfession2;
    }

    public function setBonusProfession2(?int $bonusProfession2): self
    {
        $this->bonusProfession2 = $bonusProfession2;

        return $this;
    }

    public function getBaseProfession3(): ?int
    {
        return $this->baseProfession3;
    }

    public function setBaseProfession3(?int $baseProfession3): self
    {
        $this->baseProfession3 = $baseProfession3;

        return $this;
    }

    public function getBonusProfession3(): ?int
    {
        return $this->bonusProfession3;
    }

    public function setBonusProfession3(?int $bonusProfession3): self
    {
        $this->bonusProfession3 = $bonusProfession3;

        return $this;
    }

    public function getBaseProfession4(): ?int
    {
        return $this->baseProfession4;
    }

    public function setBaseProfession4(?int $baseProfession4): self
    {
        $this->baseProfession4 = $baseProfession4;

        return $this;
    }

    public function getBonusProfession4(): ?int
    {
        return $this->bonusProfession4;
    }

    public function setBonusProfession4(?int $bonusProfession4): self
    {
        $this->bonusProfession4 = $bonusProfession4;

        return $this;
    }

    public function getBaseTheory1(): ?int
    {
        return $this->baseTheory1;
    }

    public function setBaseTheory1(?int $baseTheory1): self
    {
        $this->baseTheory1 = $baseTheory1;

        return $this;
    }

    public function getBonusTheory1(): ?int
    {
        return $this->bonusTheory1;
    }

    public function setBonusTheory1(?int $bonusTheory1): self
    {
        $this->bonusTheory1 = $bonusTheory1;

        return $this;
    }

    public function getBaseTheory2(): ?int
    {
        return $this->baseTheory2;
    }

    public function setBaseTheory2(?int $baseTheory2): self
    {
        $this->baseTheory2 = $baseTheory2;

        return $this;
    }

    public function getBonusTheory2(): ?int
    {
        return $this->bonusTheory2;
    }

    public function setBonusTheory2(?int $bonusTheory2): self
    {
        $this->bonusTheory2 = $bonusTheory2;

        return $this;
    }

    public function getBaseTheory3(): ?int
    {
        return $this->baseTheory3;
    }

    public function setBaseTheory3(?int $baseTheory3): self
    {
        $this->baseTheory3 = $baseTheory3;

        return $this;
    }

    public function getBonusTheory3(): ?int
    {
        return $this->bonusTheory3;
    }

    public function setBonusTheory3(?int $bonusTheory3): self
    {
        $this->bonusTheory3 = $bonusTheory3;

        return $this;
    }

    public function getBaseTheory4(): ?int
    {
        return $this->baseTheory4;
    }

    public function setBaseTheory4(?int $baseTheory4): self
    {
        $this->baseTheory4 = $baseTheory4;

        return $this;
    }

    public function getBonusTheory4(): ?int
    {
        return $this->bonusTheory4;
    }

    public function setBonusTheory4(?int $bonusTheory4): self
    {
        $this->bonusTheory4 = $bonusTheory4;

        return $this;
    }

    public function getSt(): int
    {
        return $this->getLuc() + 5;
    }

    public function getLuc(): int
    {
        return ($this->getBaseVol() + $this->getBonusVol()) * 2;
    }

    public function getSa(): int
    {
        return $this->getLuc() * 2;
    }

    public function getSb(): int
    {
        return $this->getEnd() + 5;
    }

    public function getInit(): int
    {
        $int = $this->getBaseInt() + $this->getBonusInt();
        $ref = $this->getBaseRef() + $this->getBonusRef();
        return round(($int + $ref) / 5, 0, PHP_ROUND_HALF_UP);
    }

    public function getBd(): int
    {
        $som = $this->getBaseSom() + $this->getBonusSom();
        return round($som / 10, 0, PHP_ROUND_HALF_UP);
    }
}
