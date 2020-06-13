<?php

namespace App\Entity\CommonModule;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\PartyHasCategoryRepository")
 */
class PartyHasCategory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Party", inversedBy="partyHasCategories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $party;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Category", inversedBy="partyHasCategories")
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

    public function getParty(): ?Party
    {
        return $this->party;
    }

    public function setParty(?Party $party): self
    {
        $this->party = $party;

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
