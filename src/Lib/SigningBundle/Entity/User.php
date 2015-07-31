<?php

namespace Lib\SigningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="user")
  */
 class User
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
      * @ORM\Column(type="string", length=25)
      */
     protected $username;    
     
     public function getUsername()
     {
         return $this -> username;
     }
     
     public function setUsername($username)
     {
         $this->username = $username;
     }

      /**
      * @ORM\Column(type="string", length=20)
      */
     protected $password;
     
     public function getPassword()
     {
         return $this -> password;
     }
     
     public function setPassword($password)
     {
         $this->password = $password;
     }
     
     /**
      * @ORM\Column(type="boolean")
      */
     protected $active;
     
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
      * @ORM\Column(type="string", length=20)
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
      * @ORM\Column(type="text", scale=10)
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
     
     public $mydate;
     
     /**
      * @ORM\Column(type="date")
      */
     protected $birthdate;
     
     public function getBirthdate()
     {
         return $this -> birthdate;
     }
     
     public function setBirthdate($birthdate)
     {
         $this->birthdate = $birthdate;
     }
     
     /**
      * @ORM\Column(type="string", length=35)
      */
     protected $email;
     
     public function getEmail()
     {
         return $this -> email;
     }
     
     public function setEmail($email)
     {
         $this->email = $email;
     }
     
     /**
      * @ORM\Column(type="integer")
      */
     protected $idRole;

     public function getIdRole()
     {
         return $this -> idRole;
     }
     
     public function setIdRole($idRole)
     {
         $this->idRole = $idRole;
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
 }