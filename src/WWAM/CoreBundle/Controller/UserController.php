<?php

namespace WWAM\CoreBundle\Controller;

use WWAM\CoreBundle\Entity\User;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends FOSRestController
{
    public function indexAction()
    {
        $users = $this->getDoctrine()
                      ->getRepository('WWAMCoreBundle:User')
                      ->findAll();
        
        return $users;
    }
    
    public function getAction($id)
    {
        $user = $this->getDoctrine()
                     ->getRepository('WWAMCoreBundle:User')
                     ->find($id);
        
        return $user;
    }
}
