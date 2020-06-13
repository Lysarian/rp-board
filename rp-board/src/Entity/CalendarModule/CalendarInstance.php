<?php

namespace App\Entity\CalendarModule;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CalendarModule\CalendarInstanceRepository")
 */
class CalendarInstance
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
     * @ORM\Column(type="array")
     */
    private $data = [];

    /**
     * @ORM\Column(type="array")
     */
    private $yearZero = [];

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CalendarModule\CalendarTemplate", inversedBy="calentdarInstances")
     * @ORM\JoinColumn(nullable=false)
     */
    private $calendarTemplate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CalendarModule\CalendarCoexist", mappedBy="firstCalendarInstance")
     */
    private $firstCalendarCoexists;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CalendarModule\CalendarCoexist", mappedBy="secondCalendarInstance")
     */
    private $secondCalendarCoexists;

    public function __construct()
    {
        $this->firstCalendarCoexists = new ArrayCollection();
        $this->secondCalendarCoexists = new ArrayCollection();
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

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getYearZero(): ?array
    {
        return $this->yearZero;
    }

    public function setYearZero(array $yearZero): self
    {
        $this->yearZero = $yearZero;

        return $this;
    }

    public function getCalendarTemplate(): ?CalendarTemplate
    {
        return $this->calendarTemplate;
    }

    public function setCalendarTemplate(?CalendarTemplate $calendarTemplate): self
    {
        $this->calendarTemplate = $calendarTemplate;

        return $this;
    }

    /**
     * @return Collection|CalendarCoexist[]
     */
    public function getFirstCalendarCoexists(): Collection
    {
        return $this->firstCalendarCoexists;
    }

    public function addFirstCalendarCoexist(CalendarCoexist $firstCalendarCoexist): self
    {
        if (!$this->firstCalendarCoexists->contains($firstCalendarCoexist)) {
            $this->firstCalendarCoexists[] = $firstCalendarCoexist;
            $firstCalendarCoexist->setFirstCalendarInstance($this);
        }

        return $this;
    }

    public function removeFirstCalendarCoexist(CalendarCoexist $firstCalendarCoexist): self
    {
        if ($this->firstCalendarCoexists->contains($firstCalendarCoexist)) {
            $this->firstCalendarCoexists->removeElement($firstCalendarCoexist);
            // set the owning side to null (unless already changed)
            if ($firstCalendarCoexist->getFirstCalendarInstance() === $this) {
                $firstCalendarCoexist->setFirstCalendarInstance(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CalendarCoexist[]
     */
    public function getSecondCalendarCoexists(): Collection
    {
        return $this->secondCalendarCoexists;
    }

    public function addSecondCalendarCoexist(CalendarCoexist $secondCalendarCoexist): self
    {
        if (!$this->secondCalendarCoexists->contains($secondCalendarCoexist)) {
            $this->secondCalendarCoexists[] = $secondCalendarCoexist;
            $secondCalendarCoexist->setSecondCalendarInstance($this);
        }

        return $this;
    }

    public function removeSecondCalendarCoexist(CalendarCoexist $secondCalendarCoexist): self
    {
        if ($this->secondCalendarCoexists->contains($secondCalendarCoexist)) {
            $this->secondCalendarCoexists->removeElement($secondCalendarCoexist);
            // set the owning side to null (unless already changed)
            if ($secondCalendarCoexist->getSecondCalendarInstance() === $this) {
                $secondCalendarCoexist->setSecondCalendarInstance(null);
            }
        }

        return $this;
    }
}
