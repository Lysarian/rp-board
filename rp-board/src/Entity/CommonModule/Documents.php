<?php

namespace App\Entity\CommonModule;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\DocumentsRepository")
 */
class Documents
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
     * @ORM\Column(type="string", length=255)
     */
    private $accessSetting;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommonModule\User", inversedBy="documents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\DocumentsHasCategory", mappedBy="documents")
     */
    private $documentsHasCategories;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\ImproperTagSignalment", mappedBy="documents")
     */
    private $improperTagSignalments;

    public function __construct()
    {
        $this->documentsHasCategories = new ArrayCollection();
        $this->improperTagSignalments = new ArrayCollection();
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

    public function getAccessSetting(): ?string
    {
        return $this->accessSetting;
    }

    public function setAccessSetting(string $accessSetting): self
    {
        $this->accessSetting = $accessSetting;

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
            $documentsHasCategory->setDocuments($this);
        }

        return $this;
    }

    public function removeDocumentsHasCategory(DocumentsHasCategory $documentsHasCategory): self
    {
        if ($this->documentsHasCategories->contains($documentsHasCategory)) {
            $this->documentsHasCategories->removeElement($documentsHasCategory);
            // set the owning side to null (unless already changed)
            if ($documentsHasCategory->getDocuments() === $this) {
                $documentsHasCategory->setDocuments(null);
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
            $improperTagSignalment->addDocument($this);
        }

        return $this;
    }

    public function removeImproperTagSignalment(ImproperTagSignalment $improperTagSignalment): self
    {
        if ($this->improperTagSignalments->contains($improperTagSignalment)) {
            $this->improperTagSignalments->removeElement($improperTagSignalment);
            $improperTagSignalment->removeDocument($this);
        }

        return $this;
    }
}
