<?php

namespace App\Entity\CommonModule;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\CategoryRepository")
 */
class Category
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\AvatarHasCategory", mappedBy="category")
     */
    private $avatarHasCategories;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\DocumentsHasCategory", mappedBy="category")
     */
    private $documentsHasCategories;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\PartyHasCategory", mappedBy="category")
     */
    private $partyHasCategories;

    public function __construct()
    {
        $this->avatarHasCategories = new ArrayCollection();
        $this->documentsHasCategories = new ArrayCollection();
        $this->partyHasCategories = new ArrayCollection();
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

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
            $avatarHasCategory->setCategory($this);
        }

        return $this;
    }

    public function removeAvatarHasCategory(AvatarHasCategory $avatarHasCategory): self
    {
        if ($this->avatarHasCategories->contains($avatarHasCategory)) {
            $this->avatarHasCategories->removeElement($avatarHasCategory);
            // set the owning side to null (unless already changed)
            if ($avatarHasCategory->getCategory() === $this) {
                $avatarHasCategory->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|DocumentsHasCategory[]
     */
    public function getDocumentsHasCategories(): Collection
    {
        return $this->documentsHasCategories;
    }

    public function addDocumentsHasCategory(DocumentsHasCategory $documentsHasCategory): self
    {
        if (!$this->documentsHasCategories->contains($documentsHasCategory)) {
            $this->documentsHasCategories[] = $documentsHasCategory;
            $documentsHasCategory->setCategory($this);
        }

        return $this;
    }

    public function removeDocumentsHasCategory(DocumentsHasCategory $documentsHasCategory): self
    {
        if ($this->documentsHasCategories->contains($documentsHasCategory)) {
            $this->documentsHasCategories->removeElement($documentsHasCategory);
            // set the owning side to null (unless already changed)
            if ($documentsHasCategory->getCategory() === $this) {
                $documentsHasCategory->setCategory(null);
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
            $partyHasCategory->setCategory($this);
        }

        return $this;
    }

    public function removePartyHasCategory(PartyHasCategory $partyHasCategory): self
    {
        if ($this->partyHasCategories->contains($partyHasCategory)) {
            $this->partyHasCategories->removeElement($partyHasCategory);
            // set the owning side to null (unless already changed)
            if ($partyHasCategory->getCategory() === $this) {
                $partyHasCategory->setCategory(null);
            }
        }

        return $this;
    }
}
