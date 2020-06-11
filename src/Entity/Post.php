<?php

namespace App\Entity;

use App\service\ImageService;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use vich\UploaderBundle\Mapping\Annotation as vich;
/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 * @Doctrine\ORM\Mapping\colums
 * @vich\uploadable
 */
 

class Post {
   
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
    private $content;

    /**
    * @ORM\colums(type="datetime")
    */

    private $updatedAt;

    /**
    * @ORM\colums(type="boolean")
    * @Doctrine\ORM\Mapping\colums
    */
   
    private $thumbnail;

    /**
     * vich\uploadableFields(mappings="post_thumbnails", fileNameProperty="thumbnail")
     */

    private $thumbailFile;
    

    private $slug;

    /**
    * @ORM\Column(type="string", length=255)
    */    

   
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
}
