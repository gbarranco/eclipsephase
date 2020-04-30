<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CharacterRepository")
 * @ORM\Table(name="`character`")
 */
class Character
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $characterName = "";

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $background = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $faction = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $sexualIdentity = "";

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $age = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $audacityPoints = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $xp = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $aRep = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $gRep = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $cRep = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $iRep = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $eRep = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $rRep = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private int $fRep = 0;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $attributes = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $idInfos = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $psiPasses = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $notes = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $motivations = null;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Player", inversedBy="characters")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Player $Player = null;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Backups", mappedBy="playableCharacter", orphanRemoval=true)
     */
    private Collection $backups;

    public function __construct()
    {
        $this->backups = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharacterName(): ?string
    {
        return $this->characterName;
    }

    public function setCharacterName(string $characterName): self
    {
        $this->characterName = $characterName;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(?string $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function getFaction(): ?string
    {
        return $this->faction;
    }

    public function setFaction(?string $faction): self
    {
        $this->faction = $faction;

        return $this;
    }

    public function getSexualIdentity(): ?string
    {
        return $this->sexualIdentity;
    }

    public function setSexualIdentity(string $sexualIdentity): self
    {
        $this->sexualIdentity = $sexualIdentity;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getAudacityPoints(): ?int
    {
        return $this->audacityPoints;
    }

    public function setAudacityPoints(int $audacityPoints): self
    {
        $this->audacityPoints = $audacityPoints;

        return $this;
    }

    public function getXp(): ?int
    {
        return $this->xp;
    }

    public function setXp(int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }

    public function getARep(): ?int
    {
        return $this->aRep;
    }

    public function setARep(int $aRep): self
    {
        $this->aRep = $aRep;

        return $this;
    }

    public function getGRep(): ?int
    {
        return $this->gRep;
    }

    public function setGRep(int $gRep): self
    {
        $this->gRep = $gRep;

        return $this;
    }

    public function getCRep(): ?int
    {
        return $this->cRep;
    }

    public function setCRep(int $cRep): self
    {
        $this->cRep = $cRep;

        return $this;
    }

    public function getIRep(): ?int
    {
        return $this->iRep;
    }

    public function setIRep(int $iRep): self
    {
        $this->iRep = $iRep;

        return $this;
    }

    public function getERep(): ?int
    {
        return $this->eRep;
    }

    public function setERep(int $eRep): self
    {
        $this->eRep = $eRep;

        return $this;
    }

    public function getRRep(): ?int
    {
        return $this->rRep;
    }

    public function setRRep(int $rRep): self
    {
        $this->rRep = $rRep;

        return $this;
    }

    public function getFRep(): ?int
    {
        return $this->fRep;
    }

    public function setFRep(int $fRep): self
    {
        $this->fRep = $fRep;

        return $this;
    }

    public function getAttributes(): ?string
    {
        return $this->attributes;
    }

    public function setAttributes(?string $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function getIdInfos(): ?string
    {
        return $this->idInfos;
    }

    public function setIdInfos(?string $idInfos): self
    {
        $this->idInfos = $idInfos;

        return $this;
    }

    public function getPsiPasses(): ?string
    {
        return $this->psiPasses;
    }

    public function setPsiPasses(?string $psiPasses): self
    {
        $this->psiPasses = $psiPasses;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getMotivations(): ?string
    {
        return $this->motivations;
    }

    public function setMotivations(?string $motivations): self
    {
        $this->motivations = $motivations;

        return $this;
    }

    public function getPlayer(): ?Player
    {
        return $this->Player;
    }

    public function setPlayer(?Player $Player): self
    {
        $this->Player = $Player;

        return $this;
    }

    /**
     * @return Collection|Backups[]
     */
    public function getBackups(): Collection
    {
        return $this->backups;
    }

    public function addBackup(Backups $backup): self
    {
        if (!$this->backups->contains($backup)) {
            $this->backups[] = $backup;
            $backup->setPlayableCharacter($this);
        }

        return $this;
    }

    public function removeBackup(Backups $backup): self
    {
        if ($this->backups->contains($backup)) {
            $this->backups->removeElement($backup);
            // set the owning side to null (unless already changed)
            if ($backup->getPlayableCharacter() === $this) {
                $backup->setPlayableCharacter(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getCharacterName();
    }
}
