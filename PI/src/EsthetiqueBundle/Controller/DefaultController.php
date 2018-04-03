<?php

namespace EsthetiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user=new User();
        return $this->render('EsthetiqueBundle:Default:index.html.twig');
    }
}
