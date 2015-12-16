<?php

namespace uni\bundle\marcaBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * noticias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class noticias
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
     * @ORM\Column(name="titulo", type="string", length=50)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="text")
     */
    private $contenido;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=50)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=50)
     */
    private $autor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pub", type="datetime")
     */
    private $fechaPub;


    /**
     * Get id
     *
     * @return integer 
     */
    
    /**
* @ORM\ManyToOne(targetEntity="categorias", inversedBy="allnoticias", cascade={"remove"})
* @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
*/
protected $categoria;
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return noticias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return noticias
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return noticias
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return noticias
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set fechaPub
     *
     * @param \DateTime $fechaPub
     * @return noticias
     */
    public function setFechaPub($fechaPub)
    {
        $this->fechaPub = $fechaPub;

        return $this;
    }

    /**
     * Get fechaPub
     *
     * @return \DateTime 
     */
    public function getFechaPub()
    {
        return $this->fechaPub;
    }

    /**
     * Set categoria
     *
     * @param \uni\bundle\marcaBundle\Entity\categorias $categoria
     * @return noticias
     */
    
    
    
    
    
    public function setCategoria(\uni\bundle\marcaBundle\Entity\categorias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }
    
  
  



    /**
     * Get categoria
     *
     * @return \uni\bundle\marcaBundle\Entity\categorias 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Add allcomentarios
     *
     * @param \uni\bundle\marcaBundle\Entity\comentarios $allcomentarios
     * @return noticias
     */
    public function addAllcomentario(\uni\bundle\marcaBundle\Entity\comentarios $allcomentarios)
    {
        $this->allcomentarios[] = $allcomentarios;

        return $this;
    }

    /**
     * Remove allcomentarios
     *
     * @param \uni\bundle\marcaBundle\Entity\comentarios $allcomentarios
     */
    public function removeAllcomentario(\uni\bundle\marcaBundle\Entity\comentarios $allcomentarios)
    {
        $this->allcomentarios->removeElement($allcomentarios);
    }

    /**
     * Get allcomentarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAllcomentarios()
    {
        return $this->allcomentarios;
    }
    
    
    /**
* @ORM\OneToMany(targetEntity="comentarios", mappedBy="noticias", cascade={"remove"})
*/
protected $allcomentarios;

public function __construct() {
$this->allcomentarios = new ArrayCollection();
$this->allanuncios = new ArrayCollection();
}
public function __toString() {
     return $this->titulo;
}

  /**
* @ORM\ManyToMany(targetEntity="anuncios", mappedBy="allnoticias")
*/

private $allanuncios;




    /**
     * Add allanuncios
     *
     * @param \uni\bundle\marcaBundle\Entity\anuncios $allanuncios
     * @return noticias
     */
    public function addAllanuncio(\uni\bundle\marcaBundle\Entity\anuncios $allanuncios)
    {
        $this->allanuncios[] = $allanuncios;

        return $this;
    }

    /**
     * Remove allanuncios
     *
     * @param \uni\bundle\marcaBundle\Entity\anuncios $allanuncios
     */
    public function removeAllanuncio(\uni\bundle\marcaBundle\Entity\anuncios $allanuncios)
    {
        $this->allanuncios->removeElement($allanuncios);
    }

    /**
     * Get allanuncios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAllanuncios()
    {
        return $this->allanuncios;
    }
}
