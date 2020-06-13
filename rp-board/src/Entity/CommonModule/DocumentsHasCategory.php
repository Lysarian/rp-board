<?php

namespace App\Entity\CommonModule;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\DocumentsHasCategoryRepository")
 */
class DocumentsHasCategory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Documents", inversedBy="documentsHasCategories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $documents;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\Category", inversedBy="documentsHasCategories")
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

    public function getDocuments(): ?Documents
    {
        return $this->documents;
    }

    public function setDocuments(?Documents $documents): self
    {
        $this->documents = $documents;

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

    public function setIsAdminForced(bool $isAdminForced): self
    {
        $this->isAdminForced = $isAdminForced;

        return $this;
    }
}
