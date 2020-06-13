<?php

namespace App\Entity\CalendarModule;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CalendarModule\CalendarCoexistRepository")
 */
class CalendarCoexist
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $firstCommonDay = [];

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CalendarModule\CalendarInstance", inversedBy="firstCalendarCoexists")
     * @ORM\JoinColumn(nullable=false)
     */
    private $firstCalendarInstance;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CalendarModule\CalendarInstance", inversedBy="secondCalendarCoexists")
     * @ORM\JoinColumn(nullable=false)
     */
    private $secondCalendarInstance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstCommonDay(): ?array
    {
        return $this->firstCommonDay;
    }

    public function setFirstCommonDay(array $firstCommonDay): self
    {
        $this->firstCommonDay = $firstCommonDay;

        return $this;
    }

    public function getFirstCalendarInstance(): ?CalendarInstance
    {
        return $this->firstCalendarInstance;
    }

    public function setFirstCalendarInstance(?CalendarInstance $firstCalendarInstance): self
    {
        $this->firstCalendarInstance = $firstCalendarInstance;

        return $this;
    }

    public function getSecondCalendarInstance(): ?CalendarInstance
    {
        return $this->secondCalendarInstance;
    }

    public function setSecondCalendarInstance(?CalendarInstance $secondCalendarInstance): self
    {
        $this->secondCalendarInstance = $secondCalendarInstance;

        return $this;
    }
}
