<?php

namespace App\Entity\CommonModule;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\AvatarHasCategoryRepository")
 */
class AvatarHasCategory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Avatar", inversedBy="avatarHasCategories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $avatar;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Category", inversedBy="avatarHasCategories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isAdminForced;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvatar(): ?Avatar
    {
        return $this->avatar;
    }

    public function setAvatar(?Avatar $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getIsAdminForced(): ?bool
    {
        return $this->isAdminForced;
    }

    public function setIsAdminForced(?bool $isAdminForced): self
    {
        $this->isAdminForced = $isAdminForced;

        return $this;
    }
}
