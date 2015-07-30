<?php

namespace Lib\SigningBundle\Entity;

class NewUser
{
    protected $user;

    protected $dueDate;

    public function getNewUser()
    {
        return $this->user;
    }

    public function setNewUser($user)
    {
        $this->user = $user;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}