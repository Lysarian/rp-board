<?php

namespace App\Entity\CommonModule;

use App\Entity\CommonModule\Faction;
use App\Entity\CommonModule\Party;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartyHasFactionRepository")
 */
class PartyHasFaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Party", inversedBy="partyHasFactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $party;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Faction", inversedBy="partyHasFactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $faction;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isPlayerFaction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParty(): ?Party
    {
        return $this->party;
    }

    public function setParty(?Party $party): self
    {
        $this->party = $party;

        return $this;
    }

    public function getFaction(): ?Faction
    {
        return $this->faction;
    }

    public function setFaction(?Faction $faction): self
    {
        $this->faction = $faction;

        return $this;
    }

    public function getIsPlayerFaction(): ?bool
    {
        return $this->isPlayerFaction;
    }

    public function setIsPlayerFaction(?bool $isPlayerFaction): self
    {
        $this->isPlayerFaction = $isPlayerFaction;

        return $this;
    }
}
