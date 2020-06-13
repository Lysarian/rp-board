<?php

namespace App\Entity\CommonModule;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\FriendRepository")
 */
class Friend
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\User", inversedBy="friends")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userOne;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\User", inversedBy="hasFriendRequest")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userTwo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $requestAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondUserStatus;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $statusChangedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserOne(): ?User
    {
        return $this->userOne;
    }

    public function setUserOne(?User $userOne): self
    {
        $this->userOne = $userOne;

        return $this;
    }

    public function getUserTwo(): ?User
    {
        return $this->userTwo;
    }

    public function setUserTwo(?User $userTwo): self
    {
        $this->userTwo = $userTwo;

        return $this;
    }

    public function getRequestAt(): ?\DateTimeInterface
    {
        return $this->requestAt;
    }

    public function setRequestAt(\DateTimeInterface $requestAt): self
    {
        $this->requestAt = $requestAt;

        return $this;
    }

    public function getSecondUserStatus(): ?string
    {
        return $this->secondUserStatus;
    }

    public function setSecondUserStatus(string $secondUserStatus): self
    {
        $this->secondUserStatus = $secondUserStatus;

        return $this;
    }

    public function getStatusChangedAt(): ?\DateTimeInterface
    {
        return $this->statusChangedAt;
    }

    public function setStatusChangedAt(?\DateTimeInterface $statusChangedAt): self
    {
        $this->statusChangedAt = $statusChangedAt;

        return $this;
    }
}
