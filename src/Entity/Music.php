<?php

namespace App\Entity;

use App\Repository\MusicRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Columns;
use Doctrine\ORM\Mapping\colums;


/**
 * @ORM\Entity(repositoryClass=MusicRepository::class)
 * @Doctrine\ORM\Mapping\Columns;
 */
class Music
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Doctrine\ORM\Mapping\Columns;

     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Artist;

    /**
     * @ORM\Column(type="array")
     */
    private $Cover = [];

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

    public function getArtist(): ?string
    {
        return $this->Artist;
    }

    public function setArtist(string $Artist): self
    {
        $this->Artist = $Artist;

        return $this;
    }

    public function getCover(): ?array
    {
        return $this->Cover;
    }

    public function setCover(array $Cover): self
    {
        $this->Cover = $Cover;

        return $this;
    }
}
