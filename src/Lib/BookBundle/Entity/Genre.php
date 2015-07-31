<?php

namespace Lib\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Genre")
 */
class Genre
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    
    /**
     * @ORM\ManyToMany(targetEntity="Book", mappedBy="genres")
     */
    private $books;
    
    public function __construct() {
        $this->books = new ArrayCollection();
    }

    /**
     * Set idGenre
     *
     * @param integer $idGenre
     * @return Genre
     */
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get idGenre
     *
     * @return integer 
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Genre
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add books
     *
     * @param \Lib\BookBundle\Entity\Book $books
     * @return Genre
     */
    public function addBook(\Lib\BookBundle\Entity\Book $books)
    {
        $this->books[] = $books;

        return $this;
    }

    /**
     * Remove books
     *
     * @param \Lib\BookBundle\Entity\Book $books
     */
    public function removeBook(\Lib\BookBundle\Entity\Book $books)
    {
        $this->books->removeElement($books);
    }

    /**
     * Get books
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBooks()
    {
        return $this->books;
    }
}
