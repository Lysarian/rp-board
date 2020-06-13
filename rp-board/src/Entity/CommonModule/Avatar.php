<?php

namespace App\Entity\CommonModule;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\AvatarRepository")
 */
class Avatar
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\User", inversedBy="avatars")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * 
     */
    private $pictureFile;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\AvatarHasCategory", mappedBy="avatar")
     */
    private $avatarHasCategories;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\ImproperTagSignalment", mappedBy="avatarSignaled")
     */
    private $improperTagSignalments;

    public function __construct()
    {
        $this->avatarHasCategories = new ArrayCollection();
        $this->improperTagSignalments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPictureFile(): ?string
    {
        return $this->pictureFile;
    }

    public function setPictureFile(string $pictureFile): self
    {
        $this->pictureFile = $pictureFile;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return Collection|AvatarHasCategory[]
     */
    public function getAvatarHasCategories(): Collection
    {
        return $this->avatarHasCategories;
    }

    public function addAvatarHasCategory(AvatarHasCategory $avatarHasCategory): self
    {
        if (!$this->avatarHasCategories->contains($avatarHasCategory)) {
            $this->avatarHasCategories[] = $avatarHasCategory;
            $avatarHasCategory->setAvatar($this);
        }

        return $this;
    }

    public function removeAvatarHasCategory(AvatarHasCategory $avatarHasCategory): self
    {
        if ($this->avatarHasCategories->contains($avatarHasCategory)) {
            $this->avatarHasCategories->removeElement($avatarHasCategory);
            // set the owning side to null (unless already changed)
            if ($avatarHasCategory->getAvatar() === $this) {
                $avatarHasCategory->setAvatar(null);
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
            $improperTagSignalment->addAvatarSignaled($this);
        }

        return $this;
    }

    public function removeImproperTagSignalment(ImproperTagSignalment $improperTagSignalment): self
    {
        if ($this->improperTagSignalments->contains($improperTagSignalment)) {
            $this->improperTagSignalments->removeElement($improperTagSignalment);
            $improperTagSignalment->removeAvatarSignaled($this);
        }

        return $this;
    }
}
