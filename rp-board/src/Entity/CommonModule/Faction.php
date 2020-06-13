<?php

namespace App\Entity\CommonModule;

use App\Entity\CommonModule\PartyHasFaction;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\FactionRepository")
 */
class Faction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $originalName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $factionName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $factionType;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\PartyHasFaction", mappedBy="faction")
     */
    private $partyHasFactions;

    public function __construct()
    {
        $this->partyHasFactions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOriginalName(): ?string
    {
        return $this->originalName;
    }

    public function setOriginalName(string $originalName): self
    {
        $this->originalName = $originalName;

        return $this;
    }

    public function getFactionName(): ?string
    {
        return $this->factionName;
    }

    public function setFactionName(string $factionName): self
    {
        $this->factionName = $factionName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFactionType(): ?string
    {
        return $this->factionType;
    }

    public function setFactionType(string $factionType): self
    {
        $this->factionType = $factionType;

        return $this;
    }

    /**
     * @return Collection|PartyHasFaction[]
     */
    public function getPartyHasFactions(): Collection
    {
        return $this->partyHasFactions;
    }

    public function addPartyHasFaction(PartyHasFaction $partyHasFaction): self
    {
        if (!$this->partyHasFactions->contains($partyHasFaction)) {
            $this->partyHasFactions[] = $partyHasFaction;
            $partyHasFaction->setFaction($this);
        }

        return $this;
    }

    public function removePartyHasFaction(PartyHasFaction $partyHasFaction): self
    {
        if ($this->partyHasFactions->contains($partyHasFaction)) {
            $this->partyHasFactions->removeElement($partyHasFaction);
            // set the owning side to null (unless already changed)
            if ($partyHasFaction->getFaction() === $this) {
                $partyHasFaction->setFaction(null);
            }
        }

        return $this;
    }
}
