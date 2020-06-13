<?php

namespace App\Entity\CommonModule;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommonModule\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * 
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="date")
     */
    private $birthday;

    /**
     * @ORM\Column(type="array")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="array")
     */
    private $categoryPreferences = [];

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\Friend", mappedBy="userOne")
     */
    private $friends;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\Friend", mappedBy="userTwo")
     */
    private $hasFriendRequest;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\Avatar", mappedBy="user")
     */
    private $avatars;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\Documents", mappedBy="user")
     */
    private $documents;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CommonModule\Party", mappedBy="users")
     */
    private $parties;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\ImproperTagSignalment", mappedBy="signaledBy")
     */
    private $improperTagSignalments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommonModule\AccessGranted", mappedBy="user")
     */
    private $accessGranteds;

    public function __construct()
    {
        $this->friends = new ArrayCollection();
        $this->hasFriendRequest = new ArrayCollection();
        $this->avatars = new ArrayCollection();
        $this->documents = new ArrayCollection();
        $this->parties = new ArrayCollection();
        $this->improperTagSignalments = new ArrayCollection();
        $this->accessGranteds = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getCategoryPreferences(): ?array
    {
        return $this->categoryPreferences;
    }

    public function setCategoryPreferences(array $categoryPreferences): self
    {
        $this->categoryPreferences = $categoryPreferences;

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

    /**
     * @return Collection|Friend[]
     */
    public function getFriends(): Collection
    {
        return $this->friends;
    }

    public function addFriend(Friend $friend): self
    {
        if (!$this->friends->contains($friend)) {
            $this->friends[] = $friend;
            $friend->setUserOne($this);
        }

        return $this;
    }

    public function removeFriend(Friend $friend): self
    {
        if ($this->friends->contains($friend)) {
            $this->friends->removeElement($friend);
            // set the owning side to null (unless already changed)
            if ($friend->getUserOne() === $this) {
                $friend->setUserOne(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Friend[]
     */
    public function getHasFriendRequest(): Collection
    {
        return $this->hasFriendRequest;
    }

    public function addHasFriendRequest(Friend $hasFriendRequest): self
    {
        if (!$this->hasFriendRequest->contains($hasFriendRequest)) {
            $this->hasFriendRequest[] = $hasFriendRequest;
            $hasFriendRequest->setUserTwo($this);
        }

        return $this;
    }

    public function removeHasFriendRequest(Friend $hasFriendRequest): self
    {
        if ($this->hasFriendRequest->contains($hasFriendRequest)) {
            $this->hasFriendRequest->removeElement($hasFriendRequest);
            // set the owning side to null (unless already changed)
            if ($hasFriendRequest->getUserTwo() === $this) {
                $hasFriendRequest->setUserTwo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Avatar[]
     */
    public function getAvatars(): Collection
    {
        return $this->avatars;
    }

    public function addAvatar(Avatar $avatar): self
    {
        if (!$this->avatars->contains($avatar)) {
            $this->avatars[] = $avatar;
            $avatar->setUser($this);
        }

        return $this;
    }

    public function removeAvatar(Avatar $avatar): self
    {
        if ($this->avatars->contains($avatar)) {
            $this->avatars->removeElement($avatar);
            // set the owning side to null (unless already changed)
            if ($avatar->getUser() === $this) {
                $avatar->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Documents[]
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Documents $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
            $document->setUser($this);
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
            // set the owning side to null (unless already changed)
            if ($document->getUser() === $this) {
                $document->setUser(null);
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
            $party->addUser($this);
        }

        return $this;
    }

    public function removeParty(Party $party): self
    {
        if ($this->parties->contains($party)) {
            $this->parties->removeElement($party);
            $party->removeUser($this);
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
            $improperTagSignalment->setSignaledBy($this);
        }

        return $this;
    }

    public function removeImproperTagSignalment(ImproperTagSignalment $improperTagSignalment): self
    {
        if ($this->improperTagSignalments->contains($improperTagSignalment)) {
            $this->improperTagSignalments->removeElement($improperTagSignalment);
            // set the owning side to null (unless already changed)
            if ($improperTagSignalment->getSignaledBy() === $this) {
                $improperTagSignalment->setSignaledBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AccessGranted[]
     */
    public function getAccessGranteds(): Collection
    {
        return $this->accessGranteds;
    }

    public function addAccessGranted(AccessGranted $accessGranted): self
    {
        if (!$this->accessGranteds->contains($accessGranted)) {
            $this->accessGranteds[] = $accessGranted;
            $accessGranted->setUser($this);
        }

        return $this;
    }

    public function removeAccessGranted(AccessGranted $accessGranted): self
    {
        if ($this->accessGranteds->contains($accessGranted)) {
            $this->accessGranteds->removeElement($accessGranted);
            // set the owning side to null (unless already changed)
            if ($accessGranted->getUser() === $this) {
                $accessGranted->setUser(null);
            }
        }

        return $this;
    }
}
