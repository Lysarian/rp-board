<?php

namespace App\Entity\CommonModule;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\ImproperTagSignalmentRepository")
 */
class ImproperTagSignalment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\User", inversedBy="improperTagSignalments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $signaledBy;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isResolved;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\Avatar", inversedBy="improperTagSignalments")
     */
    private $avatarSignaled;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\Party", inversedBy="improperTagSignalments")
     */
    private $party;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\Documents", inversedBy="improperTagSignalments")
     */
    private $documents;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $publicationType;

    public function __construct()
    {
        $this->avatarSignaled = new ArrayCollection();
        $this->party = new ArrayCollection();
        $this->documents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSignaledBy(): ?User
    {
        return $this->signaledBy;
    }

    public function setSignaledBy(?User $signaledBy): self
    {
        $this->signaledBy = $signaledBy;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIsResolved(): ?bool
    {
        return $this->isResolved;
    }

    public function setIsResolved(?bool $isResolved): self
    {
        $this->isResolved = $isResolved;

        return $this;
    }

    /**
     * @return Collection|Avatar[]
     */
    public function getAvatarSignaled(): Collection
    {
        return $this->avatarSignaled;
    }

    public function addAvatarSignaled(Avatar $avatarSignaled): self
    {
        if (!$this->avatarSignaled->contains($avatarSignaled)) {
            $this->avatarSignaled[] = $avatarSignaled;
        }

        return $this;
    }

    public function removeAvatarSignaled(Avatar $avatarSignaled): self
    {
        if ($this->avatarSignaled->contains($avatarSignaled)) {
            $this->avatarSignaled->removeElement($avatarSignaled);
        }

        return $this;
    }

    /**
     * @return Collection|Party[]
     */
    public function getParty(): Collection
    {
        return $this->party;
    }

    public function addParty(Party $party): self
    {
        if (!$this->party->contains($party)) {
            $this->party[] = $party;
        }

        return $this;
    }

    public function removeParty(Party $party): self
    {
        if ($this->party->contains($party)) {
            $this->party->removeElement($party);
        }

        return $this;
    }

    /**
     * @return Collection|Documents[]
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Documents $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
        }

        return $this;
    }

    public function getPublicationType(): ?string
    {
        return $this->publicationType;
    }

    public function setPublicationType(string $publicationType): self
    {
        $this->publicationType = $publicationType;

        return $this;
    }
}
