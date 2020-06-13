<?php

namespace App\Entity\CommonModule;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\AccessGrantedRepository")
 */
class AccessGranted
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $askedAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastChangeAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Party", inversedBy="accessGranteds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $party;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\User", inversedBy="accessGranteds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAskedAt(): ?\DateTimeInterface
    {
        return $this->askedAt;
    }

    public function setAskedAt(\DateTimeInterface $askedAt): self
    {
        $this->askedAt = $askedAt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLastChangeAt(): ?\DateTimeInterface
    {
        return $this->lastChangeAt;
    }

    public function setLastChangeAt(\DateTimeInterface $lastChangeAt): self
    {
        $this->lastChangeAt = $lastChangeAt;

        return $this;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
