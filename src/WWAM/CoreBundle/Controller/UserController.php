<?php

namespace WWAM\CoreBundle\Controller;

use WWAM\CoreBundle\Entity\User;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends FOSRestController
{
    /**
     * @Rest\View
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()
                      ->getRepository('WWAMCoreBundle:User')
                      ->findAll();
        
        return array('users', $users);
    }
    
    public function getAction($id)
    {
        return array();
    }
}
