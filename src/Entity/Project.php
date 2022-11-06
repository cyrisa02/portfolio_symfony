<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 190)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $urllink = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $githublink = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $picture = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isSymfony = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isAngular = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isReact = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isWordpress = null;

     public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
       
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getUrllink(): ?string
    {
        return $this->urllink;
    }

    public function setUrllink(?string $urllink): self
    {
        $this->urllink = $urllink;

        return $this;
    }

    public function getGithublink(): ?string
    {
        return $this->githublink;
    }

    public function setGithublink(?string $githublink): self
    {
        $this->githublink = $githublink;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function isIsSymfony(): ?bool
    {
        return $this->isSymfony;
    }

    public function setIsSymfony(?bool $isSymfony): self
    {
        $this->isSymfony = $isSymfony;

        return $this;
    }

    public function isIsAngular(): ?bool
    {
        return $this->isAngular;
    }

    public function setIsAngular(?bool $isAngular): self
    {
        $this->isAngular = $isAngular;

        return $this;
    }

    public function isIsReact(): ?bool
    {
        return $this->isReact;
    }

    public function setIsReact(?bool $isReact): self
    {
        $this->isReact = $isReact;

        return $this;
    }

    public function isIsWordpress(): ?bool
    {
        return $this->isWordpress;
    }

    public function setIsWordpress(?bool $isWordpress): self
    {
        $this->isWordpress = $isWordpress;

        return $this;
    }
}