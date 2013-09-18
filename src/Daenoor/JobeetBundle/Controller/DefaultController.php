<?php

namespace Daenoor\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DaenoorJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
