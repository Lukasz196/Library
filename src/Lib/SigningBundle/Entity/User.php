<?php

namespace Lib\SigningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
    */
     protected $id;

     public function getId()
     {
         return $this -> id;
     }
     
     public function setId($id)
     {
         $this->id = $id;
     }
     
          /**
      * @ORM\Column(type="boolean", nullable=true)
      */
     protected $active = true;
     
     public function getActive()
     {
         return $this -> active;
     }
     
     public function setActive($active)
     {
         $this->active = $active;
     }
     
     /**
      * @ORM\Column(type="string", length=20)
      */
     protected $firstname;
     
     public function getFirstname()
     {
         return $this -> firstname;
     }
     
     public function setFirstname($firstname)
     {
         $this->firstname = $firstname;
     }
     
     /**
      * @ORM\Column(type="string", length=45)
      */
     protected $lastname;
     
     public function getLastname()
     {
         return $this -> lastname;
     }
     
     public function setLastname($lastname)
     {
         $this->lastname = $lastname;
     }
     
      /**
      * @ORM\Column(type="string", scale=20)
      */
     protected $phone;
     
     public function getPhone()
     {
         return $this -> phone;
     }
     
     public function setPhone($phone)
     {
         $this->phone = $phone;
     }
     
     /**
      * @ORM\Column(type="integer", scale=11)
      */
     protected $pesel;
     
     public function getPesel()
     {
         return $this -> pesel;
     }
     
     public function setPesel($pesel)
     {
         $this->pesel = $pesel;
     }
         
     /**
      * @ORM\Column(type="date")
      */
     protected $birthdate;
     
     public function getBirthdate()
     {
         return $this -> birthdate -> format('d/m/Y');
     }
     
     public function setBirthdate($birthdate)
     {
         $time = strtotime($birthdate);
         $newformat = date('Y-m-d', $time);
         
         $this->birthdate = new \DateTime($newformat);
     }     
          
     /**
      * @ORM\Column(type="integer", nullable=true)
      */
     protected $idAddress;
     
     public function getIdAddress()
     {
         return $this -> idAddress;
     }
     
     public function setIdAddress($idAddress)
     {
         $this->idAddress = $idAddress;
     }

    public function __constructconstruct() 
    {
        parent::__construct();               
    }
}