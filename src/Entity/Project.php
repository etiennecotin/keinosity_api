<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"project"}})
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @Groups({"project"})
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @Groups({"project"})
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var ProjectType|null
     * @Groups({"project"})
     * @ORM\ManyToOne(targetEntity="ProjectType", inversedBy="projects")
     */
    private $type;

    /**
     * @var string|null
     * @Groups({"project"})
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var User|null
     * @Groups({"project"})
     * @ORM\ManyToOne(targetEntity="User", fetch="EAGER")
     */
    private $author;

    /**
     * @var string|null
     * @Groups({"project"})
     * @ORM\Column(type="string", length=300)
     */
    private $location;

    /**
     * @var
     */
    private $comments;

    /**
     * @var
     */
    private $likes;

    /**
     * @var \DateTime|null
     * @Gedmo\Timestampable(on="create")
     * @Groups({"project"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName():? string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return ProjectType|null
     */
    public function getType(): ?ProjectType
    {
        return $this->type;
    }

    /**
     * @param ProjectType|null $type
     */
    public function setType(?ProjectType $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return User|null
     */
    public function getAuthor(): ?User
    {
        return $this->author;
    }

    /**
     * @param User|null $author
     */
    public function setAuthor(?User $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string|null $location
     */
    public function setLocation(?string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
