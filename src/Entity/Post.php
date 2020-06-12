<?php

namespace App\Entity;

use App\service\ImageService;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Columns;




/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 * @Vich\Uploadable
 * @Doctrine\ORM\Mapping\colums
 * @Doctrine\ORM\Mapping\colums
 */
 

class Post {
   
    /**
     * @Vich\Uploadable
     * @ORM\Entity(repositoryClass=PostRepository::class)
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Doctrine\ORM\Mapping\colums
     */

    private $id;

    /**
     * @Doctrine\ORM\Mapping\colums
     * @ORM\Column(type="string", length=255)
     */

    private $name;

    /**
     * @Doctrine\ORM\Mapping\colums
     * @ORM\Column(type="string", length=255)
     */

    private $content;

    /**
    * @Doctrine\ORM\Mapping\colums
    * @ORM\colums(type="string", length=255)
    * @var \Datetime
    */

    private $image;

    /**
     * @Doctrine\ORM\Mapping\colums
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    
    private $imageFile;

    /**
     * @Doctrine\ORM\Mapping\colums
     * @ORM\Column(type="file")
     * @var File
     */
    private $updatedAt;

    /** 
     * @Doctrine\ORM\Mapping\colums
     * @ORM\Column(type="text")
     * @var File
     */

    private $slug;

    /**
    * @Doctrine\ORM\Mapping\colums
    * @ORM\Column(type="string", length=255)
    */    
    
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }
    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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
}
