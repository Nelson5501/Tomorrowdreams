<?php

namespace App\Entity;

//Anchor this is an test 
use App\service\ImageService;
use App\Repository\PostRepository;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\column;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Bundle\DoctrineBundle;
use Doctrine\Bundle\DoctrineBundle\Controller;
use vich\UploaderBundle\Mapping\Annotation;



/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 * image
 * imageFile
 * updatedAt
 * @Doctrine\ORM\Mapping\column
 * @Doctrine\ORM\Mapping\Entity
 * @Orm\columns(name='status',type='string,length=255')
 * @Vich\Uploadable
 */

class Post {

    /**
     * image
     * imageFile
     * updatedAt  
     * @Vich\Uploadable
     * @ORM\Entity(repositoryClass=PostRepository::class)
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @Doctrine/ORM/Mapping/column
     * @ORM\Column(type="integer")
     * @var int
     * @ORM\column(name='status',type='string,length=255'

     **/

    
     private $id;

    /**
     * @ORM\Columnn(type="string", length=255)
     */

    private $name;

    /**
     * @ORM\Columnn(type="string", length=255)
     */

    private $content;

    /**
    * @ORM\column(type="string", length=255)
    * @var \Datetime
    */

    private $image;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    
    private $imageFile;

    /**
     * @ORM\Column(type="file")
     * @var File
     */

    private $updatedAt;

    /** 
     * @ORM\Column(type="text")
     * @var File
     */

    private $slug;

    /*
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
