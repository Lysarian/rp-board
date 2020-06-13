<?php

namespace App\Entity\CommonModule;

use App\Entity\CommonModule\PartyHasFaction;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\PartyRepository")
 */
class Party
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
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isFollowUp;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isMultiplayer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $accessSetting;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dashboardStyle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Game", inversedBy="parties")
     */
    private $game;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isFinished;

    /**
     * @ORM\Column(type="datetime")
     */
    private $finishedAt;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\Party", inversedBy="partiesFollowingParty")
     */
    private $partyFollowsParties;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\Party", mappedBy="partyFollowsParties")
     */
    private $partiesFollowingParty;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\User", inversedBy="parties")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\PartyHasFaction", mappedBy="party")
     */
    private $partyHasFactions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\PartyHasCategory", mappedBy="party")
     */
    private $partyHasCategories;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\ImproperTagSignalment", mappedBy="party")
     */
    private $improperTagSignalments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\AccessGranted", mappedBy="party")
     */
    private $accessGranteds;

    public function __construct()
    {
        $this->partyFollowsParties = new ArrayCollection();
        $this->partiesFollowingParty = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->partyHasFactions = new ArrayCollection();
        $this->partyHasCategories = new ArrayCollection();
        $this->improperTagSignalments = new ArrayCollection();
        $this->accessGranteds = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getIsFollowUp(): ?bool
    {
        return $this->isFollowUp;
    }

    public function setIsFollowUp(?bool $isFollowUp): self
    {
        $this->isFollowUp = $isFollowUp;

        return $this;
    }

    public function getIsMultiplayer(): ?bool
    {
        return $this->isMultiplayer;
    }

    public function setIsMultiplayer(?bool $isMultiplayer): self
    {
        $this->isMultiplayer = $isMultiplayer;

        return $this;
    }

    public function getAccessSetting(): ?string
    {
        return $this->accessSetting;
    }

    public function setAccessSetting(string $accessSetting): self
    {
        $this->accessSetting = $accessSetting;

        return $this;
    }

    public function getDashboardStyle(): ?string
    {
        return $this->dashboardStyle;
    }

    public function setDashboardStyle(string $dashboardStyle): self
    {
        $this->dashboardStyle = $dashboardStyle;

        return $this;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function setGame(?Game $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }

    public function setIsFinished(?bool $isFinished): self
    {
        $this->isFinished = $isFinished;

        return $this;
    }

    public function getFinishedAt(): ?\DateTimeInterface
    {
        return $this->finishedAt;
    }

    public function setFinishedAt(\DateTimeInterface $finishedAt): self
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getPartyFollowsParties(): Collection
    {
        return $this->partyFollowsParties;
    }

    public function addPartyFollowsParty(self $partyFollowsParty): self
    {
        if (!$this->partyFollowsParties->contains($partyFollowsParty)) {
            $this->partyFollowsParties[] = $partyFollowsParty;
        }

        return $this;
    }

    public function removePartyFollowsParty(self $partyFollowsParty): self
    {
        if ($this->partyFollowsParties->contains($partyFollowsParty)) {
            $this->partyFollowsParties->removeElement($partyFollowsParty);
        }

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getPartiesFollowingParty(): Collection
    {
        return $this->partiesFollowingParty;
    }

    public function addPartiesFollowingParty(self $partiesFollowingParty): self
    {
        if (!$this->partiesFollowingParty->contains($partiesFollowingParty)) {
            $this->partiesFollowingParty[] = $partiesFollowingParty;
            $partiesFollowingParty->addPartyFollowsParty($this);
        }

        return $this;
    }

    public function removePartiesFollowingParty(self $partiesFollowingParty): self
    {
        if ($this->partiesFollowingParty->contains($partiesFollowingParty)) {
            $this->partiesFollowingParty->removeElement($partiesFollowingParty);
            $partiesFollowingParty->removePartyFollowsParty($this);
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }

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
            $partyHasFaction->setParty($this);
        }

        return $this;
    }

    public function removePartyHasFaction(PartyHasFaction $partyHasFaction): self
    {
        if ($this->partyHasFactions->contains($partyHasFaction)) {
            $this->partyHasFactions->removeElement($partyHasFaction);
            // set the owning side to null (unless already changed)
            if ($partyHasFaction->getParty() === $this) {
                $partyHasFaction->setParty(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PartyHasCategory[]
     */
    public function getPartyHasCategories(): Collection
    {
        return $this->partyHasCategories;
    }

    public function addPartyHasCategory(PartyHasCategory $partyHasCategory): self
    {
        if (!$this->partyHasCategories->contains($partyHasCategory)) {
            $this->partyHasCategories[] = $partyHasCategory;
            $partyHasCategory->setParty($this);
        }

        return $this;
    }

    public function removePartyHasCategory(PartyHasCategory $partyHasCategory): self
    {
        if ($this->partyHasCategories->contains($partyHasCategory)) {
            $this->partyHasCategories->removeElement($partyHasCategory);
            // set the owning side to null (unless already changed)
            if ($partyHasCategory->getParty() === $this) {
                $partyHasCategory->setParty(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ImproperTagSignalment[]
     */
    public function getImproperTagSignalments(): Collection
    {
        return $this->improperTagSignalments;
    }

    public function addImproperTagSignalment(ImproperTagSignalment $improperTagSignalment): self
    {
        if (!$this->improperTagSignalments->contains($improperTagSignalment)) {
            $this->improperTagSignalments[] = $improperTagSignalment;
            $improperTagSignalment->addParty($this);
        }

        return $this;
    }

    public function removeImproperTagSignalment(ImproperTagSignalment $improperTagSignalment): self
    {
        if ($this->improperTagSignalments->contains($improperTagSignalment)) {
            $this->improperTagSignalments->removeElement($improperTagSignalment);
            $improperTagSignalment->removeParty($this);
        }

        return $this;
    }

    /**
     * @return Collection|AccessGranted[]
     */
    public function getAccessGranteds(): Collection
    {
        return $this->accessGranteds;
    }

    public function addAccessGranted(AccessGranted $accessGranted): self
    {
        if (!$this->accessGranteds->contains($accessGranted)) {
            $this->accessGranteds[] = $accessGranted;
            $accessGranted->setParty($this);
        }

        return $this;
    }

    public function removeAccessGranted(AccessGranted $accessGranted): self
    {
        if ($this->accessGranteds->contains($accessGranted)) {
            $this->accessGranteds->removeElement($accessGranted);
            // set the owning side to null (unless already changed)
            if ($accessGranted->getParty() === $this) {
                $accessGranted->setParty(null);
            }
        }

        return $this;
    }
}
