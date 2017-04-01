<?php

namespace ZeldaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZeldaBundle:Default:index.html.twig');
    }
}
