<?php

namespace App\Entity\CommonModule;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\GameRepository")
 */
class Game
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
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $esrb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $metacritic;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\GameData", mappedBy="game")
     */
    private $gameData;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\Party", mappedBy="game")
     */
    private $parties;

    public function __construct()
    {
        $this->gameData = new ArrayCollection();
        $this->parties = new ArrayCollection();
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getEsrb(): ?string
    {
        return $this->esrb;
    }

    public function setEsrb(string $esrb): self
    {
        $this->esrb = $esrb;

        return $this;
    }

    public function getMetacritic(): ?int
    {
        return $this->metacritic;
    }

    public function setMetacritic(int $metacritic): self
    {
        $this->metacritic = $metacritic;

        return $this;
    }

    /**
     * @return Collection|GameData[]
     */
    public function getGameData(): Collection
    {
        return $this->gameData;
    }

    public function addGameData(GameData $gameData): self
    {
        if (!$this->gameData->contains($gameData)) {
            $this->gameData[] = $gameData;
            $gameData->setGame($this);
        }

        return $this;
    }

    public function removeGameData(GameData $gameData): self
    {
        if ($this->gameData->contains($gameData)) {
            $this->gameData->removeElement($gameData);
            // set the owning side to null (unless already changed)
            if ($gameData->getGame() === $this) {
                $gameData->setGame(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Party[]
     */
    public function getParties(): Collection
    {
        return $this->parties;
    }

    public function addParty(Party $party): self
    {
        if (!$this->parties->contains($party)) {
            $this->parties[] = $party;
            $party->setGame($this);
        }

        return $this;
    }

    public function removeParty(Party $party): self
    {
        if ($this->parties->contains($party)) {
            $this->parties->removeElement($party);
            // set the owning side to null (unless already changed)
            if ($party->getGame() === $this) {
                $party->setGame(null);
            }
        }

        return $this;
    }
}
