<?php

namespace Lib\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Lib\BookBundle\Entity\Publisher;

/**
 * @ORM\Entity
 * @ORM\Table(name="Book")
 */

class Book
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @ORM\Column(name="title", type="string", length=225, nullable=false)
     */
    private $title;
    
    /**
     * @ORM\Column(name="isbn", type="string", length=20, nullable=true)
     */
    private $isbn;
    
    /**
     * @ORM\Column(name="publishYear", type="smallint", nullable=false)
     */
    private $publishYear;
    
    /**
     * @ORM\Column(name="publishPlace", type="string", length=255, nullable=false)
     */
    private $publishPlace;
    
    /**
     * @ORM\Column(name="language", type="string", length=50, nullable=false)
     */
    private $language;
    
    /**
     * @ORM\Column(name="paperback", type="integer", nullable=false)
     */
    private $paperback;
    
    /**
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;
    
    /**
     * @ORM\Column(name="cover", type="string", length=255, nullable=true)
     */
    private $cover;
    
    /**
     * @ORM\Column(name="decscription", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="idPublisher", type="integer", nullable=false)
     */
    private $idPublisher;
    
    /**
     * @ORM\ManyToOne(targetEntity="Publisher", inversedBy="books")
     * @ORM\JoinColumn(name="idPublisher", referencedColumnName="idPublisher")
     */
    private $publisher;
    
    /**
     * @ORM\ManyToMany(targetEntity="Genre", inversedBy="books")
     * @ORM\JoinTable(name="Book2Genre")
     */
    private $genres;
    
    /**
     * @ORM\ManyToMany(targetEntity="Author", inversedBy="books")
     * @ORM\JoinTable(name="Book2Author")
     */
    private $authors;


    public function __construct() {
        $this->genres = new ArrayCollection();
        $this->authors = new ArrayCollection();
    }

    /**
     * Set idBook
     *
     * @param integer $idBook
     * @return Book
     */
    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;

        return $this;
    }

    /**
     * Get idBook
     *
     * @return integer 
     */
    public function getIdBook()
    {
        return $this->idBook;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Book
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set publishYear
     *
     * @param integer $publishYear
     * @return Book
     */
    public function setPublishYear($publishYear)
    {
        $this->publishYear = $publishYear;

        return $this;
    }

    /**
     * Get publishYear
     *
     * @return integer 
     */
    public function getPublishYear()
    {
        return $this->publishYear;
    }

    /**
     * Set publishPlace
     *
     * @param string $publishPlace
     * @return Book
     */
    public function setPublishPlace($publishPlace)
    {
        $this->publishPlace = $publishPlace;

        return $this;
    }

    /**
     * Get publishPlace
     *
     * @return string 
     */
    public function getPublishPlace()
    {
        return $this->publishPlace;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Book
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set paperback
     *
     * @param integer $paperback
     * @return Book
     */
    public function setPaperback($paperback)
    {
        $this->paperback = $paperback;

        return $this;
    }

    /**
     * Get paperback
     *
     * @return integer 
     */
    public function getPaperback()
    {
        return $this->paperback;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return Book
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set idPublisher
     *
     * @param integer $idPublisher
     * @return Book
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
     * Set publisher
     *
     * @param \Lib\BookBundle\Entity\Publisher $publisher
     * @return Book
     */
    public function setPublisher(\Lib\BookBundle\Entity\Publisher $publisher = null)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return \Lib\BookBundle\Entity\Publisher 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Add genres
     *
     * @param \Lib\BookBundle\Entity\Genre $genres
     * @return Book
     */
    public function addGenre(\Lib\BookBundle\Entity\Genre $genres)
    {
        $this->genres[] = $genres;

        return $this;
    }

    /**
     * Remove genres
     *
     * @param \Lib\BookBundle\Entity\Genre $genres
     */
    public function removeGenre(\Lib\BookBundle\Entity\Genre $genres)
    {
        $this->genres->removeElement($genres);
    }

    /**
     * Get genres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->genres;
    }

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
     * Add authors
     *
     * @param \Lib\BookBundle\Entity\Author $authors
     * @return Book
     */
    public function addAuthor(\Lib\BookBundle\Entity\Author $authors)
    {
        $this->authors[] = $authors;

        return $this;
    }

    /**
     * Remove authors
     *
     * @param \Lib\BookBundle\Entity\Author $authors
     */
    public function removeAuthor(\Lib\BookBundle\Entity\Author $authors)
    {
        $this->authors->removeElement($authors);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set cover
     *
     * @param string $cover
     * @return Book
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
