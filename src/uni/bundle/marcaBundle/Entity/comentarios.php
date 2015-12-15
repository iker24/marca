<?php

namespace uni\bundle\marcaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comentarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class comentarios
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
     * @ORM\Column(name="tituloCom", type="string", length=50)
     */
    private $tituloCom;

    /**
     * @var string
     *
     * @ORM\Column(name="desCom", type="text")
     */
    private $desCom;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaCom", type="text")
     */
    private $fechaCom;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=10)
     */
    private $nick;


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
     * Set tituloCom
     *
     * @param string $tituloCom
     * @return comentarios
     */
    public function setTituloCom($tituloCom)
    {
        $this->tituloCom = $tituloCom;

        return $this;
    }

    /**
     * Get tituloCom
     *
     * @return string 
     */
    public function getTituloCom()
    {
        return $this->tituloCom;
    }

    /**
     * Set desCom
     *
     * @param string $desCom
     * @return comentarios
     */
    public function setDesCom($desCom)
    {
        $this->desCom = $desCom;

        return $this;
    }

    /**
     * Get desCom
     *
     * @return string 
     */
    public function getDesCom()
    {
        return $this->desCom;
    }

    /**
     * Set fechaCom
     *
     * @param string $fechaCom
     * @return comentarios
     */
    public function setFechaCom($fechaCom)
    {
        $this->fechaCom = $fechaCom;

        return $this;
    }

    /**
     * Get fechaCom
     *
     * @return string 
     */
    public function getFechaCom()
    {
        return $this->fechaCom;
    }

    /**
     * Set nick
     *
     * @param string $nick
     * @return comentarios
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }
    
    
    /**
* @ORM\ManyToOne(targetEntity="noticias", inversedBy="allcomentarios", cascade={"remove"})

*/
protected $noticias;


    /**
     * Set noticias
     *
     * @param \uni\bundle\marcaBundle\Entity\noticias $noticias
     * @return comentarios
     */
    public function setNoticias(\uni\bundle\marcaBundle\Entity\noticias $noticias = null)
    {
        $this->noticias = $noticias;

        return $this;
    }

    /**
     * Get noticias
     *
     * @return \uni\bundle\marcaBundle\Entity\noticias 
     */
    public function getNoticias()
    {
        return $this->noticias;
    }
}
