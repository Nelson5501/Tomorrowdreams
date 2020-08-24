<?php

namespace App\Entity;


use Doctrine\ORM\Mapping\colum;
use App\service\ImageService;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\colums;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Bundle\DoctrineBundle;
use Doctrine\Bundle\DoctrineBundle\Controller;
use vich\UploaderBundle\Mapping\Annotation;


/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 * image
 * imageFile
 * updatedAt
 * @Doctrine\ORM\Mapping\colums
 * @Doctrine\ORM\Mapping\Entity
 * @Orm\column(name='status',type='string,length=255')
 * @Vich\Uploadable
 */

class Post {


    /**
     * use @Doctrine\ORM\Mapping\colums
     * image
     * imageFile
     * updatedAt  
     * @Vich\Uploadable
     * @ORM\Entity(repositoryClass=PostRepository::class)
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int
     * @ORM\column(name='status',type='string,length=255'
     **/

    private $id;

    /**
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
