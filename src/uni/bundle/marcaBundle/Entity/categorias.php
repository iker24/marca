<?php

namespace uni\bundle\marcaBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * categorias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class categorias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreCat", type="string", length=50)
     * 
     */
    
    /**
* @ORM\OneToMany(targetEntity="noticias", mappedBy="categoria", cascade={"remove"})
*/
protected $allnoticias;

public function __construct() {
$this->allnoticias = new ArrayCollection();
}
    
    private $nombreCat;

    /**
     * @var string
     *
     * @ORM\Column(name="descCat", type="text")
     */
    private $descCat;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreCat
     *
     * @param string $nombreCat
     * @return categorias
     */
    public function setNombreCat($nombreCat)
    {
        $this->nombreCat = $nombreCat;

        return $this;
    }

    /**
     * Get nombreCat
     *
     * @return string 
     */
    public function getNombreCat()
    {
        return $this->nombreCat;
    }

    /**
     * Set descCat
     *
     * @param string $descCat
     * @return categorias
     */
    public function setDescCat($descCat)
    {
        $this->descCat = $descCat;

        return $this;
    }

    /**
     * Get descCat
     *
     * @return string 
     */
    public function getDescCat()
    {
        return $this->descCat;
    }

    /**
     * Add allnoticias
     *
     * @param \uni\bundle\marcaBundle\Entity\noticias $allnoticias
     * @return categorias
     */
    public function addAllnoticia(\uni\bundle\marcaBundle\Entity\noticias $allnoticias)
    {
        $this->allnoticias[] = $allnoticias;

        return $this;
    }

    /**
     * Remove allnoticias
     *
     * @param \uni\bundle\marcaBundle\Entity\noticias $allnoticias
     */
    public function removeAllnoticia(\uni\bundle\marcaBundle\Entity\noticias $allnoticias)
    {
        $this->allnoticias->removeElement($allnoticias);
    }

    /**
     * Get allnoticias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAllnoticias()
    {
        return $this->allnoticias;
    }
    
       public function __toString() {
     return $this->descCat;
}
    
    
}
