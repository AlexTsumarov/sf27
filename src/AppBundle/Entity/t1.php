<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Description of t1.
 *
 * @author Alexandr_Tsumarov1
 */
class t1 implements UserInterface
{
    /**
     * 
     */
    public function eraseCredentials(Array $aParams)
    {
        return $aParams;
    }

    public function getPassword()
    {
    }

    public function getRoles()
    {
    }

    public function getSalt()
    {
    }

    public function getUsername()
    {
    }

//put your code here
}
