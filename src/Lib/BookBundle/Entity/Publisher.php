<?php

namespace Lib\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Publisher")
 */
class Publisher
{
    /**
     * @ORM\Column(name="idPublisher", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPublisher;
    
    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    
    /**
     * @ORM\OneToMany(targetEntity="Book", mappedBy="publisher")
     */
    private $books;
    
    public function __construct() {
        $this->books = new ArrayCollection();
    }

    /**
     * Set idPublisher
     *
     * @param integer $idPublisher
     * @return Publisher
     */
    public function setIdPublisher($idPublisher)
    {
        $this->idPublisher = $idPublisher;

        return $this;
    }

    /**
     * Get idPublisher
     *
     * @return integer 
     */
    public function getIdPublisher()
    {
        return $this->idPublisher;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Publisher
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
     * @return Publisher
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
