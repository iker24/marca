<?php

namespace uni\bundle\marcaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anuncios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class anuncios
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
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text")
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="compania", type="string", length=50)
     */
    private $compania;


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
     * Set nombre
     *
     * @param string $nombre
     * @return anuncios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return anuncios
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set compania
     *
     * @param string $compania
     * @return anuncios
     */
    public function setCompania($compania)
    {
        $this->compania = $compania;

        return $this;
    }

    /**
     * Get compania
     *
     * @return string 
     */
    public function getCompania()
    {
        return $this->compania;
    }
    
    
    /**
* @ORM\ManyToMany(targetEntity="noticias", inversedBy="allanuncios")
*/

private $allnoticias;

public function __construct() {
$this->allnoticias = new ArrayCollection();
}
    

    /**
     * Add allnoticias
     *
     * @param \uni\bundle\marcaBundle\Entity\noticias $allnoticias
     * @return anuncios
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
}
