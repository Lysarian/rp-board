<?php

namespace App\Model\CalendarModule;

use Doctrine\ORM\Mapping as ORM;


class Cycle
{

    /**
     * 
     */
    private $name;

    /**
     * 
     */
    private $description;

    /**
     * 
     */
    private $type;

    /**
     * 
     */
    private $isMoon;

    /**
     * 
     */
    private $isSun;

    /**
     * 
     */
    private $isYear;

    /**
     * 
     */
    private $isSuccessionOfCycle;

    /**
     * 
     */
    private $cycles = [];

    /**
     * 
     */
    private $lengthBase;

    /**
     * 
     */
    private $lengthMin;

    /**
     * 
     */
    private $lengthMax;

    /**
     * 
     */
    private $alternateLengths = [];

    /**
     * 
     */
    private $alternatePattern;

    /**
     * 
     */
    private $alternatePatternChangeOn;

    /**
     * 
     */
    private $alternatePatternCycle = [];

    /**
     * 
     */
    private $toIntersect = [];

    /**
     * 
     */
    private $toIntersectEvent;

    /**
     * 
     */
    private $unitNamelist = [];

    /**
     * 
     */
    private $unitNamelistType;

    //Reference Type serves to link it to a main type of calendar division, while calendar value serves to indicate wether the 

    /**
     * 
     */
    private $referenceType;

    /**
     * 
     */
    private $calendarValue;



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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIsMoon(): ?bool
    {
        return $this->isMoon;
    }

    public function setIsMoon(bool $isMoon): self
    {
        $this->isMoon = $isMoon;

        return $this;
    }

    public function getIsSun(): ?bool
    {
        return $this->isSun;
    }

    public function setIsSun(bool $isSun): self
    {
        $this->isSun = $isSun;

        return $this;
    }

    public function getIsYear(): ?bool
    {
        return $this->isYear;
    }

    public function setIsYear(bool $isYear): self
    {
        $this->isYear = $isYear;

        return $this;
    }

    public function getIsSuccessionOfCycle(): ?bool
    {
        return $this->isSuccessionOfCycle;
    }

    public function setIsSuccessionOfCycle(bool $isSuccessionOfCycle): self
    {
        $this->isSuccessionOfCycle = $isSuccessionOfCycle;

        return $this;
    }

    public function getCycles(): ?array
    {
        return $this->cycles;
    }

    public function setCycles(array $cycles): self
    {
        $this->cycles = $cycles;

        return $this;
    }

    public function getLengthBase(): ?string
    {
        return $this->lengthBase;
    }

    public function setLengthBase(string $lengthBase): self
    {
        $this->lengthBase = $lengthBase;

        return $this;
    }

    public function getLengthMin(): ?int
    {
        return $this->lengthMin;
    }

    public function setLengthMin(?int $lengthMin): self
    {
        $this->lengthMin = $lengthMin;

        return $this;
    }

    public function getLengthMax(): ?int
    {
        return $this->lengthMax;
    }

    public function setLengthMax(int $lengthMax): self
    {
        $this->lengthMax = $lengthMax;

        return $this;
    }

    public function getAlternateLengths(): ?array
    {
        return $this->alternateLengths;
    }

    public function setAlternateLengths(?array $alternateLengths): self
    {
        $this->alternateLengths = $alternateLengths;

        return $this;
    }

    public function getAlternatePattern(): ?string
    {
        return $this->alternatePattern;
    }

    public function setAlternatePattern(?string $alternatePattern): self
    {
        $this->alternatePattern = $alternatePattern;

        return $this;
    }

    public function getAlternatePatternChangeOn(): ?int
    {
        return $this->alternatePatternChangeOn;
    }

    public function setAlternatePatternChangeOn(int $alternatePatternChangeOn): self
    {
        $this->alternatePatternChangeOn = $alternatePatternChangeOn;

        return $this;
    }

    public function getAlternatePatternCycle(): ?array
    {
        return $this->alternatePatternCycle;
    }

    public function setAlternatePatternCycle(array $alternatePatternCycle): self
    {
        $this->alternatePatternCycle = $alternatePatternCycle;

        return $this;
    }

    public function getToIntersect(): ?array
    {
        return $this->toIntersect;
    }

    public function setToIntersect(array $toIntersect): self
    {
        $this->toIntersect = $toIntersect;

        return $this;
    }

    public function getToIntersectEvent(): ?string
    {
        return $this->toIntersectEvent;
    }

    public function setToIntersectEvent(string $toIntersectEvent): self
    {
        $this->toIntersectEvent = $toIntersectEvent;

        return $this;
    }

    public function getUnitNamelist(): ?array
    {
        return $this->unitNamelist;
    }

    public function setUnitNamelist(array $unitNamelist): self
    {
        $this->unitNamelist = $unitNamelist;

        return $this;
    }

    public function getUnitNamelistType(): ?string
    {
        return $this->unitNamelistType;
    }

    public function setUnitNamelistType(string $unitNamelistType): self
    {
        $this->unitNamelistType = $unitNamelistType;

        return $this;
    }

    public function getReferenceType(): ?string
    {
        return $this->referenceType;
    }

    public function setReferenceType(string $referenceType): self
    {
        $this->referenceType = $referenceType;

        return $this;
    }

    public function getCalendarValue(): ?string
    {
        return $this->calendarValue;
    }

    public function setCalendarValue(string $calendarValue): self
    {
        $this->calendarValue = $calendarValue;

        return $this;
    }
}
