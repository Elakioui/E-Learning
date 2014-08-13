<?php

namespace Learning\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LearningUserBundle:Default:index.html.twig');
    }
}
