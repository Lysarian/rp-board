<?php

namespace App\Entity\CalendarModule;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CalendarModule\CalendarTemplateRepository")
 */
class CalendarTemplate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $data;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CalendarModule\CalendarInstance", mappedBy="calendarTemplate")
     */
    private $calendarInstances;

    public function __construct()
    {
        $this->calendarInstances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection|CalendarInstance[]
     */
    public function getCalendarInstances(): Collection
    {
        return $this->calentdarInstances;
    }

    public function addCalendarInstance(CalendarInstance $calendarInstance): self
    {
        if (!$this->calendarInstances->contains($calendarInstance)) {
            $this->calendarInstances[] = $calendarInstance;
            $calendarInstance->setCalendarTemplate($this);
        }

        return $this;
    }

    public function removeCalentdarInstance(CalendarInstance $calendarInstance): self
    {
        if ($this->calendarInstances->contains($calendarInstance)) {
            $this->calendarInstances->removeElement($calendarInstance);
            // set the owning side to null (unless already changed)
            if ($calendarInstance->getCalendarTemplate() === $this) {
                $calendarInstance->setCalendarTemplate(null);
            }
        }

        return $this;
    }
}
